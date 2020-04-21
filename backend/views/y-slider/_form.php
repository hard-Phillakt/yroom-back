<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model backend\models\YSlider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yslider-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->widget(CKEditor::className(),[
                'editorOptions' => [
                    'preset' => 'full',
                    'inline' => false,
                ],
            ]); ?>
        </div>

        <div class="col-lg-6">

            <?php

            echo $form->field($model, 'img')->widget(InputFile::class, [
                'language'      => 'ru',
                'controller'    => 'elfinder',
                'filter'        => 'image',
                'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
                'options'       => ['class' => 'form-control'],
                'buttonOptions' => ['class' => 'btn btn-default'],
                'multiple'      => false,
                'buttonName' => 'Загрузить'
            ]); ?>

            <?= $form->field($model, 'prioritet')->textInput() ?>

            <?= $form->field($model, 'published')->textInput() ?>

<!--            --><?//= $form->field($model, 'date')->textInput() ?>

            <?= $form->field($model, 'title_link')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
