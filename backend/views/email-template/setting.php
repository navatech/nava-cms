<?php
/**
 * Created by Navatech.
 * @project yii2-cms
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    9/16/2016
 * @time    4:38 PM
 * @var Template[] $models
 */
use navatech\language\Translate;
use navatech\roxymce\widgets\RoxyMceWidget;
use yarcode\email\models\Template;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

Yii::$app->layout = 'setting';
?>
<div class="email-setting">
	<div class="col-sm-12">
		<div class="tabs-above tab-align-left tab-bordered tabs-krajee">
			<ul class="nav nav-tabs nav nav-tabs hidden-print" data-init-reponsive-tabs="dropdownfx">
				<?php foreach ($models as $key => $template): ?>
					<li class="<?= ($key == 0) ? 'active' : '' ?>">
						<a data-toggle="tab" href="#menu-<?= $template->id ?>"><span><?= $template->shortcut ?></span></a>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="tab-content printable">
				<?php foreach ($models as $key => $template): ?>
					<div class="tab-pane fade in <?= ($key == 0) ? 'active' : '' ?>" id="menu-<?= $template->id ?>">
						<div class="email-template-form">

							<?php $form = ActiveForm::begin(); ?>
							<?= $form->field($template, 'id')->hiddenInput()->label(false); ?>
							<?= $form->field($template, 'shortcut')->textInput(['maxlength' => 255]) ?>
							<?= $form->field($template, 'language')
								->dropDownList(array_combine(\yarcode\email\EmailManager::getInstance()->languages, \yarcode\email\EmailManager::getInstance()->languages)) ?>
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
							]); ?>

							<div class="form-group">
								<?= Html::submitButton(Translate::save(), ['class' => $template->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
							</div>

							<?php ActiveForm::end(); ?>

						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>


