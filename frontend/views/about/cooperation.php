<?php

use yii\helpers\Url;

?>

<section class="additional-menu pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="hit-sales__tabs djc-s">
                    <li>
                        <a href="<?= Url::home(true); ?>/about/contact" class="mr-60">Контакты</a>
                    </li>
                    <li>
                        <a href="<?= Url::home(true); ?>/about/vacancy" class="mr-60">Вакансии</a>
                    </li>
                    <li>
                        <a href="<?= Url::home(true); ?>/about/cooperation" class="mr-60">Сотрудничество</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- section dealers -->
<section class="cooperation mt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div>
                    <h1 class="title title-h1">Дилерам</h1>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="desc desc__xs mt-60">
                                Мы работаем с компаниями, профессионально занимающимися
                                продажей напольных покрытий и сопутствующих товаров.
                                Для успешного сотрудничества необходимо наличие
                                торговой точкиили демозала со свободным доступом.
                                Также должна быть готовностьразместить образцы
                                продукции в торговом зале по нашим рекомендациям.
                            </div>
                        </div>
                    </div>
                    <div class="desc desc__xs desc__xs_bold mt-20">
                        Для начала сотрудничества заполните, пожалуйста, форму ниже
                        и в течение одного рабочего дня с Вами свяжется наш представитель.
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-lg-offset-1">
                <div>
                    <div class="desc desc__sm desc__xs_bold">
                        Преимущества, которые <br>
                        получают наши дилеры
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="black-line mt-10"></div>
                        </div>
                    </div>
                    <div>
                        <ul class="mt-40">
                            <li class="mb-20">
                                1. Информационная и рекламная поддержка
                            </li>
                            <li class="mb-20">
                                2. Удобство работы
                            </li>
                            <li class="mb-20">
                                3. Привлекательные финансовые условия
                            </li>
                            <li class="mb-20">
                                4. Оперативная логистика
                            </li>
                            <li class="mb-20">
                                5. Поддержка прибыльности вашего бизнеса
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- form-dealer -->
<section class="cooperation-dealer pt-60 pb-60">
    <div class="cooperation-form" id="dealer">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title title-h1">Стать дилером</h2>
                </div>
            </div>

            <div class="row mt-20">
                <div class="col-lg-5">

                    <div class="mt-30">
                        <label for="cooperation-form-name__name" class="pl-10">Фамилия Имя Отчество*</label>
                        <div class="mt-10">
                            <input id="cooperation-form-name__name" name="cooperation-name" class="input pt-10 pr-5 pb-10 pl-20"
                                   type="text" placeholder="Введите ваши Ф.И.О">
                        </div>
                    </div>

                    <div class="mt-30">
                        <label for="cooperation-form-name__company" class="pl-10">Название компании*</label>
                        <div class="mt-10">
                            <input id="cooperation-form-name__company" name="cooperation-company" class="input pt-10 pr-5 pb-10 pl-20"
                                   type="text" placeholder="Введите название компании">
                        </div>
                    </div>

                    <div class="mt-30">
                        <label for="cooperation-form-name__phone" class="pl-10">Телефон*</label>
                        <div class="mt-10">
                            <input id="cooperation-form-name__phone" name="cooperation-phone" class="input pt-10 pr-5 pb-10 pl-20"
                                   type="text" placeholder="Введите контактный номер телефона">
                        </div>
                    </div>

                    <div class="mt-30">
                        <label for="cooperation-form-name__city" class="pl-10">Город*</label>
                        <div class="mt-10">
                            <input id="cooperation-form-name__city" name="cooperation-city" class="input pt-10 pr-5 pb-10 pl-20" type="text"
                                   placeholder="Укажите ваш город">
                        </div>
                    </div>

                </div>

                <div class="col-lg-5 col-lg-offset-2">

                    <div class="mt-30">
                        <label for="cooperation-form-name__email" class="pl-10">Email</label>
                        <div class="mt-10">
                            <input id="cooperation-form-name__email" name="cooperation-email" class="input pt-10 pr-5 pb-10 pl-20"
                                   type="text" placeholder="Укажите ваш email">
                        </div>
                    </div>

                    <div class="mt-30">
                        <label for="cooperation-form-name__text" class="pl-10">Текст сообщения</label>
                        <div class="mt-10">
                                <textarea name="cooperation-text" class="textarea pt-10 pl-20" id="cooperation-form-name__text" cols="10" rows="12">

                                </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-7">
                            <div class="button button-buy pl-50 pr-50 pt-10 pb-10 dai-c mt-20">
                                Отправить
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<!-- section specialists -->
<section class="cooperation mt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div>
                    <h1 class="title title-h1">Специалистам</h1>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="desc desc__xs mt-30">
                                Компания приветствует любые формы взаимодействия
                                c архитекторами, дизайнерами и строителями.Мы предлагаем
                                отличные условия для профессионалов рынка!
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-30">
                    <h2 class="title title-h3">
                        Дизайнерам, архитекторам <br>
                        и архитектурным бюро
                    </h2>
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="desc desc__xs mt-30">
                                В компании разработана специальная программа персональных
                                бонусов для дизайнеров и архитекторов. Мы предлагаем широкий
                                ассортимент напольных покрытий — как традиционные,
                                так и экзотические породы древесины, а также различные
                                виды обработки напольных покрытий.
                                Это позволит профессионалам комплектовать объекты от эконом
                                до премиум-класса в любой интерьерной стилистике.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-30">
                    <h2 class="title title-h3">
                        Строительным организациям
                    </h2>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="desc desc__xs mt-30">
                                Компания, один из лидеров в производстве напольных покрытий
                                из натуральной древесины, заинтересована в сотрудничестве
                                со строительными компаниями и частными бригадами
                                строительного комплекса. В компании разработана специальная
                                бонусная программа для строительных компаний.
                                Мы предлагаем отличные условия для профессионалов рынка,
                                условия сотрудничества, выгодные именно для вас!
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-lg-offset-1">
                <div>
                    <div class="desc desc__sm desc__xs_bold">
                        Преимущества <br>
                        сотрудничества с нами:
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="black-line mt-10"></div>
                        </div>
                    </div>
                    <div>
                        <ul class="mt-40">
                            <li class="mb-20">
                                1. Комплексная покупка со всеми аксессуарами и комплектующими
                            </li>
                            <li class="mb-20">
                                2. Выбор напольного покрытия с учетом новейших мировых
                                тенденций в других материалах — мебель, обои, ткани
                            </li>
                            <li class="mb-20">
                                3. Консультация 7 дней в неделю, оперативное
                                решение вопросов
                            </li>
                            <li class="mb-20">
                                4. Быстрое оформление заказа и доставки
                                (складская программа)
                            </li>
                        </ul>

                        <div class="desc desc__sx desc__xs_bold mt-30">
                            Специалисты PARKETOFF Group проводят различные
                            семинары и мастер-классы, а также выездные
                            мероприятия. Персональный менеджер всегда готов
                            ответить на возникшие вопросы, проинформировать
                            о новинках ассортимента и проводимых акциях,
                            подобрать аналог по цветовой гамме при отсутствии
                            требуемого продукта на складе.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- form-specialists -->
<section class="cooperation-dealer pt-60 pb-60">
    <div class="cooperation-form" id="specialists">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title title-h1">Стать партнером</h2>
                </div>
            </div>

            <div class="row mt-20">
                <div class="col-lg-5">

                    <div class="mt-30">
                        <label for="specialists-form-name__name" class="pl-10">Фамилия Имя Отчество*</label>
                        <div class="mt-10">
                            <input id="specialists-form-name__name" name="specialists-name" class="input pt-10 pr-5 pb-10 pl-20"
                                   type="text" placeholder="Введите ваши Ф.И.О">
                        </div>
                    </div>

                    <div class="mt-30">
                        <label for="specialists-form-name__company" class="pl-10">Название компании</label>
                        <div class="mt-10">
                            <input id="specialists-form-name__company" name="specialists-company" class="input pt-10 pr-5 pb-10 pl-20"
                                   type="text" placeholder="Введите название компании">
                        </div>
                    </div>

                    <div class="mt-30">
                        <label for="specialists-form-name__phone" class="pl-10">Телефон*</label>
                        <div class="mt-10">
                            <input id="specialists-form-name__phone" name="specialists-phone" class="input pt-10 pr-5 pb-10 pl-20"
                                   type="text" placeholder="Введите контактный номер телефона">
                        </div>
                    </div>

                    <div class="mt-30">
                        <label for="specialists-form-name__city" class="pl-10">Город*</label>
                        <div class="mt-10">
                            <input id="specialists-form-name__city" name="specialists-city" class="input pt-10 pr-5 pb-10 pl-20" type="text"
                                   placeholder="Укажите ваш город">
                        </div>
                    </div>

                </div>

                <div class="col-lg-5 col-lg-offset-2">

                    <div class="mt-30">
                        <label for="specialists-form-name__email" class="pl-10">Email</label>
                        <div class="mt-10">
                            <input id="specialists-form-name__email" name="specialists-email" class="input pt-10 pr-5 pb-10 pl-20"
                                   type="text" placeholder="Укажите ваш email">
                        </div>
                    </div>

                    <div class="mt-30">
                        <label for="specialists-form-name__text" class="pl-10">Текст сообщения</label>
                        <div class="mt-10">
                                <textarea name="specialists-text"  class="textarea pt-10 pl-20" id="specialists-form-name__text" cols="10" rows="12">

                                </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-7">
                            <div class="button button-buy pl-50 pr-50 pt-10 pb-10 dai-c mt-20">
                                Отправить
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>