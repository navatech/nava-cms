<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'plugins/pace/pace-theme-flash.css',
	   'plugins/boostrapv3/css/bootstrap.min.css',
	   'plugins/font-awesome/css/font-awesome.css',
	   'plugins/jquery-scrollbar/jquery.scrollbar.css',
	   'plugins/bootstrap-select2/select2.css',
	   'plugins/switchery/css/switchery.min.css',
	   'plugins/nvd3/nv.d3.min.css',
	   'plugins/mapplic/css/mapplic.css',
	   'plugins/rickshaw/rickshaw.min.css',
	   'plugins/bootstrap-datepicker/css/datepicker3.css',
	   'plugins/jquery-metrojs/MetroJs.css',
	    'pages/css/pages-icons.css',
	    'pages/css/pages.css',
    ];
    public $js = [
    'plugins/pace/pace.min.js',
    'plugins/jquery/jquery-1.11.1.min.js',
    'plugins/modernizr.custom.js',
    'plugins/jquery-ui/jquery-ui.min.js',
    'plugins/boostrapv3/js/bootstrap.min.js',
    'plugins/jquery/jquery-easy.js',
    'plugins/jquery-unveil/jquery.unveil.min.js',
    'plugins/jquery-bez/jquery.bez.min.js',
    'plugins/jquery-ios-list/jquery.ioslist.min.js',
    'plugins/jquery-actual/jquery.actual.min.js',
    'plugins/jquery-scrollbar/jquery.scrollbar.min.js',
    'assets/plugins/bootstrap-select2/select2.min.js',
    'assets/plugins/classie/classie.js',
    'plugins/switchery/js/switchery.min.js',
    'plugins/nvd3/lib/d3.v3.js',
    'plugins/nvd3/nv.d3.min.js',
    'plugins/nvd3/src/utils.js',
    'plugins/nvd3/src/tooltip.js',
    'plugins/nvd3/src/interactiveLayer.js',
    'plugins/nvd3/src/models/axis.js',
    'plugins/nvd3/src/models/line.js',
    'plugins/nvd3/src/models/lineWithFocusChart.js',
    'plugins/mapplic/js/hammer.js',
    'plugins/mapplic/js/jquery.mousewheel.js',
    'plugins/mapplic/js/mapplic.js',
    'plugins/rickshaw/rickshaw.min.js',
    'plugins/jquery-metrojs/MetroJs.min.js',
    'plugins/jquery-sparkline/jquery.sparkline.min.js',
    'plugins/skycons/skycons.js',
    'plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
    'pages/js/pages.min.js',
    'js/dashboard.js',
    'js/scripts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
