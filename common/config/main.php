<?php
return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		'cache'        => [
			'class' => 'yii\caching\FileCache',
		],
		'user'         => [
			'identityClass'   => 'common\models\User',
			'enableAutoLogin' => true,
			'identityCookie'  => [
				'name'     => '_identity-backend',
				'httpOnly' => true,
			],
		],
		'setting'      => [
			'class' => 'navatech\setting\Setting',
		],
		'mailer'       => [
			'class'            => 'common\swiftmailer\Mailer',
			'useFileTransport' => false,
		],
		'emailManager' => [
			'class'            => '\yarcode\email\EmailManager',
			'defaultTransport' => 'yiiMailer',
			'transports'       => [
				'yiiMailer' => [
					'class' => '\yarcode\email\transports\YiiMailer',
				],
			],
		],
	],
	'modules'    => [
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
