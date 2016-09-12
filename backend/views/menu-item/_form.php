<?php
use common\models\Menu;
use common\models\MenuItem;
use navatech\language\models\Language;
use navatech\language\Translate;
use yii\bootstrap\ActiveForm;
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
		<?php foreach(Language::getAllLanguages() as $key => $language): ?>
			<li class="<?= ($language->code == Yii::$app->language) ? 'active' : '' ?>">
				<a href="#tab_<?= $language->code ?>" role="tab" data-toggle="tab"><?= $language->name ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
	<div class="tab-content" style="border: none; padding:16px 2px ">
		<?php foreach(Language::getAllLanguages() as $key => $language): ?>
			<div class="<?= ($language->code == Yii::$app->language) ? 'active in' : '' ?> tab-pane fade" id="tab_<?= $language->code ?>">
				<?php
				echo $form->field($model, 'name_' . $language->code, ['labelOptions' => ['class' => 'control-label col-sm-3']])->textInput([
					'value' => $model->getIsNewRecord() ? '' : $model->getTranslateAttribute('name', $language->code),
				])->label(Translate::name());
				?>
			</div>
		<?php endforeach; ?>

	</div>

	<?= $form->field($model, 'menu_id', ['labelOptions' => ['class' => 'control-label col-sm-3']])->dropDownList(Menu::getAllmenu(), [
		'prompt' => Translate::menu(),
	]) ?>

	<?= $form->field($model, 'parent_id', ['labelOptions' => ['class' => 'control-label col-sm-3']])->dropDownList(MenuItem::getAllmenuitem(), [
		'prompt' => Translate::menu_parent(),
	]) ?>

	<?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'level')->textInput() ?>

	<?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'sort_order')->textInput() ?>

	<?= $form->field($model, 'status')->checkbox([
		'data-init-plugin' => 'switchery',
		'template'         => '<label class="control-label col-sm-3">{label}</label><div class="col-sm-8">{input}</div>',
	]) ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
