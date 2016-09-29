<?php
use kartik\tabs\TabsX;
use navatech\setting\assets\AwesomeBootstrapCheckboxAsset;
use navatech\setting\models\Setting;
use yii\bootstrap\Alert;
use yii\bootstrap\Html;
use yii\web\View;

/**
 * @var $this  View
 * @var $title string
 * @var $code  string
 */
AwesomeBootstrapCheckboxAsset::register($this);
$this->title                   = $title;
$this->params['breadcrumbs'][] = $this->title;
$items                         = [];
Yii::$app->layout              = 'setting';
if(Yii::$app->session->hasFlash('alert')) {
	echo Alert::widget(Yii::$app->session->getFlash('alert'));
}
if(YII_DEBUG):
	?>

	<div class="col-sm-offset-9 col-sm-3 config-button">
		<div class="form-inline pull-right">
			<?= Html::a(Yii::t('setting', 'Setting'), ['config/index'], [
				'class' => 'btn btn-primary',
				'style' => 'z-index:9999',
			]) ?>
		</div>
	</div>
<?php endif; ?>
<?= TabsX::widget([
	'items'        => Setting::getItems($code),
	'bordered'     => true,
	'position'     => TabsX::POS_ABOVE,
	'encodeLabels' => false,
]); ?>
