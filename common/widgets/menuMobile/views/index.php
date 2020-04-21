<?php

use yii\helpers\Url;

?>

<!-- Mobile menu -->

<div class="header-mobile-menu__hamburger">
    <button class="hamburger hamburger--spring" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
</div>

<section class="header-mobile-menu">

    <div class="header-mobile-menu__header">
        <div class="logo pl-30 mb-30">
            <a href="<?= Url::home(true); ?>">
                <img src="<?= Url::home(true); ?>/img/header/logo.svg" alt="logo">
            </a>
        </div>
    </div>

    <div class="header-mobile-menu__content">
        <div class="cart-mobile-menu">
            <div class="dai-c djc-end">
                <a class="menu-cart" href="<?= Url::home(true); ?>/cart/">
                    <span>
                        <img src="<?= Url::home(true); ?>/img/header/icon_cart.svg" alt="icon_cart">
                    </span>
                    <span class="cart-product-count">
                        <?php
                        if (!empty($_SESSION['cart.qty'])) {
                            echo $_SESSION['cart.qty'];
                        } else {
                            echo 0;
                        }
                        ?>
                    </span>
                </a>

            </div>
        </div>

        <ul class="header-mobile-menu__ul pl-30">
            <li>
                <a href="<?= Url::home(true); ?>/" class="mb-20">Главная</a>
            </li>
            <li>
                <a href="<?= Url::home(true); ?>/product" class="mb-20">Каталог</a>
            </li>
            <li>
                <a href="<?= Url::home(true); ?>/about/contact" class="mb-20">О компании</a>
            </li>
            <li>
                <a href="<?= Url::home(true); ?>/pay-and-deliv/rise" class="mb-20">Оплата и доставка</a>
            </li>
            <li>
                <a href="<?= Url::home(true); ?>/news" class="mb-20">Новости и статьи</a>
            </li>
            <li>
                <a href="<?= Url::home(true); ?>/stock" class="mb-20">Акции</a>
            </li>
        </ul>
    </div>

    <div class="header-mobile-menu__footer">
        <footer class="footer pl-30 mt-30 pt-40 pb-40">
            <ul class="footer__menu">
                <li class="mb-20">Режим работы:</li>
                <li class="mb-20">
                    <p>Понедельник - Пятница:</p>
                    <p>9:00 - 19:00</p>
                </li>
                <li>
                    <p>Суббота - Воскресение:</p>
                    <p>10:00 - 17:00</p>
                </li>
            </ul>

            <ul class="footer__menu">
                <li class="mb-20">Контакты:</li>
                <li class="mb-20">
                    <p>г. Белгород, ул. Урожайная, д. 1а</p>
                </li>
                <li>
                    <p>
                        <a href="tel:+74722347005">+7 (4722) 34-70-05</a>
                    </p>
                </li>
            </ul>
        </footer>
    </div>

</section>

<section class="white-layer"></section>

<!-- Mobile menu end -->