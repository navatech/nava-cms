<?php
use common\models\Order;
use kartik\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel'  => $searchModel,
		'export'       => false,
		'responsive'   => true,
		'hover'        => true,
		'pjax'         => true,
		'columns'      => [
			['class' => 'yii\grid\SerialColumn'],
			'id',
			'user_id',
			'phone_number',
			'shipping_address:ntext',
			'created_at',
			'total_price',
			[
				'attribute' => 'status',
				'value'     => function (Order $data) {
					return $data->statusText;
				},
				'filter'    => Order::filter(),
			],
			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>
</div>
