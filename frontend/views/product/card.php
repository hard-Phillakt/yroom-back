<?php

use yii\helpers\Url;

$prod = $product[0];

?>

<section class="additional-menu pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="hit-sales__tabs djc-s">
                    <?php foreach ($category as $item): ?>

                        <?php if ($item['slug'] == 'vse'): ?>

                            <li>
                                <a href="<?= Url::home(true); ?>/product"
                                   class="category-item mr-30"><?= $item['title']; ?></a>
                            </li>

                        <?php else: ?>

                            <li>
                                <a href="<?= Url::home(true); ?>/product?q-cat=<?= $item['id']; ?>"
                                   class="category-item mr-30"><?= $item['title']; ?></a>
                            </li>

                        <?php endif; ?>


                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mt-30 mb-50">
                    <a href="<?= Url::home(true); ?>" class="link-breadcrumb">Главная</a><span><img
                            src="<?= Url::home(true); ?>/img/breadcrumbs/row.svg" alt="row"></span>
                    <a href="<?= Url::home(true); ?>/product" class="link-breadcrumb">Каталог</a><span><img
                            src="<?= Url::home(true); ?>/img/breadcrumbs/row.svg" alt="row"></span>
                    <span class="link-breadcrumb-this"><?= $prod['title']; ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="card">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-wrapper mb-30">
                        <div class="card__header">
                            <div class="card__img card__img_h500"
                                 style="background: url(<?= Url::home(true); ?><?= $prod['img_prev']; ?>)">

                                <?php if(!empty($prod['discount_id'])): ?>
                                    <div class="card__discount"><?= $prod['discount_id']; ?>%</div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card mb-30">
                    <div class="card-wrapper pt-30 pr-30 pb-40">
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="mb-30 ml-30 ">
                                    <h1 class="title title-h3 mb-30">
                                        <?= $prod['title']; ?>
                                    </h1>
                                </div>

                                <div class="bg bg__yellow djc-sb dai-c pl-30 pr-30">
                                    <div class="card__new-price desc__xs_bold">
                                        <span>
                                            <?php
                                            $price = $prod['price'];
                                            $discoun = $prod['discount_id'];
                                            $procent = ($price * $discoun) / 100;
                                            $total = $price - $procent;
                                            echo round($total) ;
                                            ?>
                                        </span> р/кв.м
                                    </div>
                                    <div class="card__old-price card__old-price_white desc__xs_bold fs fs__16">
                                        <?php if(!empty($prod['discount_id'])): ?>
                                        <span><?= $prod['price']; ?></span> р.кв/м
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="mt-60">
                                    <?= $prod['description']; ?>
                                </div>

                            </div>

                            <div class="col-lg-5 col-lg-offset-1">

                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="djc-sb">

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                    <div class="mt-10">
                                                        Количество
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                    <div class="djc-c dai-c mt-10">
                                                        <span
                                                            class="button button__decrement desc__xs_bold fs fs__16">-</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                    <div>
                                                        <input
                                                               type="text" name="amount"
                                                               class="card-amount djc-c dai-c input pt-10 pl-20 pb-10 fs fs__12 desc__xs_bold"
                                                               value="1">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                    <div class="djc-c dai-c mt-10">
                                                        <span
                                                            class="button button__increment desc__xs_bold fs fs__16">+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-50">
                                            <div
                                                data-qty="1"
                                                data-id="<?= $prod['id']; ?>"
                                                class="button button-buy button-buy-cart fs fs__16 pl-10 pr-10 pt-20 pb-20 djc-c dai-c">
                                                В корзину
                                            </div>
                                        </div>

                                        <div class="mt-30">
                                            <h2 class="desc desc__sm desc__xs_bold fs fs__20">Не знаете сколько
                                                нужно?</h2>
                                            <div class="desc desc__sm mt-20 fs fs__14">
                                                Оставьте заявку и наш менеджер
                                                поможет вам с расчетом
                                            </div>
                                        </div>

                                        <form id="form-card-item">
                                            <div class="djc-sa">
                                                <div class="mt-20 mr-10">
                                                    <input type="text" name="card-user-name" class="input pt-10 pb-10 pl-10 fs fs__12"
                                                           placeholder="Имя" required>
                                                    <div class="mt-30 ml-20">
                                                        <label class="djc-s unpacked circle-dots-wrapper">
                                                            <div class="circle-dots">
                                                                <span class="circle-dots-active"></span>
                                                            </div>
                                                            <div class="ml-10 fs fs__12">
                                                                Прямая укладка
                                                            </div>
                                                            <input type="radio" name="styling" value="Прямая укладка" checked>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="mt-20 ml-10">
                                                    <input type="text" name="card-user-phone" class="input pt-10 pb-10 pl-10 fs fs__12"
                                                           placeholder="Телефон" required>
                                                    <div class="mt-30 ml-20">
                                                        <label class="djc-s unpacked circle-dots-wrapper">
                                                            <div class="circle-dots">
                                                                <span></span>
                                                            </div>
                                                            <div class="ml-10 fs fs__12">
                                                                По диагонали
                                                            </div>
                                                            <input type="radio" name="styling" value="По диагонали">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <input type="hidden" name="card-item-id" value="<?= $prod['id']; ?>">
                                                <input type="hidden" name="card-item-title" value="<?= $prod['title']; ?>">
                                            </div>

                                            <div class="mt-30">
                                                <button type="submit" class="button button__tran pt-5 pb-5 dai-c djc-c mt-20">Оставить
                                                    заявку
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="modal modal-card-success fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h1 class="djc-c title title-h1">Спасибо!</h1>
                <div class="djc-c desc desc__sm mt-40">
                    С Вами свяжутся наши специалисты для уточнений деталей!
                </div>
            </div>
        </div>
    </div>
</div>