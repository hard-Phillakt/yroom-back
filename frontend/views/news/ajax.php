<?php

use yii\helpers\Url;

//debug($news);

?>
    <!-- DropDown-->

    <div class="col-lg-4">
        <div class="djc-c dfd-column pt-80 pb-80">
            <div class="pl-30">
                <h4 class="title title-h4">Напольные покрытия</h4>
<!--                <div class="pt-20">Показать</div>-->
            </div>

            <div class="mt-30">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="sytetic-ui sytetic-ui__select">
                            <div class="sytetic-ui__select_header sytetic-ui__select_arrow-bottom pt-10 pr-10 pb-10 pl-20"
                                 id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                 aria-expanded="false">Новости
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                <a href="#!" class="dropdown-menu_box-link pt-10 pb-10 pl-10 pr-10">Новости</a>

                                <a href="#!" class="dropdown-menu_box-link pt-10 pb-10 pl-10 pr-10">Статьи</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DropDown end -->

<?php foreach ($news as $item): ?>

    <!-- item -->

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="card">
            <div class="card-wrapper mb-70">
                <div class="card__header_news djc-c">
                    <a href="/news/article/<?= $item['slug'] ?>" class="card__img_h200"
                       style="background: url(<?= Url::home(true); ?>/<?= $item['img_prev'] ?>)">
                    </a>
                </div>

                <div class="card__content djc-c pt-20 pb-20 ml-30 mr-30">
                    <?= $item['title']; ?>
                </div>

                <div class="card__footer mt-20">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="card__footer_price djc-c dai-c">
                                <div class="card__news">
                                    <span><?= $item['date']; ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <a href="/news/article/<?= $item['slug'] ?>"
                               class="button button-buy djc-c pl-50 pr-50 pt-10 pb-10 dai-c">
                                Подробнее
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- item end -->

<?php endforeach; ?>