<?php
namespace backend\controllers;

use backend\components\Controller;
use common\models\Category;
use common\models\search\CategorySearch;
use navatech\language\Translate;
use navatech\role\filters\RoleFilter;
use Yii;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller {

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
				'name'    => Translate::category(),
				'actions' => [
					'index'  => 'Danh sách',
					'view'   => 'Chi tiết',
					'create' => 'Thêm mới',
					'update' => 'Cập nhật',
					'delete' => 'Xóa',
				],
			],
		];
	}

	/**
	 * Lists all Category models.
	 * @return mixed
	 */
	public function actionIndex($type) {
		$searchModel       = new CategorySearch();
		$model             = new Category();
		$searchModel->type = $type;
		$dataProvider      = $searchModel->search(Yii::$app->request->queryParams);
		return $this->render('index', [
			'searchModel'  => $searchModel,
			'dataProvider' => $dataProvider,
			'model'        => $model,
			'type'         => $type,
		]);
	}

	/**
	 * Displays a single Category model.
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
	 * Creates a new Category model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate($type) {
		$model = new Category();
		if ($model->load(Yii::$app->request->post())) {
			$img = $model->uploadPicture('image');
			if ($model->parent_id == '') {
				$model->parent_id = 0;
			}
			if ($model->save()) {
				if ($img !== false) {
					$path = $model->getPictureFile('image');
					$img->saveAs($path);
				}
				return $this->redirect([
					'index',
					'type' => $model->type,
				]);
			}
		} else {
			return $this->render('create', [
				'model' => $model,
				'type'  => $type,
			]);
		}
	}

	/**
	 * Updates an existing Category model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 *
	 * @param integer $id
	 *
	 * @return mixed
	 */
	public function actionUpdate($id) {
		$model = $this->findModel($id);
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect([
				'index',
				'type' => $model->type,
			]);
		} else {
			return $this->render('update', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Deletes an existing Category model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 *
	 * @param integer $id
	 *
	 * @return mixed
	 */
	public function actionDelete($id) {
		$type = $this->findModel($id)->type;
		$this->findModel($id)->delete();
		return $this->redirect([
			'index',
			'type' => $type,
		]);
	}

	/**
	 * Finds the Category model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 *
	 * @param integer $id
	 *
	 * @return Category the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if (($model = Category::findOneTranslated($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
