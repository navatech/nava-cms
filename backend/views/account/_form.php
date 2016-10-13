<?php
use navatech\language\Translate;
use navatech\role\models\Role;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

	<?php $form = ActiveForm::begin(['layout' => 'horizontal',]); ?>

	<?= $form->field($model, 'username', ['labelOptions' => ['class' => 'control-label col-sm-3']])
		->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'password', ['labelOptions' => ['class' => 'control-label col-sm-3']])->passwordInput() ?>

	<?= $form->field($model, 'email', ['labelOptions' => ['class' => 'control-label col-sm-3']])
		->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'role_id', ['labelOptions' => ['class' => 'control-label col-sm-3']])
		->dropDownList(ArrayHelper::map(Role::find()->all(), 'id', 'name')) ?>

	<div class="form-group  col-sm-4">
		<?= Html::submitButton($model->isNewRecord ? Translate::create() : Translate::update(), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
