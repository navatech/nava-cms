<?php
use navatech\language\Translate;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/**@var int $type */
$this->title                   = Translate::create_x(Translate::category());
$this->params['breadcrumbs'][] = [
	'label' => Translate::category(),
	'url'   => ['index'],
];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
		'type'  => $type,
	]) ?>

</div>
