<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\YProduct;


class CartController extends Controller
{

    public function actionAdd(){

        $requestId = Yii::$app->request->get('id');
        $requestQty = 1;
//        $requestQty = Yii::$app->request->get('qty');

        $queryProduct = new YProduct();

        $product = $queryProduct::find()->where(['id' => $requestId])->asArray()->all();

        $session = Yii::$app->session;

        $session->open();

        if(isset($_SESSION['cart'][$product[0]['id']])){
            $_SESSION['cart'][$product[0]['id']]['qty'] += 1;

        }else {

            $_SESSION['cart'][$product[0]['id']] = [
                'qty' => 1,
                'title' => $product[0]['title'],
                'price' => $product[0]['price'],
                'img' => $product[0]['img_prev']
            ];
        }

        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $requestQty : $requestQty;

        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $requestQty * $product[0]['price'] : $requestQty * $product[0]['price'];

        debug($session['cart']);
//        debug($session['cart.sum']);
//        debug($session['cart.qty']);

//        $session->destroy();

    }


    public function actionIndex(){

        return $this->render('index');
    }
}