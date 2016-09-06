<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MenuItem */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="content sm-gutter">
	<div class="container-fluid padding-25 sm-padding-10">
		<div class="menu-item-form">

			<?php $form = ActiveForm::begin(); ?>

			<?= $form->field($model, 'menu_id')->textInput() ?>

			<?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'parent_id')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'level')->textInput() ?>

			<?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'sort_order')->textInput() ?>

			<?= $form->field($model, 'status')->textInput() ?>

			<div class="form-group">
				<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
			</div>

			<?php ActiveForm::end(); ?>

		</div>
	</div>
</div>