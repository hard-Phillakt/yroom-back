<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\menuMobile\MenuMobile;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title>front-lemoni</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald&display=swap" rel="stylesheet">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=a927f738-0c06-46da-9330-37a4e3010060&amp;lang=ru_RU"
            type="text/javascript">
    </script>
    <!--    <link rel="icon" href="" type="image/x-icon">-->
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<div class="app">

    <header class="header">
        <nav class="nav">
            <div class="container">
                <div class="row dai-c">
                    <div class="col-lg-2">
                        <a href="/" class="logo-header">
                            <img src="../img/header/logo.svg" alt="logo">
                        </a>
                    </div>
                    <div class="col-lg-9">
                        <div class="menu">
                            <ul>
                                <li>
                                    <a href="/" class="link link-menu">Главная</a>
                                </li>
                                <li>
                                    <a href="/product" class="link link-menu">Каталог</a>
                                </li>
                                <li>
                                    <a href="/about/contact" class="link link-menu">О компании</a>
                                </li>
                                <li>
                                    <a href="/pay-and-deliv/rise" class="link link-menu">Оплата и доставка</a>
                                </li>
                                <li>
                                    <a href="/news" class="link link-menu">Новости и статьи</a>
                                </li>
                                <li>
                                    <a href="/stock" class="link link-menu">Акции</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="dai-c djc-end">
                            <div class="search">
                                <a href="#!">
                                    <img src="../img/header/ico_search.svg" alt="ico_search">
                                </a>
                            </div>
                            <a class="menu-cart" href="#!">
                                <span>
                                    <img src="../img/header/icon_cart.svg" alt="icon_cart">
                                </span>
                                <span class="cart-product-count">
                                    2
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <?php if (Yii::$app->request->resolve()[0] !== 'index/index'): ?>

        <section class="layers-banner" style="background: url(../img/slider/slider-1.png);"></section>

    <?php else: ?>

        <section class="slider">
            <div class="swiper-container">

                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background: url(./img/slider/slider-1.png) no-repeat;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <h2 class="title-slider-h2">Широкий выбор <br> напольных покрытий</h2>
                                    <div class="desc-slider-sm mt-20">
                                        <p>
                                            Создайте уникальный, неповторимый интерьер своего <br>
                                            дома—риобретайте качественне напольные покрытия.
                                        </p>
                                    </div>
                                    <div class="mt-70">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <a href="#!" class="button button-slider button-slider-lg djc-c">
                                                    <span class="button-text">В каталог</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-prev">
                    <img src="./img/slider/arrow_prew.svg" alt="">
                </div>
                <div class="swiper-button-next">
                    <img src="./img/slider/arrow_next.svg" alt="">
                </div>

            </div>
        </section>

    <?php endif; ?>

    <?= $content; ?>

    <?= MenuMobile::widget(); ?>

    <footer class="footer mt-90 pb-30 pt-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="footer__menu">
                        <li><a href="#!" class="mb-10">Главная</a></li>
                        <li><a href="#!" class="mb-10">О компании</a></li>
                        <li><a href="#!" class="mb-10">Оплата и доставка</a></li>
                        <li><a href="#!" class="mb-10">Новости и статьи</a></li>
                        <li><a href="#!" class="mb-10">Акции</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul class="footer__menu">
                        <li><a href="#!" class="mb-10">Линолеум</a></li>
                        <li><a href="#!" class="mb-10">Ламинат</a></li>
                        <li><a href="#!" class="mb-10">Ковра</a></li>
                        <li><a href="#!" class="mb-10">Плинтус</a></li>
                        <li><a href="#!" class="mb-10">Аксессуары</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul class="footer__menu">
                        <li class="mb-30">Режим работы:</li>
                        <li class="mb-30">
                            <p>Понедельник-Пятница:</p>
                            <p>9:00-19:00</p>
                        </li>
                        <li>
                            <p>Суббота-Воскресение:</p>
                            <p>10:00-17:00</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">

                    <ul class="footer__menu">
                        <li class="mb-30">Контакты:</li>
                        <li class="mb-30">
                            <p>г.Белгород, ул.Урожайная, д.1а</p>
                        </li>
                        <li>
                            <p>
                                <a href="tel:+74722347005">+7 (4722) 34-70-05</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</div>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>