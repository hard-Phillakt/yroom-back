<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

$previous = Url::previous();

/* @var $this yii\web\View */
/* @var $model backend\models\YNews */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Y News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ynews-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="mt-30 mb-30">
        <?= Html::a('Назад', $previous, ['class' => 'link link__a']); ?>
    </div>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'slug',
            'description',
            'meta_title',
            'meta_description',
            'img_prev',
            'essence',
            'date',
            'published',
            'prioritet',
        ],
    ]) ?>

</div>
