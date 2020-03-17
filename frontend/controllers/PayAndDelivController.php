<?php

namespace frontend\controllers;


use yii\web\Controller;

class PayAndDelivController extends Controller
{

    public $layout = 'main';

    //  Не согласованы
    public function actionPayment()
    {

        return $this->render('');
    }

    //  Не согласованы
    public function actionDelivery()
    {

        return $this->render('');
    }

    public function actionRise()
    {

        return $this->render('rise');
    }

    public function actionReturn()
    {

        return $this->render('return');
    }

    public function actionCredit()
    {

        return $this->render('credit');
    }

}