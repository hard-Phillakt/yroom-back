<?php

namespace frontend\controllers;

use backend\models\YCategory;
use backend\models\YProduct;
use backend\models\YSlider;


use yii\web\Controller;


class IndexController extends Controller
{
    public $layout = 'main';

    public function actionIndex()
    {

//      Slider
        $querySlider = new YSlider();
        $slider = $querySlider::find()->where('published = 1')->asArray()->all();

//      Product
        $queryCategory = new YCategory();
        $category = $queryCategory::find()->where(['published' => 1])->asArray()->all();

//      Product
        $queryProduct = new YProduct();
        $product = $queryProduct::find()->where(['published' => 1])->asArray()->all();

        return $this->render('index', compact(['slider', 'category', 'product']));
    }
}