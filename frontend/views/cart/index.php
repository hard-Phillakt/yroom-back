<?php

use yii\helpers\Url;

?>

<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mt-30 mb-50">
                    <a href="#!" class="link-breadcrumb">Главная</a><span><img
                            src="<?= Url::home(true); ?>//img/breadcrumbs/row.svg"
                            alt="row"></span>
                    <span class="link-breadcrumb-this">Корзина</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cart">
    <div class="container">
        <div class="row">
            <div id="card-box-items" class="col-lg-8">
                <div class="ml-30 mb-30">
                    <h1 class="title title-h1">Корзина</h1>
                </div>

                <?php if (!empty($cart['cart'])): ?>

                    <?php

                    $i = 0;
                    foreach ($cart['cart'] as $item): ?>

                        <div class="card card-count-<?= $item['id']; ?> mt-30">
                            <div class="card-wrapper mb-30">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="card__header djc-c pt-30 pb-30 pl-10 pr-10">
                                            <div class="card__img"
                                                 style="background: url(<?= Url::home(true); ?><?= $item['img']; ?>)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="djc-sb">
                                            <h2 class="desc desc__sm pl-20"><?= $item['title']; ?></h2>

                                            <div>
                                        <span
                                            data-id="<?= $item['id']; ?>"
                                            class="fs fs__20 pt-10 pr-10 pb-10 pl-10 card-delete-item">×</span>
                                            </div>
                                        </div>

                                        <div class="mt-30">
                                            <div class="row">

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                    <div class="card__footer_price pl-20">
                                                        <div class="djc-s mb-10">
                                                            Цена:
                                                        </div>
                                                        <div class="card__old-price pb-5 djc-s">
                                                            <!--                                                    <span>-->
                                                            <? //= $item['price']; ?><!--</span> р.кв/м-->
                                                        </div>
                                                        <div class="card__new-price djc-s dai-c">
                                                            <span><?= round($item['price']); ?></span>&nbsp; р/кв.м
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                    <div class="row">

                                                        <div
                                                            class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-9 col-xs-offset-3">
                                                            <div class="djc-s mb-10">
                                                                Количество:
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                            <div class="djc-c dai-c mt-10">
                                                        <span
                                                            data-id="<?= $item['id']; ?>"
                                                            data-position="<?= $i; ?>"
                                                            class="button button__decrement checkout-button__decrement desc__xs_bold fs fs__16 djc-c dai-c pt-10 pr-10 pb-10 pl-10">-</span>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="mb-10">
                                                                <input
                                                                    data-id="<?= $item['id']; ?>"
                                                                    data-position="<?= $i; ?>"
                                                                    type="text"
                                                                    name="floor-amount"
                                                                    class="card-amount checkout-card-amount djc-c dai-c input pt-10 pl-20 pb-10 fs fs__12 desc__xs_bold"
                                                                    value="<?= $item['qty']; ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                            <div class="djc-c dai-c mt-10">
                                                        <span
                                                            data-id="<?= $item['id']; ?>"
                                                            data-position="<?= $i; ?>"
                                                            class="button button__increment checkout-button__increment desc__xs_bold fs fs__16 djc-c dai-c pt-10 pr-10 pb-10 pl-10">+</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                    <div class="card-total mb-30 ml-60">
                                                        <div>
                                                            Итого:
                                                        </div>
                                                        <div class="mt-10">
                                                        <span
                                                            class="card-total-sum-<?= $i; ?> desc__xs_bold fs fs__20 pr-5"><?= round($item['price']) * $item['qty']; ?></span>
                                                            руб
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php $i++; ?>

                    <?php endforeach; ?>

                <?php else: ?>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  pt-80 pb-80">

                            <div class="ml-30 mb-30">
                                <div class="djc-s">
                                    <h3 class="title desc__xs_bold fs fs__26">Ваша корзина пуста:</h3>
                                </div>

                                <div class="djc-s mt-30">
                                    <p class="desc desc__md opac__07 desc__xs_bold"> О наличии или заказе товаров вы можете уточнить по телефону:
                                        <a href="tel:+74722347005">+7 (4722) 34-70-05</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                <?php endif; ?>
            </div>

            <!-- Delivery column -->
            <div class="col-lg-4">

                <div class="ml-30 mb-30">
                    <h1 class="title title-h1">Способ получения</h1>
                </div>

                <div class="pt-10 pr-30 pb-30 pl-30">
                    <nav>
                        <div class="djc-sb" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link nav-tab-active desc__sm fs fs__16"
                               id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                               aria-controls="nav-home" aria-selected="true">Самовывоз</a>

                            <a class="nav-item nav-link desc__sm fs fs__16"
                               id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                               aria-controls="nav-profile" aria-selected="false">Доставка по адресу</a>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active in" id="nav-home" role="tabpanel"
                             aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-lg-12">

                                    <!-- form-pickup -->

                                    <form id="form-pickup">
                                        <div class="mt-30">
                                            <div class="mt-30">
                                                <div class="mb-30">
                                                    <input type="text" name="cart-name"
                                                           class="input pt-5 pb-5 pl-20 fs fs__14"
                                                           placeholder="Ваше имя">
                                                </div>

                                                <div class="mb-30">
                                                    <input type="text" name="cart-phone"
                                                           class="input pt-5 pb-5 pl-20 fs fs__14"
                                                           placeholder="Контактный номер">

                                                    <div class="circle-dots-wrapper">
                                                        <input type="radio" name="pickup">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-30">
                                                <div class="title title-h4">
                                                    Наш адрес:
                                                </div>
                                                <div class="djc-sb mt-20">
                                                    <div class="desc desc__sm fs fs__14">
                                                        г.Белгород ул.Урожайная, д.1А
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-30">
                                                <div class="title title-h4">
                                                    Режим работы:
                                                </div>
                                                <div class="djc-sb mt-20">
                                                    <div class="djc-sb">
                                                        <div>
                                                            <div class="mr-30 mb-10">Пн-Пт:</div>
                                                            <div class="mr-30">Сб-Вс:</div>
                                                        </div>
                                                        <div>
                                                            <div class="mb-10">09:00 – 19:00</div>
                                                            <div>10:00 – 17:00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-30">
                                                <h3 class="title title-h3">Наш менеджер сообщит вам о готовности
                                                    заказа</h3>
                                            </div>

                                            <div class="mt-30">
                                                <div class="title title-h1">
                                                    Итого:
                                                </div>
                                                <div class="djc-sb mt-30">
                                                    <div class="title title-h3">Сумма</div>

                                                    <div class="cart-total">
                                                        <div class="title title-h3">
                                                            <span class="cart-total-sum"><?= $cart['sum'] ?></span>
                                                        </div>
                                                        <div class="ml-10">
                                                            рублей
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-40">
                                                <button type="submit"
                                                        class="button button-buy color color__black bg bg__yellow fs fs__16 pl-10 pr-10 pt-10 pb-10 djc-c dai-c">
                                                    Оформить заказ
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- form-pickup end -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                             aria-labelledby="nav-profile-tab">

                            <div class="row">
                                <div class="col-lg-12">

                                    <!-- form-delivery -->

                                    <form id="form-delivery">
                                        <div class="mt-30">
                                            <div class="title title-h4">
                                                Адрес доставки:
                                            </div>
                                            <div class="djc-sb">
                                                <div class="mt-30 ml-20">
                                                    <label class="djc-s unpacked circle-dots-wrapper">
                                                        <div class="circle-dots">
                                                            <span class="circle-dots-active"></span>
                                                        </div>
                                                        <div class="ml-10 fs fs__16">
                                                            По городу
                                                        </div>
                                                        <input type="radio" name="styling" value="po-gorod"
                                                               checked>
                                                    </label>
                                                </div>

                                                <div class="mt-30 ml-20">
                                                    <label class="djc-s unpacked circle-dots-wrapper">
                                                        <div class="circle-dots">
                                                            <span></span>
                                                        </div>
                                                        <div class="ml-10 fs fs__16">
                                                            За город
                                                        </div>
                                                        <input type="radio" name="styling" value="za-gorod">

                                                        <input type="radio" name="delivery" value="yes" checked>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="mt-30">
                                                <div class="mb-30">
                                                    <input type="text" class="input pt-5 pb-5 pl-20 fs fs__14"
                                                           placeholder="Ваше имя">
                                                </div>

                                                <div class="mb-30">
                                                    <input type="text" class="input pt-5 pb-5 pl-20 fs fs__14"
                                                           placeholder="Контактный номер">
                                                </div>

                                                <div class="mb-30">
                                                    <input type="text" class="input pt-5 pb-5 pl-20 fs fs__14"
                                                           placeholder="Адрес доставки">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mt-5 ml-30 fs fs__16">
                                                        Этаж:
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                            <div class="djc-c dai-c mt-10">
                                                                <span
                                                                    class="button button__decrement desc__xs_bold fs fs__16 djc-c dai-c pt-5 pr-10 pb-10 pl-10">-</span>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="mb-10">
                                                                <input type="text" name="amount"
                                                                       class="card-amount djc-c dai-c input pt-5 pl-20 pb-5 fs fs__12 desc__xs_bold"
                                                                       value="1">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                            <div class="djc-c dai-c mt-10">
                                                                <span
                                                                    class="button button__increment desc__xs_bold fs fs__16 djc-c dai-c pt-5 pr-10 pb-10 pl-10">+</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-30">
                                                <div class="title title-h4">
                                                    Лифт:
                                                </div>
                                                <div class="djc-sb">
                                                    <div class="mt-20">
                                                        <label class="checkbox-box" for="lift-passenger">
                                                            <div class="djc-s">
                                                                <div class="checkbox checkbox__check"></div>
                                                                <div class="desc desc__xs desc__xs_bold pl-20">
                                                                    Пассажирский
                                                                </div>
                                                            </div>
                                                            <input type="checkbox" id="lift-passenger"
                                                                   class="checkbox-d-none"
                                                                   name="lift-passenger" checked>
                                                        </label>
                                                    </div>

                                                    <div class="mt-20">
                                                        <label class="checkbox-box" for="lift-goods">
                                                            <div class="djc-s">
                                                                <div class="checkbox"></div>
                                                                <div class="desc desc__xs desc__xs_bold pl-20">
                                                                    Грузовой
                                                                </div>
                                                            </div>
                                                            <input type="checkbox" id="lift-goods"
                                                                   class="checkbox-d-none"
                                                                   name="lift-goods">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-30 desc desc__xs_bold">
                                                Ознакомьтесь с <a href="#!" class="link">условиями доставки</a>
                                                перед оплатой заказа.
                                            </div>

                                            <div class="mt-30">
                                                <h3 class="title title-h3">Наш менеджер сообщит вам о готовности
                                                    заказа</h3>
                                            </div>

                                            <div class="mt-30">
                                                <div class="title title-h1">
                                                    Итого:
                                                </div>
                                                <div class="djc-sb mt-30">
                                                    <div class="title title-h3">Сумма</div>

                                                    <div class="cart-total">
                                                        <div class="title title-h3">
                                                            <span class="cart-total-sum"><?= $cart['sum'] ?></span>
                                                        </div>
                                                        <div class="ml-10">
                                                            рублей
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-40">
                                                <button type="submit"
                                                        class="button button-buy color color__black bg bg__yellow fs fs__16 pl-10 pr-10 pt-10 pb-10 djc-c dai-c">
                                                    Оформить заказ
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- form-delivery end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>