<?php
use common\models\MenuItem;
use yii\helpers\Html;
use yii\grid\GridView;

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
			/*[
				'attribute' => 'menu_id',
				'value'     => function(MenuItem $data) {
					return $data->menu_id != null ? $data->getCityByID($data->city_id) : '';
				},
				'filter'    => $searchModel->getCity(),
			],*/
			[
				'attribute' => 'icon',
				'value'     => function(MenuItem $data) {
					return '<i class="fa fa-'.$data->icon.'"></i>';
				},
				'filter'    => false,
				'format'    => 'html',
			],
			'parent_id',
			'level',
			'url:url',
			'sort_order',
			'status',
			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>
</div>
