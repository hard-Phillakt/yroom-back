<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\ElFinder;

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
<!--            --><?//= $form->field($model, 'img_prev')->textInput(['maxlength' => true]) ?>

            <?php

            echo $form->field($model, 'img_prev')->widget(InputFile::class, [
                'language'      => 'ru',
                'controller'    => 'elfinder',
                'filter'        => 'image',
                'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
                'options'       => ['class' => 'form-control'],
                'buttonOptions' => ['class' => 'btn btn-default'],
                'multiple'      => false,
                'buttonName' => 'Загрузить'
            ]);

            ?>

            <?= $form->field($model, 'essence')->dropDownList([
                'news' => 'Новость',
                'articles' => 'Статья',
            ]) ?>

            <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'published')->dropDownList([
                '0' => 'Нет',
                '1' => 'Да',
            ]) ?>

            <?= $form->field($model, 'prioritet')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>





    <?php ActiveForm::end(); ?>

</div>
