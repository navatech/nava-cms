<?php
namespace backend\controllers;

use navatech\language\Translate;
use navatech\role\filters\RoleFilter;
use Yii;
use common\models\Post;
use common\models\search\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller {

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
				'name'    => Translate::post(),
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
	 * Lists all Post models.
	 * @return mixed
	 */
	public function actionIndex() {
		$searchModel  = new PostSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		return $this->render('index', [
			'searchModel'  => $searchModel,
			'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * Displays a single Post model.
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
	 * Creates a new Post model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate() {
		$model = new Post();
		if($model->load(Yii::$app->request->post())) {
			$img = $model->uploadPicture('image');
			if($model->save()) {
				if($img !== false) {
					$path = $model->getPictureFile('image');
					$img->saveAs($path);
				}
				return $this->redirect('update', [
					'model' => $model,
				]);
			}
		} else {
			return $this->render('create', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Updates an existing Post model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 *
	 * @param integer $id
	 *
	 * @return mixed
	 */
	public function actionUpdate($id) {
		$model    = $this->findModel($id);
		$oldImage = $model->image;
		if($model->load(Yii::$app->request->post())) {
			$model->updated_at = date('Y-m-d H-i-s');
			$img = $model->uploadPicture('image');
			if($model->save()) {
				if($img === false) {
					$model->image = $oldImage;
				}
				if($img !== false) {
					$path = $model->getPictureFile('image');
					$img->saveAs($path);
				}
				return $this->render('update', [
					'model' => $model,
				]);
			}
		} else {
			return $this->render('update', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Deletes an existing Post model.
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
	 * Finds the Post model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 *
	 * @param integer $id
	 *
	 * @return Post the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if(($model = Post::findOneTranslated($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
