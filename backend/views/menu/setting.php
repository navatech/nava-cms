<?php
/**
 * Created by Navatech.
 * @project yii2-cms
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    9/7/2016
 * @time    5:03 PM
 * @var Menu[] $models
 */
use common\models\Menu;
use common\models\MenuItem;
use navatech\language\Translate;
use yii\bootstrap\ActiveForm;

Yii::$app->layout = 'setting';
?>
<div class="menu-setting">
	<div class="col-sm-12">
		<div class="tabs-above tab-align-left tab-bordered tabs-krajee">
			<ul class="nav nav-tabs nav nav-tabs hidden-print" data-init-reponsive-tabs="dropdownfx">
				<?php foreach ($models as $key => $menu): ?>
					<?php if (!empty($menu->menuItem)): ?>
						<li class="<?= ($key == 0) ? 'active' : '' ?>">
							<a data-toggle="tab" href="#menu-<?= $menu->id ?>"><span><?= $menu->name ?></span></a>
						</li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
			<div class="tab-content printable">
				<?php foreach ($models as $key => $menu): ?>
					<?php if (!empty($menu->menuItem)): ?>
						<div class="tab-pane fade in <?= ($key == 0) ? 'active' : '' ?>" id="menu-<?= $menu->id ?>">
							<div class="row column-seperation">
								<div class="col-sm-12">
									<div class="cf ">
										<div class="row">
											<div class="col-sm-12">
												<div class="dd" id="nestable2">
													<?php $form = ActiveForm::begin(['class' => "menuitem-form"]); ?>
													<ol class="dd-list">
														<?= MenuItem::getMenuItem($menu->id); ?>
													</ol>
													<div class="form-group">
														<button type="submit" class="btn btn-success btn-save"><?= Translate::save(); ?></button>
													</div>
													<?php ActiveForm::end(); ?>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<script>
	$('#nestable2').nestable({
		group: 1
	}).on('change', function () {
		$(".dd-item.dd3-item").each(function () {
			var parent = ($(this).closest('ol')).parent().attr('data-id');
			var parent_id = 0;
			if (typeof parent != "undefined" && parent != '') {
				parent_id = ($(this).closest('ol')).parent().attr('data-id');
			} else {
				parent_id = 0;
			}
			$(this).find('.parent-menu').val(parent_id);
		});
	});
	$('.icp-dd').iconpicker({
		searchInFooter: true
	});
	$('.icp').on('iconpickerSelected', function (e) {
		$('.lead .picker-target').get(0).className = 'picker-target fa-3x ' +
			e.iconpickerInstance.options.iconBaseClass + ' ' +
			$(this).closest('.dd-item').find('.icon-menu').val(e.iconpickerValue);
	});
	$('.menu-status').on('switchChange.bootstrapSwitch', function (event, state) {
		var status;
		if (state == true) {
			status = 1;
		} else {
			status = 0
		}
		$(this).val(status);
	});
</script>