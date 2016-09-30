<?php
$params = array_merge(require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php'));
return [
	'id'                  => 'app-console',
	'basePath'            => dirname(__DIR__),
	'bootstrap'           => ['log'],
	'controllerNamespace' => 'console\controllers',
	'controllerMap'       => [
		'email'  => '\yarcode\email\commands\EmailCommand',
		'backup' => [
			'class' => 'navatech\backup\commands\BackupController',
		],
	],
	'components'          => [
		'setting' => [
			'class' => 'navatech\setting\Setting',
		],
		'log'     => [
			'targets' => [
				[
					'class'  => 'yii\log\FileTarget',
					'levels' => [
						'error',
						'warning',
					],
				],
			],
		],
	],
	'modules'             => [
		'user'   => [
			'class'    => 'dektrium\user\Module',
			'modelMap' => [
				'User'      => 'navatech\role\models\User',
				'LoginForm' => 'navatech\role\models\LoginForm',
			],
		],
		'backup' => [
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
	'params'              => $params,
];
