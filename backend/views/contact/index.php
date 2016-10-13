<?php
use kartik\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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
			//'fullname',
			'email:email',
			'phone',
			'title',
			//'content',
			//'created_at ',
			'status',
			[
				'class'    => 'yii\grid\ActionColumn',
				'template' => '{view}',
			],
		],
	]); ?>
</div>
