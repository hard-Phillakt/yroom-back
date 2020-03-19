<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\YNews;



class NewsController extends Controller
{
    public $layout = 'main';

    public function actionIndex(){

        $queryNews = new YNews();

        $news = $queryNews::find()->where(['published' => 1])->asArray()->orderBy('	prioritet ASC')->all();

        return $this->render('index', compact('news'));
    }

    public function actionArticle(){

        $paramSlug = Yii::$app->request->get('slug');

        $queryNews = new YNews();

        $news = $queryNews::find()->where(['slug' => $paramSlug])->asArray()->orderBy('	prioritet ASC')->all();

        return $this->render('article', $paramSlug ? compact('news') : false);
    }
}