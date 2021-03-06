<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
Url::remember();

/* @var $this yii\web\View */
/* @var $searchModel backend\models\YStockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Акции';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ystock-index">

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
            'title',
//            'description',
//            'meta_title',
//            'meta_description',
            //'img_prev',
            //'essence',
            //'date',
            'published',
            'prioritet',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
