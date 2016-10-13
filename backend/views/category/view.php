<?php
use navatech\language\Translate;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
$this->title                   = $model->id;
$this->params['breadcrumbs'][] = [
	'label' => Translate::category(),
	'url'   => ['index'],
];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a(Translate::update(), [
			'update',
			'id' => $model->id,
		], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Delete', [
			'delete',
			'id' => $model->id,
		], [
			'class' => 'btn btn-danger',
			'data'  => [
				'confirm' => Translate::are_you_sure(),
				'method'  => 'post',
			],
		]) ?>
	</p>

	<?= DetailView::widget([
		'model'      => $model,
		'attributes' => [
			'id',
			'parent_id',
			'type',
			'order',
			'image',
			'status',
		],
	]) ?>

</div>
