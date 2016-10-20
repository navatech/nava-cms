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
	    'css/jquery.bxslider.css',
	    'css/font-awesome.min.css',
	    'css/style.css',
	    'css/responsive.css',
    ];
    public $js = [
    	'js/jquery.bxslider.min.js',
	    'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
