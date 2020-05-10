<?php

namespace frontend\controllers;

use Yii;
use backend\models\YNews;
use yii\web\Controller;
use yii\web\HttpException;

use common\widgets\menuMobile\MenuMobile;


class NewsController extends Controller
{
    public $layout = 'main';

    public function actionIndex()
    {
        $queryNews = new YNews();

        $news = $queryNews::find()->where(['published' => 1])->asArray()->orderBy('prioritet ASC')->all();

        return $this->render('index', compact('news'));
    }

    public function actionArticle()
    {
        $paramSlug = Yii::$app->request->get('slug');

        $queryNews = new YNews();

        $news = $queryNews::find()->where(['slug' => $paramSlug, 'published' => 1])->asArray()->orderBy('prioritet ASC')->all();

//      Ошибка на пустоту
        if (empty($news)) {
            throw new HttpException('404');
        }

        return $this->render('article', $paramSlug ? compact('news') : false);
    }

    public function actionAjax(){

        $this->layout = false;

        // Ajax Essence
        if($paramEssence = Yii::$app->request->get('essence')){

            $queryNews = new YNews();

            $news = $queryNews::find()->where(['essence' => $paramEssence, 'published' => 1])->asArray()->orderBy('prioritet ASC')->all();

//          render на пустоту
            if (empty($news)) {

                return $this->render('ajax-empty');
            }

            return $this->render('ajax', compact('news'));
        }

    }
}