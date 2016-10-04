<?php
use common\models\Category;
use common\models\Product;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'image',
                'value'     => function(Product $data) {
                    return Html::img($data->getPictureUrl('image'), ['class' => 'img-thumbnail','style'=>'height:50px']);
                },
                'filter'    => false,
                'format'    => 'raw',
            ],
            'name',
            [
                'attribute' => 'category_id',
                'value'     => function(Product $data) {
                    return Category::getCategoryById($data->category_id);
                },
                'filter'    => Category::getCategoryText(1),
            ],
            [
                'attribute' => 'price',
                'value'     => function(Product $data) {
                    return number_format($data->price).' ₫';
                },
            ],
            [
                'attribute' => 'status',
                'value'     => function(Product $data) {
                    return $data->getStatus($data->status);
                },
                'filter'    => $searchModel->getStatus(),
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
