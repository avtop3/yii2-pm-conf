<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\bootstrap\BootstrapThemeAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=latin,cyrillic,cyrillic-ext',
        'css/font-awesome.min.css',
        'css/animate.min.css',
//        'css/prettyPhoto.css',
//        'css/main.css',
        'css/responsive.css',
        'markup/css/main.css',
        'markup/css/countdown.css',
        'markup/css/extended.css',
        'markup/css/prettyPhoto.css',
        'markup/css/responsive.css',
        'markup/css/hover.css',
//        'css/site.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
//        'js/jquery.prettyPhoto.js',
//        'js/jquery.isotope.min.js',
//        'js/main.js',
//        'js/wow.min.js',

        'markup/js/jquery.prettyPhoto.js',
        'markup/js/jquery.isotope.min.js',
        'markup/js/jquery.animateNumber.min.js',
        'markup/js/jquery.final-countdown.min.js',
        'markup/js/main.js',
        'markup/js/kinetic_countdown.js',
        'markup/js/countdown_params.js',
        'markup/js/wow.min.js',
        'markup/js/animated_members.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
//        '\rmrevin\yii\fontawesome\AssetBundle',
//        'yii\bootstrap\BootstrapPluginAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
