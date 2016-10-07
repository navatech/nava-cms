<?php
use common\models\MenuItem;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\MenuItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = 'Menu Items';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="menu-item-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Menu Item', ['create'], ['class' => 'btn btn-success']) ?>
	</p>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel'  => $searchModel,
		'columns'      => [
			['class' => 'yii\grid\SerialColumn'],
			[
				'attribute' => 'icon',
				'value'     => function (MenuItem $data) {
					return '<i class="fa ' . $data->icon . '"></i>';
				},
				'filter'    => false,
				'format'    => 'html',
			],
			'parent_id',
			'name',
			'url:url',
			'sort_order',
			[
				'attribute' => 'status',
				'value'     => function (MenuItem $data) {
					return $data->statusText;
				},
				'filter'    => MenuItem::filter(),
			],
			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>
</div>
