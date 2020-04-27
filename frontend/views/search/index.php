<?php

use yii\helpers\Url;
use yii\helpers\Html;

//debug($query);

?>

<section class="mt-90 mb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div>
                    <div>
                        <h2 class="title title-h1">Страница поиска</h2>
                    </div>

                    <div class="mt-30">
                        <p class="desc desc__xs fs fs__20">
                            Вы искали ... " <?= Html::encode($request) ?> "
                        <p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="mt-60">
                    <form action="/search/">
                        <input type="text" class="input pt-10 pr-5 pb-10 pl-20" name="q" placeholder="поиск по товарам">

                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-6">
                                <div class="mt-15">
                                    <button type="submit"
                                            class="djc-c button button__tran pl-50 pr-50 pt-10 pb-10 dai-c mt-20">Найти
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row mt-90 mb-90" id="search-goods">

            <?php if (!empty($query)): ?>

                <?php foreach ($query as $item): ?>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="card">
                            <div class="card-wrapper mb-30">
                                <div class="card__header djc-c pt-30 pb-30">
                                    <a href="<?= Url::home(true); ?>/product/card?id=<?= $item['id']; ?>">
                                        <span class="card__img"
                                              style="background: url(<?= $item['img_prev']; ?>)">
                                            <?php if (!empty($item['discount_id'])): ?>
                                                <div class="card__discount"><?= $item['discount_id']; ?>
                                                    %
                                                </div>
                                            <?php endif; ?>
                                        </span>
                                    </a>
                                </div>

                                <div class="card__content djc-c pt-20 pb-20 ml-30 mr-30">
                                    <a href="<?= Url::home(true); ?>/product/card?id=<?= $item['id']; ?>">
                                        <?= $item['title']; ?>
                                    </a>
                                </div>

                                <div class="card__footer">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card__footer_price">
                                                <div class="card__old-price pb-5">
                                                    <?php if (!empty($item['discount_id'])): ?>
                                                        <span><?php

                                                            $discount = $item['discount_id'];

                                                            $price = $item['price'] * $discount;

                                                            $total = $price / 100;

                                                            echo $item['price'];

                                                            ?></span> р.кв/м
                                                    <?php else: ?>

                                                        <div class="mt-20"></div>

                                                    <?php endif; ?>
                                                </div>
                                                <div class="card__new-price">

                                                    <span>
                                                        <?php if (!empty($item['discount_id'])): ?>

                                                            <?= round($item['price'] - $total); ?>

                                                        <?php else: ?>

                                                            <?= $item['price']; ?>

                                                        <?php endif; ?>
                                                    </span>

                                                    р/кв.м

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div
                                                data-qty="1"
                                                data-id="<?= $item['id']; ?>"
                                                class="button button-buy button-buy-cart pl-10 pr-10 pt-10 pb-10 djc-c dai-c mt-30">
                                                В корзину
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            <?php else: ?>

                <div class="col-lg-12">

                    <div class="mt-45 mb-45">
                        <h2 class="title title-h1 pr-30" style="text-align: center">Товары не найдены!</h2>
                    </div>

                </div>

            <?php endif; ?>

        </div>
    </div>
</section>