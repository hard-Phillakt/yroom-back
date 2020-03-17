<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\YCategory */

$this->title = 'Update Y Category: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Y Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ycategory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
