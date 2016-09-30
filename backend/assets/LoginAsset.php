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
    'pages/css/app.css',
	'pages/css/login.css',
	'pages/css/style.css'
	];

	public $js       = [
    //'plugins/jquery/jquery-1.11.1.min.js',
    //'pages/js/app.js',
	];

	public $depends  = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\bootstrap\BootstrapPluginAsset',
	];
}