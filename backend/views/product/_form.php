<?php
use kartik\file\FileInput;
use navatech\language\models\Language;
use navatech\language\Translate;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

	<?php $form = ActiveForm::begin([
		'layout'  => 'horizontal',
		'options' => [
			'enctype' => 'multipart/form-data',
		],
	]); ?>
	<div class="row">
		<div class="col-sm-8">
			<ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
				<?php foreach(Language::getLanguages() as $key => $language): ?>
					<li class="<?= ($language->code == Yii::$app->language) ? 'active' : '' ?>">
						<a href="#tab_<?= $language->code ?>" role="tab" data-toggle="tab"><?= $language->name ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="tab-content" style="border: none; padding:16px 2px ">
				<?php foreach(Language::getLanguages() as $key => $language): ?>
					<div class="<?= ($language->code == Yii::$app->language) ? 'active in' : '' ?> tab-pane fade" id="tab_<?= $language->code ?>">
						<?php
						echo $form->field($model, 'name_' . $language->code, ['labelOptions' => ['class' => 'control-label col-sm-3']])->textInput([
								'value' => $model->getIsNewRecord() ? '' : $model->getTranslateAttribute('name', $language->code),
							])->label(Translate::name());
						?>
					</div>
				<?php endforeach; ?>
			</div>

			<?= $form->field($model, 'price')->textInput() ?>
		</div>
		<div class="col-sm-4">
			<?= $form->field($model, 'status')->textInput() ?>
			<div class="form-group">
				<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
			</div>
			<?= $form->field($model, 'category_id')->textInput() ?>
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
		</div>
	</div>

	<?php ActiveForm::end(); ?>

</div>
