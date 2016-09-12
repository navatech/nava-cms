<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);
$baseUrl = str_replace('/web', '', (new \yii\web\Request)->getBaseUrl());

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'language'   => 'en',
    'timezone'   => 'Asia/Ho_Chi_Minh',
    'modules' => [
	    'user'     => [
		    'class'    => 'dektrium\user\Module',
		    'modelMap' => [
			    'User'      => 'navatech\role\models\User',
			    'LoginForm' => 'navatech\role\models\LoginForm',
		    ],
	    ],
	    'role'  => [
		    'class'               => 'navatech\role\Module',
		    'controllers'         => [ //namespaces of controllers
			    'app\controllers',
			    'navatech\role\controllers',
		    ],
	    ],
	    'gridview' => [
		    'class' => '\kartik\grid\Module',
	    ],
	    'language' => [
		    'class'    => '\navatech\language\Module',
		    /*TODO uncommented if you want to custom view*/
		    //'viewPath' => '@app/vendor/navatech/yii2-multi-language/src/views',
		    /*TODO uncommented if you want to change suffix of translated table / model.
			should be one word, lowercase only.*/
		    'suffix' => 'lang',
	    ],
	    'setting'  => [
		    'class'               => 'navatech\setting\Module',
		    'controllerNamespace' => 'navatech\setting\controllers',
		    'viewPath' => '@app/views/setting'
	    ],
	    'gridview' => [
		    'class' => '\kartik\grid\Module',
	    ],
	    'roxymce'  => [
		    'class' => '\navatech\roxymce\Module',
	    ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
            'baseUrl'             => $baseUrl,
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'setting' => [
	        'class' => 'navatech\setting\Setting',
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'view' => [
	        'theme' => [
		        'pathMap' => [
			        '@dektrium/user/views' => '@app/views/user',
			        '@navatech/setting/src/views' => '@app/views/setting',
			        //'@navatech/multi-language/src/views' => '@app/views/language',
		        ],
	        ],
        ],
        'urlManager' => [
	        'enablePrettyUrl' => true,
	        'showScriptName' => false,
        ],

    ],
    'params' => $params,
];
