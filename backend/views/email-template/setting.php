<?php
/**
 * Created by Navatech.
 * @project yii2-cms
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    9/16/2016
 * @time    4:38 PM
 */
use navatech\language\Translate;
use navatech\roxymce\widgets\RoxyMceWidget;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

?>
<?php Yii::$app->layout = 'setting'; ?>
<div class="panel panel-transparent ">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
		<?php foreach($model as $key => $template): ?>
			<li class="<?= ($key == 0) ? 'active' : '' ?>">
				<a data-toggle="tab" href="#menu-<?= $template->id ?>"><span><?= $template->shortcut ?></span></a>
			</li>
		<?php endforeach; ?>
	</ul>
	<div class="tab-content">
		<?php foreach($model as $key => $template): ?>
		<div class="tab-pane slide-left <?= ($key == 0) ? 'active' : '' ?>" id="menu-<?= $template->id ?>">
			<div class="email-template-form">

				<?php $form = ActiveForm::begin(); ?>
				<?= $form->field($template, 'id')->hiddenInput()->label(false); ?>
				<?= $form->field($template, 'shortcut')->textInput(['maxlength' => 255]) ?>
				<?= $form->field($template, 'language')->dropDownList(
					array_combine(\yarcode\email\EmailManager::getInstance()->languages,
						\yarcode\email\EmailManager::getInstance()->languages)
				) ?>
				<?= $form->field($template, 'from')->textInput(['maxlength' => 255]) ?>
				<?= $form->field($template, 'subject')->textInput(['maxlength' => 255]) ?>

				<?= RoxyMceWidget::widget([
					'model'       => $template,
					'attribute'   => 'text',
					'name'        => 'Post[text]',
					'value'       => $template->text,
					'options'     => [
						'title' => 'RoxyMCE',
					],
					'htmlOptions' => [],
				]);
				?>

				<div class="form-group">
					<?= Html::submitButton(Translate::save(),
						['class' => $template->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
				</div>

				<?php ActiveForm::end(); ?>

			</div>
		</div>
		<?php endforeach; ?>
	</div>


