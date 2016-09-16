<?php
namespace backend\controllers;

use common\components\Controller;
use navatech\language\Translate;
use yarcode\email\models\Message;
use yarcode\email\models\Template;
use Yii;
use yii\data\ActiveDataProvider;
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
		$model = Template::findAll(['language'=>'en-US']);
		if(isset($_POST["Template"])){
			$template = Template::find($_POST["Template"]["id"])->one();
			if ($template->load(Yii::$app->request->post()) && $template->save()) {
				return $this->redirect(['setting', 'model'  => $model]);
			}
		}else{
			return $this->render('setting', [
				'model'  => $model,
			]);
		}

	}
	
}