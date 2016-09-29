<?php
namespace backend\controllers;

use common\components\Controller;
use navatech\language\Translate;
use navatech\role\filters\RoleFilter;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class SiteController extends Controller {

	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
			'verbs' => [
				'class'   => VerbFilter::className(),
				'actions' => [
					'delete' => ['POST'],
				],
			],
			'role'  => [
				'class'   => RoleFilter::className(),
				'name'    => Translate::site(),
				'actions' => [
					'about'   => Translate::about(),
					'setting' => Translate::setting(),
				],
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function actions() {
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
		];
	}

	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionIndex() {
		return $this->render('index');
	}

	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionMaintain() {
		return $this->render('maintain');
	}

	public function actionSetting() {
		return $this->render('setting');
	}

	public function actionAbout() {
		return $this->render('about');
	}
}
