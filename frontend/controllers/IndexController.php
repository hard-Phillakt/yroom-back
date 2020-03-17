<?php

namespace frontend\controllers;

use backend\models\YSlider;

use yii\web\Controller;


class IndexController extends Controller
{
    public $layout = 'main';
    
    public function actionIndex(){

        $query = new YSlider();

        $model = $query::find()->where('published = 1')->asArray()->all();

        return $this->render('index', compact('model'));
    }
}