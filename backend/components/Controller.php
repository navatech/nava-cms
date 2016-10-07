<?php
/**
 * Created by PhpStorm.
 * User: lephuong
 * Date: 10/7/16
 * Time: 10:49 AM
 */
namespace backend\components;

use yii\filters\AccessControl;

class Controller extends \common\components\Controller {

	/**
	 * {@inheritDoc}
	 */
	public function behaviors() {
		$behavior            = static::behaviors();
		$behavior ['access'] = [
			'class' => AccessControl::className(),
			'rules' => [
				[
					'allow' => true,
					'roles' => ['@'],
				],
			],
		];
		return $behavior;
	}
}