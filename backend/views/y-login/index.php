<?php

use  yii\widgets\ActiveForm;
use  yii\helpers\Html;
?>

<section class="app-login">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'name')->textInput(['class' => 'input pt-10 pr-5 pb-10 pl-20', 'placeholder' => 'Ваш логин'])->label('Логин', ['class' => 'title title-h4']); ?>

                <?= $form->field($model, 'pass')->passwordInput(['class' => 'input pt-10 pr-5 pb-10 pl-20', 'placeholder' => 'Ваш пароль'])->label('Пароль', ['class' => 'title title-h4']); ?>

                <?= Html::submitButton('Оправить', ['class' => 'button button-buy pl-50 pr-50 pt-10 pb-10 djc-c dai-c mt-30']); ?>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>

</section>


