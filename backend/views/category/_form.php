<?php
use common\models\Category;
use kartik\switchinput\SwitchInput;
use kartik\widgets\FileInput;
use navatech\language\models\Language;
use navatech\language\Translate;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

	<?php $form = ActiveForm::begin([
		'options' => [
			'enctype' => 'multipart/form-data',
		],
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

	<?= $form->field($model, 'parent_id', ['labelOptions' => ['class' => 'control-label col-sm-3']])
		->dropDownList(ArrayHelper::map(Category::find()->where(['status' => 1])->all(), 'id', 'name'), [
			'prompt' => Translate::category_parent(),
		]) ?>

	<?= $form->field($model, 'type')
		->hiddenInput(['value' => $model->isNewRecord ? $type : $model->type])
		->label(false); ?>

	<?= $form->field($model, 'order')->textInput() ?>

	<?php echo $form->field($model, 'img')->widget(FileInput::className(), [
		'options'       => [
			'accept'      => 'image/*',
			'placeholder' => Translate::image(),
		],
		'pluginOptions' => [
			'allowedFileExtensions'                          => [
				'jpg',
				'gif',
				'png',
			],
			'showUpload'                                     => false,
			$model->getIsNewRecord() ? '' : 'initialPreview' => [
				Html::img($model->getPictureUrl('image'), ['class' => 'file-preview-image']),
			],
		],
	])->label(Translate::image()); ?>

	<?= $form->field($model, 'status')->widget(SwitchInput::className(), []); ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? Translate::create() : Translate::update(), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
