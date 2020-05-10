<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\YCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ycategory-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'published')->textInput() ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'prioritet')->textInput() ?>

<!--            --><?//= $form->field($model, 'img_prev')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
