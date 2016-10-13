<?php
use navatech\language\Translate;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
$this->title                   = Translate::update_x(Translate::category() . ': ' . $model->name);
$this->params['breadcrumbs'][] = [
	'label' => 'Categories',
	'url'   => ['index'],
];
$this->params['breadcrumbs'][] = [
	'label' => $model->id,
	'url'   => [
		'view',
		'id' => $model->id,
	],
];
$this->params['breadcrumbs'][] = Translate::update();
?>
<div class="category-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
