<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\YSlider */

$this->title = 'Create Y Slider';
$this->params['breadcrumbs'][] = ['label' => 'Y Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yslider-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
