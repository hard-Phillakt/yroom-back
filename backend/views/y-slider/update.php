<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\YSlider */

$this->title = 'Update Y Slider: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Y Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yslider-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
