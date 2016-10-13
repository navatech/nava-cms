<?php
use kartik\grid\GridView;
use navatech\language\Translate;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = Translate::email();
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-history">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'export'       => false,
		'responsive'   => true,
		'hover'        => true,
		'pjax'         => true,
		'columns'      => [
			['class' => 'yii\grid\SerialColumn'],
			'from',
			'to',
			'subject',
			'text',
			'sentAt',
		],
	]); ?>
</div>
