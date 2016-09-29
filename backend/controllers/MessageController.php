<?php
namespace backend\controllers;

use common\components\Controller;
use yarcode\email\models\Message;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;

class MessageController extends Controller {

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
	 * Lists all Email models.
	 * @return mixed
	 */
	public function actionHistory() {
		$dataProvider = new ActiveDataProvider([
			'query' => Message::find()->where(['status' => '1']),
		]);
		return $this->render('history', [
			'dataProvider' => $dataProvider,
		]);
	}
}
