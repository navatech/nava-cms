<?php
use common\models\Menu;
use common\models\MenuItem;
use kartik\widgets\SwitchInput;
use navatech\language\models\Language;
use navatech\language\Translate;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MenuItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-item-form">

	<?php $form = ActiveForm::begin([
		'layout' => 'horizontal',
	]); ?>

	<ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
		<?php foreach (Language::getLanguages() as $key => $language): ?>
			<li class="<?= ($language->code == Yii::$app->language) ? 'active' : '' ?>">
				<a href="#tab_<?= $language->code ?>" role="tab" data-toggle="tab"><?= $language->name ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
	<div class="tab-content" style="border: none; padding:16px 2px ">
		<?php foreach (Language::getLanguages() as $key => $language): ?>
			<div class="<?= ($language->code == Yii::$app->language) ? 'active in' : '' ?> tab-pane fade" id="tab_<?= $language->code ?>">
				<?php
				echo $form->field($model, 'name_' . $language->code, ['labelOptions' => ['class' => 'control-label col-sm-3']])
					->textInput([
						'value' => $model->getIsNewRecord() ? '' : $model->getTranslateAttribute('name', $language->code),
					])
					->label(Translate::name());
				?>
			</div>
		<?php endforeach; ?>

	</div>

	<?= $form->field($model, 'menu_id', ['labelOptions' => ['class' => 'control-label col-sm-3']])
		->dropDownList(ArrayHelper::map(Menu::find()->where(['status' => 1])->all(), 'id', 'name'), [
			'prompt' => Translate::menu(),
		]) ?>

	<?= $form->field($model, 'parent_id', ['labelOptions' => ['class' => 'control-label col-sm-3']])
		->dropDownList(ArrayHelper::map(MenuItem::find()->where(['status' => 1])->all(), 'id', 'name'), [
			'prompt' => Translate::menu_parent(),
		]) ?>

	<?= $form->field($model, 'icon')->hiddenInput()->label(false); ?>

	<div class="form-group" style="position: relative">
		<label class="control-label col-sm-3">Icon</label>
		<div class="col-sm-6">
			<div class="btn-group">
				<button type="button" class="btn btn-primary iconpicker-component">
					<i class="<?= 'fa fa-' . $model->icon ?>"></i></button>
				<button type="button" class="icp icp-dd btn btn-primary dropdown-toggle" data-selected="fa-car" data-toggle="dropdown">
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
				</button>
				<div class="dropdown-menu"></div>
			</div>
		</div>
	</div>

	<?= $form->field($model, 'level')->textInput() ?>

	<?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'sort_order')->textInput() ?>

	<?= $form->field($model, 'status')->widget(SwitchInput::className(), []); ?>


	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
<script>
	$('.icp-dd').each(function () {
		var $this = $(this);
		$('.icp-dd').iconpicker({
			container: $(' ~ .dropdown-menu:first', $this)
		});
	});

	$('.icp').on('iconpickerSelected', function (e) {
		$('.iconpicker-component').html($('.iconpicker-selected').html());
		$('#menuitem-icon').val(e.iconpickerValue);
	});
</script>
