<?php
use common\models\Order;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'phone_number',
            'shipping_address:ntext',
            'created_at',
            'total_price',
            [
                'attribute' => 'status',
                'value'     => function(Order $data) {
                    return $data->getStatus($data->status);
                },
                'filter'    => $searchModel->getStatus(),
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
