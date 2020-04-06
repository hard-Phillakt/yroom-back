<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use backend\models\YCategory;
use yii\helpers\ArrayHelper;

use mihaildev\ckeditor\CKEditor;


/* @var $this yii\web\View */
/* @var $model backend\models\YProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yproduct-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]);
    ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

<!--    --><?//= $form->field($model, 'category_id')->textInput() ?>

    <?php

        $yCategory = new YCategory();

        $queryCategory = $yCategory::find()->where(['published' => 1])->asArray()->orderBy('prioritet ASC')->all();

        $arrData = ArrayHelper::map($queryCategory, 'id', 'title');

    ?>

    <?= $form->field($model, 'category_id')->dropDownList($arrData) ?>

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
