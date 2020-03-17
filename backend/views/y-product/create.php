<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\YProduct */

$this->title = 'Create Y Product';
$this->params['breadcrumbs'][] = ['label' => 'Y Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yproduct-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
