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
        'css/style.css',
        'css/menu/styles.css',
        'libs/slick/slick.css',
        'libs/fontawesome/css/all.css',
        'libs/fontawesome/css/fontawesome.css',
        'libs/menumobile/jquery.mmenu.all.css',
        'libs/menumobile/demo.css',
    ];
    public $js = [
//        'js/jquery.js',
//        'js/slimScroll/jquery.slimscroll.min.js',
//        'libs/slick/slick.js',
        'libs/menumobile/jquery.mmenu.min.all.js',
        'js/menu/script.js',
        'js/jqueryviettel.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
