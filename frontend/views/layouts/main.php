<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\menuMobile\MenuMobile;
use yii\helpers\Url;

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
<!--    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald&display=swap" rel="stylesheet">-->
    <script src="https://api-maps.yandex.ru/2.1/?apikey=a927f738-0c06-46da-9330-37a4e3010060&amp;lang=ru_RU"
            type="text/javascript">
    </script>
        <link rel="icon" href="" type="image/x-icon">
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
                            <img src="<?= Url::home(true); ?>/img/header/logo.svg" alt="logo">
                        </a>
                    </div>
                    <div class="col-lg-9">
                        <div class="menu">
                            <ul>
                                <li>
                                    <a href="<?= Url::home(true); ?>/" class="link link-menu">Главная</a>
                                </li>
                                <li>
                                    <a href="<?= Url::home(true); ?>/product" class="link link-menu">Каталог</a>
                                </li>
                                <li>
                                    <a href="<?= Url::home(true); ?>/about/contact" class="link link-menu">О компании</a>
                                </li>
                                <li>
                                    <a href="<?= Url::home(true); ?>/pay-and-deliv/rise" class="link link-menu">Оплата и доставка</a>
                                </li>
                                <li>
                                    <a href="<?= Url::home(true); ?>/news" class="link link-menu">Новости и статьи</a>
                                </li>
                                <li>
                                    <a href="<?= Url::home(true); ?>/stock" class="link link-menu">Акции</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="menu-cart-section dai-c djc-end">

                            <div class="search">
                                <a href="#!">
                                    <img src="<?= Url::home(true); ?>/img/header/ico_search.svg" alt="ico_search">
                                </a>
                            </div>
                            <a class="menu-cart" href="<?= Url::home(true); ?>/cart/">
                                <span>
                                    <img src="<?= Url::home(true); ?>/img/header/icon_cart.svg" alt="icon_cart">
                                </span>
                                <span class="cart-product-count">
                                    <?php

                                        $session = Yii::$app->session;

                                        $session->open();

                                        if ($session->isActive){
                                            echo $session->get('cart.qty');
                                        }

                                    ?>
                                </span>
                            </a>

                            <div class="callback-add-item djc-c">
                                <h6><span class="callback-add-item__qty">В корзину добавлен товар</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <?php if (Yii::$app->request->resolve()[0] !== 'index/index'): ?>

        <section class="layers-banner" style="background: url(<?= Url::home(true); ?>/img/slider/slider-1.png);"></section>

    <?php endif; ?>

    <?= $content; ?>

    <?= MenuMobile::widget(); ?>

    <footer class="footer mt-90 pb-30 pt-60">
        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    <ul class="footer__menu">
                        <li><a href="<?= Url::home(true); ?>/" class="mb-10">Главная</a></li>
                        <li><a href="<?= Url::home(true); ?>/about/contact" class="mb-10">О компании</a></li>
                        <li><a href="<?= Url::home(true); ?>/pay-and-deliv/rise" class="mb-10">Оплата и доставка</a></li>
                        <li><a href="<?= Url::home(true); ?>/news" class="mb-10">Новости и статьи</a></li>
                        <li><a href="<?= Url::home(true); ?>/stock" class="mb-10">Акции</a></li>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <ul class="footer__menu">
                        <li><a href="/product?q-cat=1" class="mb-10">Линолеум</a></li>
                        <li><a href="/product?q-cat=2" class="mb-10">Ламинат</a></li>
                        <li><a href="/product?q-cat=3" class="mb-10">Ковраы</a></li>
                        <li><a href="/product?q-cat=4" class="mb-10">Ковролин</a></li>
                        <li><a href="/product?q-cat=5" class="mb-10">Плинтусы и аксессуары</a></li>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <ul class="footer__menu">
                        <li class="mb-30">Режим работы:</li>
                        <li class="mb-30">
                            <p>Понедельник - Пятница:</p>
                            <p>9:00 - 19:00</p>
                        </li>
                        <li>
                            <p>Суббота - Воскресение:</p>
                            <p>10:00 - 17:00</p>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3">

                    <ul class="footer__menu">
                        <li class="mb-30">Контакты:</li>
                        <li class="mb-30">
                            <p>г. Белгород, ул. Урожайная, д. 1а</p>
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

    <form class="search-box" action="/search/">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-lg-offset-2 col-md-9 col-md-offset-2 col-sm-12 col-xs-12 ">
                    <div class="djc-end">
                        <span class="fs fs__20 pt-10 pr-10 pb-10 pl-10 color__white card-delete-item">×</span>
                    </div>
                </div>
                <div class="col-lg-8 col-lg-offset-2 col-md-9 col-md-offset-2 col-sm-12 col-xs-12 ">
                    <input id="cooperation-form-name__search" name="q" class="input pt-20 pr-5 pb-20 pl-20" type="text" placeholder="Поиск...">
                    <div class="button-search-box">
                        <button type="submit" class="button-search">
                            <img src="<?= Url::home(true); ?>/img/icons/btn-search.svg" alt="btn-search">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
