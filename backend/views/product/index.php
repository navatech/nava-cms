<?php
use backend\controllers\ProductController;
use common\models\Category;
use common\models\Product;
use kartik\grid\GridView;
use navatech\role\helpers\RoleChecker;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
	</p>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel'  => $searchModel,
		'export'       => false,
		'responsive'   => true,
		'hover'        => true,
		'pjax'         => true,
		'columns'      => [
			['class' => 'yii\grid\SerialColumn'],
			[
				'attribute' => 'image',
				'value'     => function (Product $data) {
					return Html::img($data->getPictureUrl('image'), [
						'class' => 'img-thumbnail',
						'style' => 'height:50px',
					]);
				},
				'filter'    => false,
				'format'    => 'raw',
			],
			'name',
			[
				'attribute' => 'parent_id',
				'value'     => function (Product $data) {
					return $data->category != null ? $data->category->name : '';
				},
				'filter'    => Category::getDependCategories(Category::TYPE_PRODUCT),
			],
			[
				'attribute' => 'price',
				'value'     => function (Product $data) {
					return number_format($data->price) . ' ₫';
				},
			],
			[
				'attribute' => 'status',
				'value'     => function (Product $data) {
					return $data->statusText;
				},
				'filter'    => Product::filter(),
			],
			[
				'class'          => 'yii\grid\ActionColumn',
				'template'       => '{preview} {update} {delete} ',
				'buttons'        => [
					'preview' => function ($url, $model, $key) {
						return Html::a('<i class="glyphicon glyphicon-globe"></i>', Url::to([
							'/frontend/page/view',
							'id' => $model->id,
						]));
					},
				],
				'visibleButtons' => [
					'update' => RoleChecker::isAuth(ProductController::className(), 'update'),
					'delete' => RoleChecker::isAuth(ProductController::className(), 'delete'),
				],
			],
		],
	]); ?>
</div>
