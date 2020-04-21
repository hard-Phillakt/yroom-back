<?php

use yii\helpers\Url;

?>

<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mt-30 mb-50">
                    <a href="<?= Url::home(true); ?>" class="link-breadcrumb">Главная</a><span><img src="<?= Url::home(true); ?>/img/breadcrumbs/row.svg"
                                                                               alt="row"></span>
                    <a href="<?= Url::home(true); ?>/news" class="link-breadcrumb">Новости и статьи</a><span><img src="<?= Url::home(true); ?>/img/breadcrumbs/row.svg"
                                                                               alt="row"></span>
                    <span class="link-breadcrumb-this">Описание замков ламината</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="article">
    <article class="article-wrapper">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="article-header"
                         style="background: url(<?= Url::home(true); ?>/<?= $news[0]['img_prev']; ?>) no-repeat;"></div>
                </div>

                <div class="col-lg-8 col-lg-offset-2">

                    <div class="article-content">
                        <div class="mt-60">
                            <div>
                                <h1 class="title title-h1"><?= $news[0]['title']; ?></h1>
                            </div>
                            <div class="mt-30">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="desc desc__xs">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-30">
                                <div class="desc desc__xs">
                                    <?= $news[0]['description']; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="article-footer">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mt-60">
                                    <a href="<?= Url::home(true); ?>/news" class="button button__tran desc__xs_bold pt-10 pb-10 dai-c djc-c mt-20">ВЕРНУТЬСЯ</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </article>
</section>