<?php
use common\models\Category;
use kartik\file\FileInput;
use kartik\widgets\SwitchInput;
use navatech\language\models\Language;
use navatech\language\Translate;
use navatech\roxymce\widgets\RoxyMceWidget;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin([
        'layout' => 'default',
        'options' => [
            'enctype' => 'multipart/form-data',
        ],
    ]); ?>
    <div class="row">
        <div class="col-sm-8">
	        <div class="panel panel-default">
	        	<div class="panel-body">
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
						        <?php
						        echo $form->field($model, 'description_' . $language->code, ['labelOptions' => ['class' => 'control-label']])
						                  ->textarea([
							                  'value' => $model->getIsNewRecord() ? '' : $model->getTranslateAttribute('description', $language->code),
						                  ])
						                  ->label(Translate::description());
						        ?>
						        <?php
						        echo $form->field($model, 'content_' . $language->code, [
						        ])->widget(RoxyMceWidget::className(), [
							        'model'       => $model,
							        'attribute'   => 'content_' . $language->code,
							        'name'        => 'Post[content_' . $language->code . ']',
							        'value'       => $model->getIsNewRecord() ? '' : $model->getTranslateAttribute('content', $language->code),
							        'action'      => Url::to(['/roxymce/default']),
							        'options'     => [
								        'title'      => 'RoxyMCE',
								        'min_height' => 250,
							        ],
							        'htmlOptions' => [
								        'rows' => 6,
							        ],
						        ])->label(Translate::content());
						        ?>
					        </div>
				        <?php endforeach; ?>
			        </div>
	        	</div>
	        </div>

        </div>
        <div class="col-sm-4">
	        <div class="panel panel-default">
	        	<div class="panel-body">
			        <div class="row">
				        <div class="col-sm-6">
					        <?= $form->field($model, 'status')->widget(SwitchInput::className(), []); ?>
				        </div>
				        <div class="col-sm-6">
					        <div class="form-group">
						        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
					        </div>
				        </div>
			        </div>
			        <?= $form->field($model, 'category_id', ['labelOptions' => []])
			                 ->dropDownList(Category::getCategoryText(2), [
				                 'prompt' => Translate::category_parent(),
			                 ]) ?>
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
						        Html::img($model->getPictureUrl('image'), ['class' => 'file-preview-image img-responsive']),
					        ],
				        ],
			        ])->label(Translate::image()); ?>
	        	</div>
	        </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
