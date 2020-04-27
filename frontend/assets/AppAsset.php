<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        'css/custom.css',
        'https://fonts.googleapis.com/css?family=Open+Sans|Oswald&display=swap',
    ];
    public $js = [
        'js/main.js',
        'js/cart-filter.js',
        'js/custom.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js',
        'https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
