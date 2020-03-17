<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\YStockSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ystock-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'meta_title') ?>

    <?= $form->field($model, 'meta_description') ?>

    <?php // echo $form->field($model, 'img_prev') ?>

    <?php // echo $form->field($model, 'essence') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'published') ?>

    <?php // echo $form->field($model, 'prioritet') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
