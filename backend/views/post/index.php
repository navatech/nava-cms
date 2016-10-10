<?php
use backend\controllers\PostController;
use common\models\Category;
use common\models\Post;
use navatech\role\helpers\RoleChecker;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

	<h1><?= Html::encode($this->title) ?></h1>

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
					return $data->category->name;
				},
				'filter'    => Category::getDependCategories(Category::TYPE_POST),
			],
			[
				'attribute' => 'status',
				'value'     => function (Post $data) {
					return $data->statusText;
				},
				'filter'    => Post::filter(),
			],
			[
				'class'          => 'yii\grid\ActionColumn',
				'visibleButtons' => [
					'view'   => RoleChecker::isAuth(PostController::className(), 'view'),
					'update' => RoleChecker::isAuth(PostController::className(), 'update'),
					'delete' => RoleChecker::isAuth(PostController::className(), 'delete'),
				],
			],
		],
	]); ?>
</div>
