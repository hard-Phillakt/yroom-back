<?php

use yii\helpers\Url;

?>
<section class="slider">
    <div class="swiper-container">

        <div class="swiper-wrapper">

            <?php foreach ($slider as $item): ?>

                <div class="swiper-slide" style="background: url(<?= $item['img']; ?>) no-repeat;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1">
                                <h2 class="title-slider-h2"><?= $item['title']; ?></h2>
                                <div class="desc-slider-sm mt-20">
                                    <p>
                                        <?= $item['description']; ?>
                                    </p>
                                </div>
                                <div class="mt-70">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <a href="<?= $item['link']; ?>"
                                               class="button button-slider button-slider-lg djc-c">
                                                <span class="button-text"><?= $item['title_link']; ?></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

        <div class="swiper-button-prev">
            <img src="<?= Url::home(true); ?>/img/slider/arrow_prew.svg" alt="arrow_prew">
        </div>

        <div class="swiper-button-next">
            <img src="<?= Url::home(true); ?>/img/slider/arrow_next.svg" alt="arrow_next">
        </div>

    </div>
</section>

<section class="floor-coverings mt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="djc-c mb-30">
                    <h3 class="title title-h3">Напольные покрытия</h3>
                </div>
            </div>

            <?php
            $catCounter = 0;

            foreach ($category as $item): ?>

                <div class="<?= $catCounter == 0 ? 'col-lg-8' : 'col-lg-4'; ?>">
                    <div class="floor-coverings__box mb-30">
                        <a href="<?= $item['link']; ?>" class="floor-coverings__box_header"
                           style="background: url(<?= $item['img_prev']; ?>)"></a>
                        <div class="floor-coverings__box_footer djc-sb mt-30">
                            <a href="<?= $item['link']; ?>" class="link link-floor-coverings">
                                <?= $item['title']; ?>
                            </a>
                            <a href="<?= $item['link']; ?>" class="link link-floor-coverings_arrow"><img
                                        src="../img/floor-coverings/ico_arrow.svg" alt="ico_arrow"></a>
                        </div>
                    </div>
                </div>

                <?php $catCounter++; ?>

            <?php endforeach; ?>

        </div>
    </div>
</section>

<section class="hit-sales mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="djc-c mb-30">
                    <h3 class="title title-h3">Хиты продаж</h3>
                </div>
            </div>

            <div class="col-lg-12">
                <!-- hit-sales tabs -->
                <div class="mb-60">
                    <ul class="hit-sales__tabs djc-end" role="tablist">

                        <?php

                        $catCounterTab = 0;
                        $arrCat = [];

                        foreach ($category as $item):
                            $arrCat[] = $item['slug']; ?>

                            <?php if($catCounterTab <= 3): ?>

                                <li role="presentation" class="<?= $catCounterTab == 0 ? 'active': false; ?>">
                                    <a href="#<?= $item['slug']; ?>" class="ml-30" aria-controls="<?= $item['slug']; ?>" role="tab"
                                       data-toggle="tab"><?= $item['title']; ?></a>
                                </li>

                            <?php endif; ?>

                            <?php $catCounterTab++; ?>

                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="row reverse-block">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="hit-sales__banner"></div>
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                        <!-- hit-sales panes -->
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane active" id="<?= $arrCat[0]; ?>">
                                <div class="row">
                                    <?php foreach ($product as $item): ?>

                                        <?php if ($item['category_id'] == 1): ?>

                                            <!-- item -->
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="card">
                                                    <div class="card-wrapper mb-30">
                                                        <div class="card__header djc-c pt-30 pb-30">
                                                            <div class="card__img"
                                                                 style="background: url(<?= $item['img_prev']; ?>)">
                                                                <?php if (!empty($item['discount_id'])): ?>
                                                                    <div class="card__discount"><?= $item['discount_id']; ?>
                                                                        %
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>

                                                        <div class="card__content djc-c pt-20 pb-20 ml-60 mr-60">
                                                            <?= $item['title']; ?>
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

                                                                                <div class="mt-20 pt-5"></div>

                                                                            <?php endif; ?>

                                                                        </div>

                                                                        <div class="card__new-price">
                                                                            <span><?= $item['price'] - $total; ?></span>
                                                                            р/кв.м
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div
                                                                            class="button button-buy pl-50 pr-50 pt-10 pb-10 djc-c dai-c mt-30">
                                                                        В корзину
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="<?= $arrCat[1]; ?>">
                                <div class="row">
                                    <?php foreach ($product as $item): ?>

                                        <?php if ($item['category_id'] == 2): ?>

                                            <!-- item -->
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="card">
                                                    <div class="card-wrapper mb-30">
                                                        <div class="card__header djc-c pt-30 pb-30">
                                                            <div class="card__img"
                                                                 style="background: url(<?= $item['img_prev']; ?>)">
                                                                <?php if (!empty($item['discount_id'])): ?>
                                                                    <div class="card__discount"><?= $item['discount_id']; ?>
                                                                        %
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>

                                                        <div class="card__content djc-c pt-20 pb-20 ml-60 mr-60">
                                                            <?= $item['title']; ?>
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

                                                                                <div class="mt-20 pt-5"></div>

                                                                            <?php endif; ?>

                                                                        </div>

                                                                        <div class="card__new-price">
                                                                            <span><?= $item['price'] - $total; ?></span>
                                                                            р/кв.м
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div
                                                                            class="button button-buy pl-50 pr-50 pt-10 pb-10 djc-c dai-c mt-30">
                                                                        В корзину
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="<?= $arrCat[2]; ?>">
                                <div class="row">
                                    <?php foreach ($product as $item): ?>

                                        <?php if ($item['category_id'] == 3): ?>

                                            <!-- item -->
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="card">
                                                    <div class="card-wrapper mb-30">
                                                        <div class="card__header djc-c pt-30 pb-30">
                                                            <div class="card__img"
                                                                 style="background: url(<?= $item['img_prev']; ?>)">
                                                                <?php if (!empty($item['discount_id'])): ?>
                                                                    <div class="card__discount"><?= $item['discount_id']; ?>
                                                                        %
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>

                                                        <div class="card__content djc-c pt-20 pb-20 ml-60 mr-60">
                                                            <?= $item['title']; ?>
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

                                                                                <div class="mt-20 pt-5"></div>

                                                                            <?php endif; ?>

                                                                        </div>

                                                                        <div class="card__new-price">
                                                                            <span><?= $item['price'] - $total; ?></span>
                                                                            р/кв.м
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div
                                                                            class="button button-buy pl-50 pr-50 pt-10 pb-10 djc-c dai-c mt-30">
                                                                        В корзину
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="<?= $arrCat[3]; ?>">
                                <div class="row">
                                    <?php foreach ($product as $item): ?>

                                        <?php if ($item['category_id'] == 4): ?>

                                            <!-- item -->
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="card">
                                                    <div class="card-wrapper mb-30">
                                                        <div class="card__header djc-c pt-30 pb-30">
                                                            <div class="card__img"
                                                                 style="background: url(<?= $item['img_prev']; ?>)">
                                                                <?php if (!empty($item['discount_id'])): ?>
                                                                    <div class="card__discount"><?= $item['discount_id']; ?>
                                                                        %
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>

                                                        <div class="card__content djc-c pt-20 pb-20 ml-60 mr-60">
                                                            <?= $item['title']; ?>
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

                                                                                <div class="mt-20 pt-5"></div>

                                                                            <?php endif; ?>

                                                                        </div>

                                                                        <div class="card__new-price">
                                                                            <span><?= $item['price'] - $total; ?></span>
                                                                            р/кв.м
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div
                                                                            class="button button-buy pl-50 pr-50 pt-10 pb-10 djc-c dai-c mt-30">
                                                                        В корзину
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>