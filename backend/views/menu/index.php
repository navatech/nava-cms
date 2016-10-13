<?php
use kartik\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = 'Menus';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="menu-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Menu', ['create'], ['class' => 'btn btn-success']) ?>
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
			'id',
			'name',
			'status',
			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>
</div>
