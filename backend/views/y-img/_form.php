<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\YImg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yimg-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'published')->textInput() ?>
        </div>
        
        <div class="col-lg-6">
            <?= $form->field($model, 'parent_id')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>





    <?php ActiveForm::end(); ?>

</div>
