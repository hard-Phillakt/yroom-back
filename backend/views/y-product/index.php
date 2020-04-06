<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\YCategory;

/* @var $this yii\web\View */
/* @var $searchModel backend\modelsYProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Y Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yproduct-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Y Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
//            'description',
//            'meta_title',
//            'meta_description',
//            'price',
//            'category_id',
            [
                'attribute' => 'category_id',
                'format' => 'text',
                'value' => function ($data) {

                    $yCategory = new YCategory();

                    $id = $data['category_id'];

                    $queryCategory = $yCategory::find()->where('id = ' . $id)->asArray()->all();

                    return $queryCategory[0]['title'];
                },
            ],
            //'slug',
            //'is_new',
            //'is_hit',
            //'discount_id',
            'published',
            'prioritet',
            //'img_prev',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
