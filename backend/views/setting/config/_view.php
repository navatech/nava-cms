<?php
/**
 * Created by Navatech.
 * @project yii2-basic
 * @author  Phuong
 * @email   phuong17889[at]gmail.com
 * @date    5/5/2016
 * @time    4:02 PM
 * @var Setting $model
 */
use navatech\setting\models\Setting;

?>

<div class="panel panel-info">
	<div class="panel-body">
		<form class="form-inline">
			<?php if ($model->type != 'group') : ?>
				<div class="form-group">
					<label class="control-label col-sm-3 no-padding-right"><?= $model->getName() ?></label>
					<div class="col-sm-9">
						<?= $model->getItem() ?>
						<span class="help-block">
							<strong>Yii::$app->setting-><?= $model->code ?></strong><br/>
							<?= $model->getDesc() ?>
						</span>
					</div>
				</div>
			<?php else : ?>
				<?=Yii::t('setting','This is a tab')?>
			<?php endif; ?>
		</form>
	</div>
</div>
