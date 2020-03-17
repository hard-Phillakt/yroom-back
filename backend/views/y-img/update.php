<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\YImg */

$this->title = 'Update Y Img: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Y Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yimg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
