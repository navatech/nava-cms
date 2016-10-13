<?php
use navatech\language\Translate;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */
$this->title                   = $model->username;
$this->params['breadcrumbs'][] = [
	'label' => Translate::user(),
	'url'   => ['index'],
];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a(Translate::update_x(Translate::user()), [
			'update',
			'id' => $model->id,
		], ['class' => 'btn btn-primary']) ?>
		<?= Html::a(Translate::delete(), [
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
			'username',
			'email:email',
			[
				'attribute' => 'role_id',
				'value'     => $model->role->name,
			],
		],
	]) ?>

</div>
