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
        '//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700',
        'css/animate.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/jquery-ui.css',
        'css/main.css',
        'css/meanmenu.min.css',
        'css/nivo-slider.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/owl.transitions.css',
        'css/responsive.css',
        'css/style.css',
        'css/stylesheet.css',
    ];
    public $js = [
        'js/common.js',
        'js/bootstrap.min.js',
        'js/countdon.min.js',
        'js/imagezoom.js',
        'js/jquery.meanmenu.js',
        'js/jquery.nivo.slider.js',
        'js/jquery.scrollUp.min.js',
        'js/jquery-1.11.3.min.js',
        'js/jquery-price-slider.js',
        'js/main.js',
        'js/owl.carousel.min.js',
        'js/plugins.js',
        'js/wow.min.js',
    ];
    public $depends = [
        'frontend\assets\FontAwesomeAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
