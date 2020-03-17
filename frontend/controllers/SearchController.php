<?php

namespace frontend\controllers;

use \yii\web\Controller;

class SearchController extends Controller
{

    public $layout = 'main';

    public function actionIndex(){

        return $this->render('index');
    }
}