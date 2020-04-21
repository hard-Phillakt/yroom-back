<?php

use yii\helpers\Html;
use yii\helpers\Url;

$previous = Url::previous();

/* @var $this yii\web\View */
/* @var $model backend\models\YProduct */

$this->title = 'Create Y Product';
$this->params['breadcrumbs'][] = ['label' => 'Y Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yproduct-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="mt-30 mb-30">
        <?= Html::a('Назад', $previous, ['class' => 'link link__a']); ?>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
