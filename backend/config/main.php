<?php
$params  = array_merge(require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php'));
$baseUrl = str_replace('/web', '', (new \yii\web\Request)->getBaseUrl());
return [
	'id'                  => 'app-backend',
	'basePath'            => dirname(__DIR__),
	'controllerNamespace' => 'backend\controllers',
	'bootstrap'           => ['log'],
	'modules'             => [
		'user'     => [
			'as backend' => 'dektrium\user\filters\BackendFilter',
		],
		'role'     => [
			'class'       => 'navatech\role\Module',
			'controllers' => [
				'backend\controllers',
				'navatech\role\controllers',
			],
		],
		'gridview' => [
			'class' => '\kartik\grid\Module',
		],
		'language' => [
			'class'  => '\navatech\language\Module',
			'suffix' => 'lang',
		],
		'setting'  => [
			'class'               => 'navatech\setting\Module',
			'controllerNamespace' => 'navatech\setting\controllers',
		],
		'roxymce'  => [
			'class' => '\navatech\roxymce\Module',
		],
		'mailer'   => [
			'class' => '\yarcode\email\backend\Module',
		],
	],
	'components'          => [
		'request'      => [
			'csrfParam' => '_csrf-backend',
			'baseUrl'   => $baseUrl,
		],
		'session'      => [
			'name' => 'advanced-backend',
		],
		'user'         => [
			'identityCookie' => [
				'name'     => '_identity-backend',
				'httpOnly' => true,
			],
			'loginUrl'       => ['user/login'],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
		'view'         => [
			'class' => '\common\web\View',
			'theme' => [
				'pathMap' => [
					'@dektrium/user/views'                           => '@app/views/user',
					'@vendor/navatech/yii2-setting/src/views'        => '@app/views/setting',
					'@vendor/navatech/yii2-multi-language/src/views' => '@app/views/language',
				],
			],
		],
		'urlManager'   => [
			'enablePrettyUrl' => true,
			'showScriptName'  => false,
		],
	],
	'params'              => $params,
];
