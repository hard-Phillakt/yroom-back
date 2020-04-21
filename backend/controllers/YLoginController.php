<?php

namespace backend\controllers;

use Yii;
use backend\models\FormLogin;
use backend\models\User;

use yii\web\Controller;


class YLoginController extends Controller
{

    public $layout = 'login';

    public function actionIndex()
    {
        $model = new FormLogin();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $user = new User;

            $identity = $user::findOne(['username' => $model->name]);

            $checkPass = Yii::$app->getSecurity()->validatePassword($model->pass, $identity['password_hash']);

            if ($checkPass) {

                Yii::$app->user->login($identity, 3600*24*30);

               return $this->redirect('/admin/y-home-back/');
            }
        }

        if (!Yii::$app->user->isGuest) {
            return $this->redirect('admin/y-news/index');
        }


        return $this->render('index', ['model' => $model]);
    }


    public function actionLogout(){
        Yii::$app->user->logout() ? $this->redirect('/'): false;
    }
}
