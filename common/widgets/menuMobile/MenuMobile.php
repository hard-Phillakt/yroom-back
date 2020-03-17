<?php

namespace common\widgets\menuMobile;

use yii\base\Widget;

class MenuMobile extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run(){

        return $this->render('index');
    }
}