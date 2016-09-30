<?php
$params  = array_merge(require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php'));
$baseUrl = str_replace('/web', '', (new \yii\web\Request)->getBaseUrl());
return [
	'id'                  => 'app-backend',
	'basePath'            => dirname(__DIR__),
	'controllerNamespace' => 'backend\controllers',
	'bootstrap'           => [
		'log',
		'multiLanguage',
	],
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
			'layout' => '@backend/views/layouts/setting',
			'suffix' => 'lang',
		],
		'setting'  => [
			'class'               => 'navatech\setting\Module',
			'layout'              => '@backend/views/layouts/setting',
			'controllerNamespace' => 'navatech\setting\controllers',
		],
		'roxymce'  => [
			'class' => '\navatech\roxymce\Module',
		],
		'mailer'   => [
			'class' => '\yarcode\email\backend\Module',
		],
		'backup'   => [
			'class'     => '\navatech\backup\Module',
			'backup'    => [
				'db'     => [
					'enable' => true,
					'data'   => [
						'db',
					],
				],
				'folder' => [
					'enable' => false,
					'data'   => [
						'@app/web/uploads',
						'@backend/web/uploads',
					],
				],
			],
			'transport' => [
				'mail' => [
					'class'  => '\common\transports\Mail',
					'enable' => false,
				],
			],
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
					'@dektrium/user/views' => '@app/views/user',
				],
			],
		],
		'urlManager'   => [
			'enablePrettyUrl' => true,
			'showScriptName'  => false,
		],
		'setting'      => [
			'class' => 'navatech\setting\Setting',
		],
	],
	'params'              => $params,
];