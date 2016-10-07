<?php
use common\models\Page;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Page', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'image',
                'value'     => function(Page $data) {
                    return Html::img($data->getPictureUrl('image'), ['class' => 'img-thumbnail','style'=>'height:50px']);
                },
                'filter'    => false,
                'format'    => 'raw',
            ],
            'name',
            [
                'attribute' => 'status',
                'value'     => function(Page $data) {
                    return $data->getStatus($data->status);
                },
                'filter'    => $searchModel->getStatus(),
            ],
            [
                'class'    => 'yii\grid\ActionColumn',
                'template' => '{update}{delete}',
            ],
        ],
    ]); ?>
</div>
