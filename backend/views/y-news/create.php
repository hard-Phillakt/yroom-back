<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\YNews */

$this->title = 'Create Y News';
$this->params['breadcrumbs'][] = ['label' => 'Y News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ynews-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
