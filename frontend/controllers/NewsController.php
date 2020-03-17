<?php

namespace frontend\controllers;


use yii\web\Controller;

class NewsController extends Controller
{
    public $layout = 'main';

    public function actionIndex(){

        return $this->render('index');
    }

    public function actionArticle(){

        return $this->render('article');
    }
}