<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
Url::remember();

/* @var $this yii\web\View */
/* @var $searchModel backend\models\YImgSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Картинки';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="yimg-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'img',
            'date',
            'published',
            'parent_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
