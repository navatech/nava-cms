<?php
/**
 * Created by Navatech.
 * @project yii2-cms
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    6/21/2016
 * @time    10:39 AM
 */
namespace app\assets;

use yii\web\AssetBundle;

class LoginAsset extends AssetBundle {

	public $basePath = '@app/web';

	public $baseUrl  = '@web';
	
	public $css      = [
	'plugins/pace/pace-theme-flash.css',
    'plugins/boostrapv3/css/bootstrap.min.css',
    'plugins/font-awesome/css/font-awesome.css',
    'plugins/jquery-scrollbar/jquery.scrollbar.css',
    'plugins/bootstrap-select2/select2.css',
    'plugins/switchery/css/switchery.min.css',
    'pages/css/pages-icons.css',
    'pages/css/pages.css',
	];

	public $js       = [
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
    'plugins/bootstrap-select2/select2.min.js',
    'plugins/classie/classie.js',
    'plugins/switchery/js/switchery.min.js',
    'plugins/jquery-validation/js/jquery.validate.min.js',
    'pages/js/pages.min.js',
	];

	public $depends  = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}