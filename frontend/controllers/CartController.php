<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\YProduct;


class CartController extends Controller
{

    public function actionAdd()
    {

        $requestId = Yii::$app->request->get('id');
        $requestQty = (int)Yii::$app->request->get('qty');

        $queryProduct = new YProduct();

        $product = $queryProduct::find()->where(['id' => $requestId])->asArray()->all();

        $priceDiscount = $product[0]['discount_id'] ? $product[0]['price'] - (round(($product[0]['price'] * $product[0]['discount_id']) / 100)) : round($product[0]['price']);

        $session = Yii::$app->session;

        $session->open();

        if (isset($_SESSION['cart'][$product[0]['id']])) {

            $_SESSION['cart'][$product[0]['id']]['qty'] += $requestQty ? $requestQty : 1;
        } else {

            $_SESSION['cart'][$product[0]['id']] = [
                'id' => (int)$product[0]['id'],
                'qty' => $requestQty ? $requestQty : 1,
                'title' => $product[0]['title'],
//               price с учётом скидки
                'price' => $priceDiscount,
                'img' => $product[0]['img_prev']
            ];
        }

        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $requestQty : $requestQty;

        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + round($_SESSION['cart'][$product[0]['id']]['price']) * $requestQty : round($_SESSION['cart'][$product[0]['id']]['price']) * $requestQty;

        $dataCart = [
            'cart' => $session['cart'],
            'sum' => $session['cart.sum'],
            'qty' => $session['cart.qty'],
        ];

        return json_encode($dataCart);

    }

    public function actionChange()
    {

        $request = Yii::$app->request->get('param');

//      slice param
        $qId = $request['id'];
        $qType = $request['type'];
        $qNumber = (int) $request['number'];

        $queryProduct = new YProduct();

        $product = $queryProduct::find()->where(['id' => $qId])->asArray()->all();

        $priceDiscount = $product[0]['discount_id'] ? $product[0]['price'] - (round(($product[0]['price'] * $product[0]['discount_id']) / 100)) : $product[0]['price'];

        $session = Yii::$app->session;

        $session->open();

        if (isset($_SESSION['cart'][$product[0]['id']])) {

            switch ($qType) {
                case ('INC'):

                    $_SESSION['cart'][$product[0]['id']]['qty'] += 1;

                    $_SESSION['cart.qty'] = $_SESSION['cart.qty'] + 1;

                    $_SESSION['cart.sum'] = $_SESSION['cart.sum'] + $priceDiscount;

                    $dataCart = [
                        'cart' => $session['cart'],
                        'sum' => $session['cart.sum'],
                        'qty' => $session['cart.qty'],
                    ];

                    return json_encode($dataCart);

                    break;

                case ('DEC'):

                    if ($_SESSION['cart'][$product[0]['id']]['qty'] > 1) {

                        $_SESSION['cart'][$product[0]['id']]['qty'] -= 1;

                        $_SESSION['cart.qty'] = $_SESSION['cart.qty'] - 1;

                        $_SESSION['cart.sum'] = $_SESSION['cart.sum'] - $priceDiscount;
                    }

                    $dataCart = [
                        'cart' => $session['cart'],
                        'sum' => $session['cart.sum'],
                        'qty' => $session['cart.qty'],
                    ];

                    return json_encode($dataCart);

                    break;


                case ('CHANGE'):

                    $_SESSION['cart.qty'] = $_SESSION['cart.qty'] - $_SESSION['cart'][$product[0]['id']]['qty'];
                    $_SESSION['cart.sum'] = $_SESSION['cart.sum'] - ( (int) $priceDiscount * $_SESSION['cart'][$product[0]['id']]['qty']);

                    $_SESSION['cart'][$product[0]['id']]['qty'] = $qNumber;

                    $_SESSION['cart.qty'] = $_SESSION['cart.qty'] + $qNumber;

                    $_SESSION['cart.sum'] = $_SESSION['cart.sum'] + ( (int) $priceDiscount * $qNumber);

                    $dataCart = [
                        'cart' => $session['cart'],
                        'sum' => $session['cart.sum'],
                        'qty' => $session['cart.qty'],
                    ];

                    return json_encode($dataCart);

                    break;

                default:
                    return true;
            }

        }

    }



    public function actionDelete()
    {
        $requestId = Yii::$app->request->get('id');
        $session = Yii::$app->session;
        $session->open();

        if($_SESSION['cart'][$requestId]){

            $_SESSION['cart.sum'] = $_SESSION['cart.sum'] - ($_SESSION['cart'][$requestId]['price'] * $_SESSION['cart'][$requestId]['qty']);
            $_SESSION['cart.qty'] = $_SESSION['cart.qty'] - $_SESSION['cart'][$requestId]['qty'];

            unset($_SESSION['cart'][$requestId]);

            $dataCart = [
                'cart' => $session['cart'],
                'sum' => $session['cart.sum'],
                'qty' => $session['cart.qty'],
            ];

            return json_encode($dataCart);
        }
    }



    public function actionDestroy()
    {
        $session = Yii::$app->session;
        $session->destroy();
    }


    public function actionEmptyProduct()
    {
        $this->layout = false;

        return $this->render('empty-product');
    }


    public function actionIndex()
    {

        $session = Yii::$app->session;

        $session->open();

        $cart = [
            'cart' => $session['cart'],
            'sum' => $session['cart.sum'],
            'qty' => $session['cart.qty'],
        ];

        return $this->render('index', compact('cart'));
    }
}
