<?php
/**
 * Created by PhpStorm.
 * User: mds
 * Date: 24.04.2020
 * Time: 10:15
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class EmailController extends Controller
{
    public function actionCart()
    {

        $requestCart = Yii::$app->request->get('cart');
        $requestForm = Yii::$app->request->get('form');
        $data = json_decode($requestCart, TRUE);

        mb_parse_str($requestForm, $result);

        $table = "
        <style>
            th {
                padding: 10px 10px 10px 0;
                text-align: left;
            }
            
            td {
                padding: 10px 10px 10px 0;
            }
        </style>
        <table>";
        foreach ($data['cart'] as $val) {
            $sum = $val['qty'] * $val['price'];
            $table .= "<tr><th> Id:</th><th> Название:</th><th> Цена:</th><th> Количество:</th><th> Сумма:</th></tr>";
            $table .= "<tr><td>{$val['id']}</td>";
            $table .= "<td>{$val['title']}</td>";
            $table .= "<td>{$val['price']} руб</td>";
            $table .= "<td>{$val['qty']} шт.</td>";
            $table .= "<td>{$sum} руб</td></tr>";
        }
        $table .= "</table>";

        $address = $result['cart-address'] ? "<h3>Адрес: {$result['cart-address']}</h3>" : '';
        $styling = $result['styling'] ? "<h3>Тип доставки: {$result['styling']}</h3>" : '';
        $amount = $result['amount'] ? "<h3>Этаж: {$result['amount']}</h3>" : '';
        $lift_passenger = $result['lift-passenger'] ? "<h3>Лифт пассажирский: Есть</h3>" : '';
        $lift_goods = $result['lift-goods'] ? "<h3>Лифт грузовой: Есть</h3>" : '';

        $body = "
            <h3>Имя: {$result['cart-name']}</h3>
            <h3>Телефон: {$result['cart-phone']}</h3>
            {$address}
            {$styling}
            {$amount}
            {$lift_passenger}
            {$lift_goods}
            {$table}
            <h3>Общее количество: {$data['qty']} шт.</h3>
            <h3>Общая сумма: {$data['sum']} руб</h3>
            ";

        Yii::$app->mailer->compose()
            ->setFrom('info@vashakomnata31.ru')
            ->setTo([
                "info@vashakomnata31.ru" => "Ваша комната",
                "sale@vashakomnata31.ru" => "Ваша комната",
                "hard-phillakt@mail.ru" => "Ваша комната",
            ])
            ->setSubject("Заказ из сайта Ваша комната")
            ->setTextBody("Заказ из сайта Ваша комната")
            ->setHtmlBody("<div>{$body}</div>")
            ->send();

        return 1;
    }

    public function actionVacancy()
    {

        $requestVacancy = Yii::$app->request->get('vacant');

        mb_parse_str($requestVacancy, $result);

        $body = "
            <h3>Имя: {$result['vacancy-name']}</h3>
            <h3>Телефон: {$result['vacancy-phone']}</h3>
            <h3>Вакансия: {$result['vacancy-vacant']}</h3>
        ";

        Yii::$app->mailer->compose()
            ->setFrom('info@vashakomnata31.ru')
            ->setTo([
                "info@vashakomnata31.ru" => "Ваша комната",
                "sale@vashakomnata31.ru" => "Ваша комната",
                "hard-phillakt@mail.ru" => "Ваша комната",
            ])
            ->setSubject("Отклик на вакансию из сайта Ваша комната")
            ->setTextBody("Отклик на вакансию из сайта Ваша комната")
            ->setHtmlBody("<div>{$body}</div>")
            ->send();

        return 1;
    }

    public function actionCooperation()
    {

        $requestCooperation = Yii::$app->request->get('cooperation');

        mb_parse_str($requestCooperation, $result);

        $text = $result['cooperation-text'] ? "<h3>Текст сообщения: {$result['cooperation-text']}</h3>" : '';

        $body = "
            <h3>Имя: {$result['cooperation-name']}</h3>
            <h3>Телефон: {$result['cooperation-phone']}</h3>
            <h3>Название компании: {$result['cooperation-company']}</h3>
            <h3>Город: {$result['cooperation-city']}</h3>
            <h3>Email: {$result['cooperation-email']}</h3>
            {$text}
        ";

        Yii::$app->mailer->compose()
            ->setFrom('info@vashakomnata31.ru')
            ->setTo([
                "info@vashakomnata31.ru" => "Ваша комната",
                "sale@vashakomnata31.ru" => "Ваша комната",
                "hard-phillakt@mail.ru" => "Ваша комната",
            ])
            ->setSubject('Отклик "Стать дилером" из сайта Ваша комната')
            ->setTextBody('Отклик "Стать дилером" из сайта Ваша комната')
            ->setHtmlBody("<div>{$body}</div>")
            ->send();

        return 1;
    }

    public function actionSpecialists()
    {

        $requestSpecialists = Yii::$app->request->get('specialists');

        mb_parse_str($requestSpecialists, $result);

        $text = $result['specialists-text'] ? "<h3>Текст сообщения: {$result['specialists-text']}</h3>" : '';

        $body = "
            <h3>Имя: {$result['specialists-name']}</h3>
            <h3>Телефон: {$result['specialists-phone']}</h3>
            <h3>Название компании: {$result['specialists-company']}</h3>
            <h3>Город: {$result['specialists-city']}</h3>
            <h3>Email: {$result['specialists-email']}</h3>
            {$text}
        ";

        Yii::$app->mailer->compose()
            ->setFrom('info@vashakomnata31.ru')
            ->setTo([
                "info@vashakomnata31.ru" => "Ваша комната",
                "sale@vashakomnata31.ru" => "Ваша комната",
                "hard-phillakt@mail.ru" => "Ваша комната",
            ])
            ->setSubject('Отклик "Стать партнером" из сайта Ваша комната')
            ->setTextBody('Отклик "Стать партнером" из сайта Ваша комната')
            ->setHtmlBody("<div>{$body}</div>")
            ->send();

        return 1;
    }

    public function actionCardItem()
    {
        $requestCardItem = Yii::$app->request->get('item');

        mb_parse_str($requestCardItem, $result);

        $body = "
            <h3>Имя: {$result['card-user-name']}</h3>
            <h3>Телефон: {$result['card-user-phone']}</h3>
            <h3>Способ укладки: {$result['styling']}</h3>
            <h3>Id товара: {$result['card-item-id']}</h3>
            <h3>Название товара: {$result['card-item-title']}</h3>
        ";

        Yii::$app->mailer->compose()
            ->setFrom('info@vashakomnata31.ru')
            ->setTo([
                "info@vashakomnata31.ru" => "Ваша комната",
                "sale@vashakomnata31.ru" => "Ваша комната",
                "hard-phillakt@mail.ru" => "Ваша комната",
            ])
            ->setSubject('Форма карточки товара из сайта Ваша комната')
            ->setTextBody('Форма карточки товара из сайта Ваша комната')
            ->setHtmlBody("<div>{$body}</div>")
            ->send();

        return 1;
    }
}

