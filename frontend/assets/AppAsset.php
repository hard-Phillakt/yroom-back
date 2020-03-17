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
        'js/custom.js',
        'https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
