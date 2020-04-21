<?php

use yii\helpers\Html;
use yii\helpers\Url;

$previous = Url::previous();

/* @var $this yii\web\View */
/* @var $model backend\models\YCategory */

$this->title = 'Create Y Category';
$this->params['breadcrumbs'][] = ['label' => 'Y Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ycategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="mt-30 mb-30">
        <?= Html::a('Назад', $previous, ['class' => 'link link__a']); ?>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
