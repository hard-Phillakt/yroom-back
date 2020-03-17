<?php

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap" style="display: flex; flex-direction: column; justify-content: space-between; height: 100vh;">
    <?php
    NavBar::begin([
        'brandLabel' => 'Перейти на сайт',
        'brandUrl' => '/',
        'options' => [],
    ]);
    $menuItems = [
        ['label' => 'Главная', 'url' => ['/y-home-back/index']],
        ['label' => 'Товары', 'url' => ['/y-product/index']],
        ['label' => 'Слайдер ', 'url' => ['/y-slider/index']],
        ['label' => 'Новости', 'url' => ['/y-news/index']],
        ['label' => 'Акции', 'url' => ['/y-stock/index']],
        ['label' => 'Категории', 'url' => ['/y-category/index']],
        ['label' => '', 'url' => ['/y-img/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/logout'], 'post')
            . Html::submitButton(
                'Выйти (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right dai-c'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <?= $content ?>

    </div>

    <footer class="footer pt-30 pb-30" style="background: #f5f5f5">
        <div class="container">
            <div class="dai-c">
                <div class="mr-15 fs__14 mr-20">Webmedia31.ru</div>
                <a class="mr-20" href="https://webmedia31.ru/"><img style="width: 60px" src="../img/media31.svg" alt="media31"></a> <span class=""><?= date('Y') ?></span>
            </div>
    </footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
