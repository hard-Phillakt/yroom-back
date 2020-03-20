<?php

namespace frontend\controllers;
 
use Yii;
use backend\models\YStock;
use yii\web\HttpException;
use yii\web\Controller;

class StockController extends Controller
{

    public $layout = 'main';

    public function actionIndex(){

        $queryStock = new YStock();

        $stock = $queryStock::find()->where(['published' => 1])->asArray()->orderBy('	prioritet ASC')->all();

        return $this->render('index', compact('stock'));
    }

    public function actionArticle()
    {

        $paramSlug = Yii::$app->request->get('slug');

        $queryStock = new YStock();

        $stock = $queryStock::find()->where(['slug' => $paramSlug, 'published' => 1])->asArray()->orderBy('	prioritet ASC')->all();

        if (empty($stock)) {
            throw new HttpException('404');
        }

        return $this->render('article', $paramSlug ? compact('stock') : false);
    }
}