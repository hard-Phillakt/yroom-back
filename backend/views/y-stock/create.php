<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\YStock */

$this->title = 'Create Y Stock';
$this->params['breadcrumbs'][] = ['label' => 'Y Stocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ystock-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
