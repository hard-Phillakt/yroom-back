<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\YCategory */

$this->title = 'Create Y Category';
$this->params['breadcrumbs'][] = ['label' => 'Y Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ycategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
