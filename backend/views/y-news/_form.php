<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\YNews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ynews-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'slug')->textInput() ?>

            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'img_prev')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'essence')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'published')->textInput() ?>

            <?= $form->field($model, 'prioritet')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>





    <?php ActiveForm::end(); ?>

</div>
