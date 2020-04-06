<?php

use yii\helpers\Url;

?>

<section class="additional-menu pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="hit-sales__tabs djc-s">

                    <?php foreach ($category as $item): ?>

                        <li>
                            <a href="<?= Url::home(true); ?>/product?q-cat=<?= $item['id']; ?>" class="category-item mr-30"><?= $item['title']; ?></a>
                        </li>

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
                    <a href="#!" class="link-breadcrumb">Главная</a><span><img
                            src="<?= Url::home(true); ?>/img/breadcrumbs/row.svg"
                            alt="row"></span>
                    <span class="link-breadcrumb-this">Каталог</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product">
    <div class="container">
        <div class="row">

            <!--            <div class="col-lg-3">-->

            <!--  Filter  -->

            <!--            </div>-->

            <!-- Product -->
            <div class="col-lg-12">
                <div class="row">

                    <?php if (!empty($product)): ?>

                        <?php foreach ($product as $item): ?>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="card">
                                    <div class="card-wrapper mb-30">
                                        <div class="card__header djc-c pt-30 pb-30">
                                            <a href="<?= Url::home(true); ?>/product/card?id=<?= $item['id']; ?>">
                                                <span class="card__img" style="background: url(<?= $item['img_prev']; ?>)">
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
                                                            <span><?= round($item['price'] - $total); ?></span>
                                                            р/кв.м
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div
                                                        data-id="<?= $item['id']; ?>"
                                                        class="button button-buy pl-10 pr-10 pt-10 pb-10 djc-c dai-c mt-30">
                                                        В корзину
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    <?php endif; ?>
                </div>
            </div>
            <!-- Product end -->
        </div>
    </div>
</section>