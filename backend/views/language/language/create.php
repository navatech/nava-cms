<?php
use navatech\language\models\Language;
use navatech\language\Translate;
use yii\web\View;

/* @var $this View */
/* @var $model Language */
$this->params['breadcrumbs'][] = [
	'label' => Translate::language(),
	'url'   => ['list'],
];
$this->params['breadcrumbs'][] = Translate::create();
?>
<div class="page-header">
	<h1><?= Translate::language() ?>
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i> <?= Translate::add_a_new() ?>
		</small>
	</h1>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="row">
			<div class="space-6"></div>
			<?= $this->render('_form', [
				'model' => $model,
			]) ?>
		</div>
	</div>
</div>

