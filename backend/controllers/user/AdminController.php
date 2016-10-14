<?php
namespace backend\controllers\user;

use dektrium\user\filters\AccessRule;
use navatech\language\Translate;
use navatech\role\filters\RoleFilter;
use yii\filters\AccessControl;

/**
 * Created by PhpStorm.
 * User: phuon
 * Date: 10/14/2016
 * Time: 10:09 AM
 */
class AdminController extends \dektrium\user\controllers\AdminController {

	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		$behaviors                     = parent::behaviors();
		$behaviors['role']             = [
			'class'   => RoleFilter::className(),
			'name'    => Translate::user(),
			'actions' => [
				'index'  => Translate::lists(),
				'view'   => Translate::view(),
				'create' => Translate::create(),
				'update' => Translate::update(),
				'delete' => Translate::delete(),
			],
		];
		$behaviors          ['access'] = [
			'class'      => AccessControl::className(),
			'ruleConfig' => [
				'class' => AccessRule::className(),
			],
			'rules'      => [
				[
					'allow' => true,
					'roles' => ['@'],
				],
			],
		];
		return $behaviors;
	}

	/**
	 * {@inheritDoc}
	 */
	public function actionIndex() {
		return parent::actionIndex();
	}
}