<?php

namespace frontend\controllers;

use yii\web\Controller;

class ProductController extends Controller
{

    public $layout = 'main';

    public function actionIndex(){

        return $this->render('index');
    }

    public function actionCard(){

        return $this->render('card');
    }
}