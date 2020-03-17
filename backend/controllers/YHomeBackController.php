<?php

namespace backend\controllers;


use yii\web\Controller;
use yii\filters\AccessControl;


class YHomeBackController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => [],
                'rules' => [
                    [
                        'allow' => false,
                        'actions' => [],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => [],
                        'roles' => ['@'],
                    ],
                ],
                'denyCallback' => function() {

                    return $this->redirect('/');
                }
            ],
        ];
    }

    public function actionIndex(){

        return $this->render('index');
    }
}