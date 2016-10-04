<?php
namespace backend\controllers;

use common\models\ProductImage;
use navatech\language\Translate;
use navatech\role\filters\RoleFilter;
use Yii;
use common\models\Product;
use common\models\search\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller {

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
				'name'    => Translate::product(),
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
	 * Lists all Product models.
	 * @return mixed
	 */
	public function actionIndex() {
		$searchModel  = new ProductSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		return $this->render('index', [
			'searchModel'  => $searchModel,
			'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * Displays a single Product model.
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
	 * Creates a new Product model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate() {
		$model         = new Product();
		$product_image = new ProductImage();
		if($model->load(Yii::$app->request->post())) {
			$img = $model->uploadPicture('image');
			if($model->save()) {
				if($img !== false) {
					$path = $model->getPictureFile('image');
					$img->saveAs($path);
				}
				$product_img = $product_image->uploadPicture();
				if($product_img != null) {
					foreach($product_img as $item) {
						$product_image             = new ProductImage();
						$product_image->product_id = $model->getPrimaryKey();
						$product_image->status     = "1";
						$product_image->save();
						$ext                  = $item->getExtension();
						$product_image->image = $product_image->getPrimaryKey() . '_image' . ".{$ext}";
						$product_image->save();
						if($item != false) {
							$path = $product_image->getPictureFile('url');
							$item->saveAs($path);
						}
					}
				}
				return $this->render('update', [
					'model' => $model,
				]);
			}
		} else {
			return $this->render('create', [
				'model'         => $model,
				'product_image' => $product_image,
			]);
		}
	}

	/**
	 * Updates an existing Product model.
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
			$img               = $model->uploadPicture('image');
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
	 * Deletes an existing Product model.
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
	 * Finds the Product model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 *
	 * @param integer $id
	 *
	 * @return Product the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if(($model = Product::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
