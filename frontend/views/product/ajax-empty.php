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
                            <a href="?q-cat=<?= $item['id']; ?>" class="category-item mr-30"><?= $item['title']; ?></a>
                        </li>

                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>
</section>

<section class="product-empty mt-90 mb-90">
    <div class="container">
        <div class="row">
            <!-- item -->

            <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12  pt-80 pb-80">

                <div class="djc-c">
                    <h3 class="title title-h3">Информация для данной категории вскоре будет добавлена на сайт.</h3>
                </div>

                <div class="djc-c mt-30">
                    <p class="desc desc__md opac__07 desc__xs_bold"> О наличии или заказе товаров вы можете уточнить по телефону:
                        <a href="tel:+74722347005">+7 (4722) 34-70-05</a>
                    </p>
                </div>

            </div>

            <!-- item end -->
        </div>
    </div>
</section>