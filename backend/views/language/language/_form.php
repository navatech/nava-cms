<?php
use navatech\language\models\Language;
use navatech\language\Translate;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model Language */
/* @var $form ActiveForm */
?>
<?php $form = ActiveForm::begin([
	'options' => [
		'class' => 'language-form',
	],
]); ?>
<div class="project-form">
	<div class="col-md-6 col-md-offset-3">

		<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

		<?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

		<?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

		<?= $form->field($model, 'status')->dropDownList([
			0 => Translate::not_in_use(),
			1 => Translate::in_use(),
		], ['prompt' => Translate::choose_status()]) ?>

	</div>
</div>
<div class="clearfix form-actions">
	<div class="col-md-offset-3 col-md-6">
		<button class="btn btn-info" type="submit">
			<i class="ace-icon fa fa-check bigger-110"></i>
			<?= Translate::save() ?>
		</button>

		&nbsp; &nbsp; &nbsp;
		<button class="btn btn-back" type="reset">
			<i class="ace-icon fa fa-arrow-left bigger-110"></i>
			<?= Translate::back() ?>
		</button>
	</div>
</div>
<?php ActiveForm::end(); ?>
