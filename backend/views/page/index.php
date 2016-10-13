<?php
use backend\controllers\PageController;
use common\models\Page;
use kartik\grid\GridView;
use navatech\role\helpers\RoleChecker;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = 'Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Create Page', ['create'], ['class' => 'btn btn-success']) ?>
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
				'value'     => function (Page $data) {
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
				'attribute' => 'status',
				'value'     => function (Page $data) {
					return $data->statusText;
				},
				'filter'    => Page::filter(),
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
					'update' => RoleChecker::isAuth(PageController::className(), 'update'),
					'delete' => RoleChecker::isAuth(PageController::className(), 'delete'),
				],
			],
		],
	]); ?>
</div>
