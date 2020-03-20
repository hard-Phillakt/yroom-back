<?php

namespace frontend\controllers;

use Yii;
use yii\base\Controller;



class ErrorController extends Controller
{
    public function actionError(){

        $exception = Yii::$app->errorHandler->exception;

        if($exception->statusCode == '401'){

            return $this->render('401');
        }else {

            return $this->render('404');
        }

    }

}