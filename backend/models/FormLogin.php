<?php

namespace backend\models;

use yii\base\Model;

class FormLogin extends Model
{
    public $name;
    public $pass;

    public function rules()
    {
        return [
            ['name', 'required', 'message' => 'Введите логин'],
            ['pass', 'required', 'message' => 'Введите пароль']
        ];
    }

    public function attributeLabels()
    {
        return [
            ['name' => 'Логин'],
            ['pass' => 'Пароль']
        ];
    }
}