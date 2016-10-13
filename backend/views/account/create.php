<?php
use navatech\language\Translate;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */
$this->title = Translate::create_x(Translate::user());
$this->params['breadcrumbs'][] = [
	'label' => Translate::user(),
	'url'   => ['index'],
];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
