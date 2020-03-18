<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\YProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yproduct-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

<!--    --><?//= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'category_id')->dropDownList([
            '1' => 'Ламинат',
            '2' => 'Линолеум',
            '3' => 'Ковры',
            '4' => 'Ковровые дорожки',
    ]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_new')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_hit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount_id')->textInput() ?>

    <?= $form->field($model, 'published')->textInput() ?>

    <?= $form->field($model, 'prioritet')->textInput() ?>

    <?= $form->field($model, 'img_prev')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
