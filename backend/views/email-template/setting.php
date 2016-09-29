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
<!--<div id="w2-container" class=" tabs-above tab-align-left tab-bordered tabs-krajee">
	<ul id="w2" class="nav nav-tabs nav nav-tabs hidden-print" data-krajee-tabsx="tabsX_00000000" role="tablist">
		<li class="active"><a href="#w2-tab0" data-toggle="tab" role="tab">error: phrase [email_group] not found</a></li>
	</ul>
	<div class="tab-content printable"><div class="h3 visible-print-block">error: phrase [email_group] not found</div>
		<div class="tab-pane fade in active">
		</div>
	</div></div>-->
<div class=" tabs-above tab-align-left tab-bordered tabs-krajee">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs nav nav-tabs hidden-print" data-init-reponsive-tabs="dropdownfx">
		<?php foreach($model as $key => $template): ?>
			<li class="<?= ($key == 0) ? 'active' : '' ?>">
				<a data-toggle="tab" href="#menu-<?= $template->id ?>"><span><?= $template->shortcut ?></span></a>
			</li>
		<?php endforeach; ?>
	</ul>
	<div class="tab-content printable">
		<?php foreach($model as $key => $template): ?>
		<div class="tab-pane fade in <?= ($key == 0) ? 'active' : '' ?>" id="menu-<?= $template->id ?>">
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


