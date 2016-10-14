<?php
/**
 * Created by PhpStorm.
 * User: phuon
 * Date: 10/14/2016
 * Time: 11:46 AM
 */
namespace backend\assets;

use yii\web\AssetBundle;

class PagesAsset extends AssetBundle {

	public $basePath = '@webroot';

	public $baseUrl  = '@web';

	public $js       = [
		'pages/js/pages.js',
		//'js/form_elements.js',
		'js/demo.js',
		'js/scripts.js',
	];

	public $depends  = [
		'backend\assets\PluginAsset',
	];
}