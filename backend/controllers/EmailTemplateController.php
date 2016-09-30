<?php
namespace backend\controllers;

use common\components\Controller;
use yarcode\email\models\Template;
use Yii;
use yii\filters\VerbFilter;

class EmailTemplateController extends Controller {

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
		];
	}

	/**
	 * Lists all Email Template models.
	 * @return mixed
	 */
	public function actionSetting() {
		$models = Template::findAll(['language' => 'en-US']);
		if (isset($_POST["Template"])) {
			$template = Template::findOne($_POST["Template"]["id"]);
			if ($template->load(Yii::$app->request->post()) && $template->save()) {
				return $this->redirect([
					'setting',
					'model' => $models,
				]);
			}
		} else {
			return $this->render('setting', [
				'models' => $models,
			]);
		}
	}
}
