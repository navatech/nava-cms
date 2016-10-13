<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Contact */
$this->title                   = $model->title;
$this->params['breadcrumbs'][] = [
	'label' => 'Contacts',
	'url'   => ['index'],
];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Delete', [
			'delete',
			'id' => $model->id,
		], [
			'class' => 'btn btn-danger',
			'data'  => [
				'confirm' => 'Are you sure you want to delete this item?',
				'method'  => 'post',
			],
		]) ?>
	</p>

	<?= DetailView::widget([
		'model'      => $model,
		'attributes' => [
			'id',
			'fullname',
			'email:email',
			'phone',
			'title',
			'content',
			'created_at',
			'status',
		],
	]) ?>

</div>
