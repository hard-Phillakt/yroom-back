<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use backend\models\YCategory;
use yii\helpers\ArrayHelper;

use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\ElFinder;


/* @var $this yii\web\View */
/* @var $model backend\models\YProduct */
/* @var $form yii\widgets\ActiveForm */


$yCategory = new YCategory();
$queryCategory = $yCategory::find()->where(['published' => 1])->asArray()->orderBy('prioritet ASC')->all();
$queryVse = $yCategory::find()->where(['slug' => 'vse'])->one();
$arrData = ArrayHelper::map($queryCategory, 'id', 'title');
unset($arrData[$queryVse->id]);

?>

<div class="yproduct-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->widget(CKEditor::className(),[
                'editorOptions' => [
                    'preset' => 'full',
                    'inline' => false,
                ],
            ]);
            ?>

        </div>

        <div class="col-lg-6">

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

            <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'price')->textInput() ?>

            <?= $form->field($model, 'category_id')->dropDownList($arrData) ?>

            <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

<!--            --><?//= $form->field($model, 'is_new')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'is_hit')->dropDownList([
                '0' => 'Нет',
                '1' => 'Да',
            ]) ?>

            <?= $form->field($model, 'discount_id')->textInput() ?>

            <?= $form->field($model, 'published')->dropDownList([
                '0' => 'Нет',
                '1' => 'Да',
            ]) ?>

            <?= $form->field($model, 'prioritet')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
