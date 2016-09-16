<?php
use navatech\language\Translate;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = Translate::email();
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-history">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'columns'      => [
			['class' => 'yii\grid\SerialColumn'],
			'from',
			'to',
			'subject',
			'text',
			'sentAt'
		],
	]); ?>
</div>
