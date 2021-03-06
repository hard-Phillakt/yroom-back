<?php

use yii\helpers\Url;

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

            <div class="col-lg-3">
                <form class="filter-product">
                    <div class="pl-20 pr-20">

                        <!-- price -->
                        <div>
                            <h4 class="title title-h4">Цена</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="djc-c dai-c mt-20">
                                        <div class="desc__xs_bold mr-10">От</div>
                                        <input type="text" name="input-price-after"
                                               class="input input-price-after pl-10 pt-10 pb-10" placeholder="0"
                                               value="100">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="djc-c dai-c mt-20">
                                        <div class="desc__xs_bold mr-10">До</div>
                                        <input type="text" name="input-price-before"
                                               class="input input-price-before pl-10 pt-10 pb-10" placeholder="900"
                                               value="900">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mt-30">
                                        <div class="mb-30">
                                            <div id="filter-slider-price"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- price end-->
                    </div>
                </form>
            </div>


            <!-- Product -->
            <div class="col-lg-9">
                <div id="product-box-items" class="row">

                    <?php if (!empty($product)): ?>

                        <?php foreach ($product as $item): ?>

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

                        <?php foreach ($productAll as $item): ?>

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

                    <?php endif; ?>
                </div>
            </div>
            <!-- Product end -->
        </div>
    </div>
</section>