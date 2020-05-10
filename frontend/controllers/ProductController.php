<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\YProduct;
use backend\models\YCategory;


class ProductController extends Controller
{

    public $layout = 'main';

    public function actionIndex()
    {
        $requestProduct = Yii::$app->request->get('q-cat');

//      Category
        $queryCategory = new YCategory();
        $category = $queryCategory::find()->where(['published' => 1])->asArray()->orderBy('prioritet ASC')->all();

//      Product
        $queryProduct = new YProduct();
        $product = $queryProduct::find()->where(['published' => 1, 'category_id' => $requestProduct])->asArray()->orderBy('prioritet ASC')->all();

//      render all
        if (empty($requestProduct)) {

            $productAll = $queryProduct::find()->where(['published' => 1])->asArray()->orderBy('prioritet ASC')->all();

            return $this->render('index', compact(['productAll', 'category']));
        }

//      render на пустоту
        if (empty($product)) {

            return $this->render('ajax-empty', compact(['category']));
        }

        return $this->render('index', compact(['product', 'category']));
    }

    public function actionCard()
    {
        $requestProduct = Yii::$app->request->get('id');

//      Category
        $queryCategory = new YCategory();
        $category = $queryCategory::find()->where(['published' => 1])->asArray()->orderBy('prioritet ASC')->all();


//      Product
        $queryProduct = new YProduct();
        $product = $queryProduct::find()->where(['id' => $requestProduct, 'published' => 1])->asArray()->orderBy('prioritet ASC')->all();

//      render на пустоту
        if (empty($product)) {

            return $this->render('ajax-empty', compact(['category']));
        }

        return $this->render('card', compact(['product', 'category']));

    }

    public function actionAjaxProduct()
    {

        $this->layout = false;

        $requestFilterProduct = Yii::$app->request->get('filter');
        
//      Product
        $queryProduct = new YProduct();

        $product = $queryProduct::find()
            ->andFilterWhere(['>=', 'price', $requestFilterProduct['price']['after']])
            ->andFilterWhere(['<=', 'price', $requestFilterProduct['price']['before']])
            ->asArray()
            ->orderBy('prioritet ASC')
            ->all();

//      render на пустоту
        if (empty($product)) {

//          Category
            $queryCategory = new YCategory();
            $category = $queryCategory::find()->where(['published' => 1])->asArray()->orderBy('prioritet ASC')->all();

            return $this->render('ajax-empty-filter', compact(['category']));
        }

        return $this->render('ajax-product', compact(['product']));
    }
}