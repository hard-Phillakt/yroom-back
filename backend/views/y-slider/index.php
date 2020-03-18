<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\YSliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Y Sliders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yslider-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Y Slider', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'slug',
            'description',
            'published',
            //'prioritet',
            //'date',
            //'img',
            //'title_link',
            //'link',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
