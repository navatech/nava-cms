<?php
namespace backend\controllers;

use backend\components\Controller;
use common\models\Page;
use common\models\search\PageSearch;
use navatech\language\Translate;
use navatech\role\filters\RoleFilter;
use Yii;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;

/**
 * PageController implements the CRUD actions for Page model.
 */
class PageController extends Controller {

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
				'name'    => Translate::page(),
				'actions' => [
					'index'  => Translate::lists(),
					'create' => Translate::add_new(),
					'update' => Translate::update(),
					'delete' => Translate::delete(),
				],
			],
		];
	}

	/**
	 * Lists all Page models.
	 * @return mixed
	 */
	public function actionIndex() {
		$searchModel  = new PageSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		return $this->render('index', [
			'searchModel'  => $searchModel,
			'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * Displays a single Page model.
	 *
	 * @param integer $id
	 *
	 * @return mixed
	 */
	public function actionView($id) {
		return $this->render('view', [
			'model' => $this->findModel($id),
		]);
	}

	/**
	 * Creates a new Page model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate() {
		$model = new Page();
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			$img = $model->uploadPicture('image');
			if ($model->save()) {
				if ($img !== false) {
					$path = $model->getPictureFile('image');
					$img->saveAs($path);
				}
				return $this->redirect(['update','id'=>$model->id]);
			}
		}
		return $this->render('create', [
			'model' => $model,
		]);
	}

	/**
	 * Updates an existing Page model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 *
	 * @param integer $id
	 *
	 * @return mixed
	 */
	public function actionUpdate($id) {
		$model    = $this->findModel($id);
		$oldImage = $model->image;
		if ($model->load(Yii::$app->request->post())) {
			$img = $model->uploadPicture('image');
			if ($model->save()) {
				if ($img === false) {
					$model->image = $oldImage;
				}
				if ($img !== false) {
					$path = $model->getPictureFile('image');
					$img->saveAs($path);
				}
				return $this->redirect(['update','id'=>$model->id]);
			}
		}
		return $this->render('update', [
			'model' => $model,
		]);
	}

	/**
	 * Deletes an existing Page model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 *
	 * @param integer $id
	 *
	 * @return mixed
	 */
	public function actionDelete($id) {
		$this->findModel($id)->delete();
		return $this->redirect(['index']);
	}

	/**
	 * Finds the Page model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 *
	 * @param integer $id
	 *
	 * @return Page the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if (($model = Page::findOneTranslated($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
