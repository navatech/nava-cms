<?php
use insolita\iconpicker\Iconpicker;
use kartik\widgets\Select2;
use navatech\setting\models\Setting;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model Setting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="setting-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'parent_id')->widget(Select2::className(), [
		'data'          => Setting::parentDependent(),
		'options'       => ['placeholder' => Yii::t('setting', 'Select a parent tab ...')],
		'pluginOptions' => [
			'allowClear' => true,
		],
	]) ?>

	<?= $form->field($model, 'code')->textInput([
		'maxlength'   => true,
		'placeholder' => Yii::t('setting', 'Code key of setting'),
	]) ?>
	<?= $form->beginField($model, 'name') ?>
	<?= Html::activeLabel($model, 'name', ['class' => 'control-label']) ?>
	<?php if (in_array($model->type, [
		Setting::TYPE_GROUP,
		Setting::TYPE_ACTION,
	])): ?>
		<div class="input-group">
	    <span class="input-group-btn icon">
		    <?= Iconpicker::widget([
			    'model'         => $model,
			    'attribute'     => 'icon',
			    'pickerOptions' => ['class' => 'btn btn-default'],
			    'clientOptions' => [
				    'placement' => 'bottom',
				    'search'    => false,
			    ],
		    ]) ?>
	    </span>
			<?= Html::activeTextInput($model, 'name', ['class' => 'form-control']) ?>
		</div>
	<?php else : ?>
		<?= Html::activeTextInput($model, 'name', ['class' => 'form-control']) ?>
	<?php endif; ?>
	<?= Html::error($model, 'name', ['class' => 'help-block']) ?>
	<?= $form->endField() ?>

	<?= $form->field($model, 'desc')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'type')->widget(Select2::className(), [
		'data'          => Setting::TYPE,
		'options'       => ['placeholder' => Yii::t('setting', 'Select a type ...')],
		'pluginOptions' => [
			'allowClear' => true,
		],
	]) ?>

	<?= $form->field($model, 'store_range')->textarea([
		'rows'        => 6,
		'placeholder' => Yii::t('setting', 'Required if type in (select, multiselect, checkbox, radio), supported string with comma, json, callback function.') . ' 
Example: 
 - String: 1,2,3 or A,bcd,ef
 - Json: {"0" : "abc", "1" : "def"}
 - Callback: app\models\Setting::getItems()',
	]); ?>
	<div class="store" style="display: <?= in_array($model->type, [
		Setting::TYPE_FILE_URL,
		Setting::TYPE_FILE_PATH,
	]) ? 'block' : 'none' ?>;">
		<?= $form->field($model, 'store_dir')->textInput([
			'maxlength'   => true,
			'placeholder' => Yii::t('setting', 'Required if type in (file, url). Example & default: @app/web/uploads'),
		]) ?>
		<?= $form->field($model, 'store_url')->textInput([
			'maxlength'   => true,
			'placeholder' => Yii::t('setting', 'Required if type in (file, url). Example: http://yiiframework.com/uploads'),
		]) ?>
	</div>
	<?= $form->field($model, 'value')->textarea(['rows' => 6]) ?>
	<?= $form->field($model, 'sort_order')->textInput([
		'type'  => 'number',
		'value' => $model->isNewRecord ? 1 : $model->sort_order,
	]) ?>
	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? Yii::t('setting', 'Create') : Yii::t('setting', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>
	<?php ActiveForm::end(); ?>
</div>
<script>
	$(document).on("change", "#setting-type", function () {
		var th = $(this);
		if (th.val() == 'file_path' || th.val() == 'file_url') {
			$(".store").slideDown();
		} else {
			$(".store").slideUp();
		}
		if (th.val() == 'group' || th.val() == 'action') {
			$(".input-group-btn.icon").fadeIn('normal', function () {
				$(this).parent().addClass("input-group");
			});
		} else {
			$(".input-group-btn.icon").fadeOut('normal', function () {
				$(this).parent().removeClass("input-group");
			});
		}
	});
</script>