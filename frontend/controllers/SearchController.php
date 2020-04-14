<?php

namespace frontend\controllers;

use Yii;
use backend\models\YProduct;
use yii\data\ActiveDataProvider;
use \yii\web\Controller;

class SearchController extends Controller
{

    public $layout = 'main';

    public function actionIndex(){

        $request = Yii::$app->request->get('q');

        $query = YProduct::find()
            ->orFilterWhere(['like', 'title', $request])
            ->orFilterWhere(['like', 'description', $request])
            ->orFilterWhere(['like', 'meta_title', $request])
            ->orFilterWhere(['like', 'meta_description', $request])
            ->orFilterWhere(['like', 'price', $request])
            ->asArray()
            ->all();

        return $this->render('index', compact(['query', 'request']));
    }
}