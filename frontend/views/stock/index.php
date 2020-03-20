
<?php

use yii\helpers\Url;

?>

<section class="stock mt-40">
    <div class="container">

        <?php foreach ($stock as $item): ?>

        <div class="row mb-60">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="card mb-30">
                    <div class="card-wrapper">
                        <div class="card__header_news djc-c">
                            <a href="stock/article/<?= $item['slug']; ?>" class="card__img_h300" style="background: url(<?= Url::home(true); ?><?= $item['img_prev']; ?>)"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="pl-40">
                    <div class="mb-50">
                        <h2>
                            <a href="stock/article/<?= $item['slug']; ?>" class="title title__stock title__stock_h2"><?= $item['title']; ?></a>
                        </h2>
                    </div>

                    <div class="desc desc__sm mb-30">
                        <?= $item['description']; ?>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">
                            <div class="mt-30">
                                <a href="stock/article/<?= $item['slug']; ?>" class="button button__stock djc-c pt-5 pb-5">
                                    <span>Подробнее</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php endforeach; ?>

    </div>
</section>
