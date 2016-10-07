<?php
namespace backend\controllers;

use backend\components\Controller;
use common\models\Menu;
use common\models\MenuItem;
use common\models\search\MenuSearch;
use navatech\language\Translate;
use navatech\role\filters\RoleFilter;
use Yii;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;

/**
 * MenuController implements the CRUD actions for Menu model.
 */
class MenuController extends Controller {

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
				'name'    => Translate::menu(),
				'actions' => [
					'index'   => Translate::lists(),
					'view'    => Translate::view(),
					'create'  => Translate::create(),
					'update'  => Translate::update(),
					'delete'  => Translate::delete(),
					'setting' => Translate::setting(),
				],
			],
		];
	}

	/**
	 * Lists all Menu models.
	 * @return mixed
	 */
	public function actionIndex() {
		$searchModel  = new MenuSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		return $this->render('index', [
			'searchModel'  => $searchModel,
			'dataProvider' => $dataProvider,
		]);
	}

	public function actionSetting() {
		$models = Menu::findAll(['status' => 1]);
		if (isset($_POST["MenuItem"])) {
			$i = 0;
			foreach ($_POST["MenuItem"] as $menuItem) {
				$i ++;
				$item             = MenuItem::findOne($menuItem['id']);
				$item->icon       = $menuItem['icon'];
				$item->parent_id  = $menuItem['parent_id'];
				$item->sort_order = $i;
				$item->status     = (isset($menuItem['status'])) ? $menuItem['status'] : 0;
				$item->save();
			}
			return $this->render('setting', [
				'models' => $models,
			]);
		} else {
			return $this->render('setting', [
				'models' => $models,
			]);
		}
	}

	/**
	 * Displays a single Menu model.
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
	 * Creates a new Menu model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate() {
		$model = new Menu();
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect([
				'view',
				'id' => $model->id,
			]);
		} else {
			return $this->render('create', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Updates an existing Menu model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 *
	 * @param integer $id
	 *
	 * @return mixed
	 */
	public function actionUpdate($id) {
		$model      = $this->findModel($id);
		$menu_items = MenuItem::findAll(['menu_id' => $id]);
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect([
				'view',
				'id' => $model->id,
			]);
		} else {
			return $this->render('update', [
				'model'      => $model,
				'menu_items' => $menu_items,
			]);
		}
	}

	/**
	 * Deletes an existing Menu model.
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
	 * Finds the Menu model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 *
	 * @param integer $id
	 *
	 * @return Menu the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if (($model = Menu::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}

	public function actionTest() {
		return $this->render('test');
	}
}
