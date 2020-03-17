<?php

namespace frontend\controllers;


use yii\web\Controller;

class AboutController extends Controller
{
    public $layout = 'main';

    public function actionIndex(){

        return $this->render('index');
    }

//  Контакты
    public function actionContact(){

        return $this->render('contact');
    }

//   Вакансии
    public function actionVacancy(){

        return $this->render('vacancy');
    }

//   Сотрудничество
    public function actionCooperation(){

        return $this->render('cooperation');
    }
}