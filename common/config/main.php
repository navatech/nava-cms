<?php
return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'language'   => 'en',
	'timezone'   => 'Asia/Ho_Chi_Minh',
	'components' => [
		'multiLanguage' => [
			'class' => '\navatech\language\Component',
		],
		'cache'         => [
			'class' => 'yii\caching\FileCache',
		],
		'user'          => [
			'class'           => '\yii\web\User',
			'identityClass'   => 'common\models\User',
			'enableAutoLogin' => true,
		],
		'mailer'        => [
			'class'            => 'common\swiftmailer\Mailer',
			'useFileTransport' => false,
		],
		'emailManager'  => [
			'class'            => '\yarcode\email\EmailManager',
			'defaultTransport' => 'yiiMailer',
			'transports'       => [
				'yiiMailer' => [
					'class' => '\yarcode\email\transports\YiiMailer',
				],
			],
		],
		'log'           => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets'    => [
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
	'modules'    => [
		'user'        => [
			'class'    => 'dektrium\user\Module',
			'modelMap' => [
				'User'      => 'navatech\role\models\User',
				'LoginForm' => 'navatech\role\models\LoginForm',
			],
		],
		'language' => [
			'class'  => '\navatech\language\Module',
			'layout' => '@backend/views/layouts/setting',
			'suffix' => 'lang',
		],
		'datecontrol' => [
			'class'           => 'kartik\datecontrol\Module',
			'displaySettings' => [
				'date'     => 'php:d-m-Y',
				'time'     => 'H:i:s A',
				'datetime' => 'd-m-Y H:i:s A',
			],
			'saveSettings'    => [
				'date'     => 'php:Y-m-d',
				'time'     => 'H:i:s',
				'datetime' => 'Y-m-d H:i:s',
			],
			'autoWidget'      => true,
		],
	],
];
