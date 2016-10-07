<?php
use common\models\Category;
use common\models\Post;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
	</p>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel'  => $searchModel,
		'columns'      => [
			['class' => 'yii\grid\SerialColumn'],
			[
				'attribute' => 'image',
				'value'     => function (Post $data) {
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
				'attribute' => 'category_id',
				'value'     => function (Post $data) {
					return Category::getCategoryById($data->category_id);
				},
				'filter'    => Category::getCategoryText(2),
			],
			[
				'attribute' => 'status',
				'value'     => function (Post $data) {
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
