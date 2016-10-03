<?php
use navatech\language\models\Language;
use navatech\language\Translate;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
        'options' => [
            'enctype' => 'multipart/form-data',
        ],
    ]); ?>
    <div class="row">
        <div class="col-sm-8">
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
                        echo $form->field($model, 'description_' . $language->code, ['labelOptions' => ['class' => 'control-label col-sm-3']])
                                  ->textarea([
                                      'value' => $model->getIsNewRecord() ? '' : $model->getTranslateAttribute('description', $language->code),
                                  ])
                                  ->label(Translate::description());
                        ?>
                        <?php
                        echo $form->field($model, 'content_' . $language->code, ['labelOptions' => ['class' => 'control-label col-sm-3']])
                                  ->textarea([
                                      'value' => $model->getIsNewRecord() ? '' : $model->getTranslateAttribute('content', $language->code),
                                  ])
                                  ->label(Translate::content());
                        ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'status')->textInput() ?>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
            <?= $form->field($model, 'category_id')->textInput() ?>

            <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
