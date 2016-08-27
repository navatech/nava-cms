<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MenuItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'menu_id')->textInput() ?>

    <?= $form->field($model, 'parent_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entity')->dropDownList([ 'page' => 'Page', 'menu-item' => 'Menu-item', 'url' => 'Url', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'entity_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'level')->textInput() ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
