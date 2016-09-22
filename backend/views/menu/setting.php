<?php
/**
 * Created by Navatech.
 * @project yii2-cms
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    9/7/2016
 * @time    5:03 PM
 */
use common\models\MenuItem;
use kartik\widgets\SwitchInput;
use navatech\language\Translate;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

?>
<?php Yii::$app->layout = 'setting'; ?>
<div class="panel panel-transparent ">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
		<?php foreach($model as $key => $menu): ?>
			<?php if(!empty($menu->menuItem)): ?>
				<li class="<?= ($key == 0) ? 'active' : '' ?>">
					<a data-toggle="tab" href="#menu-<?= $menu->id ?>"><span><?= $menu->name ?></span></a>
				</li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>
	<div class="tab-content">
		<?php foreach($model as $key => $menu): ?>
			<?php if(!empty($menu->menuItem)): ?>
				<div class="tab-pane slide-left <?= ($key == 0) ? 'active' : '' ?>" id="menu-<?= $menu->id ?>">
					<div class="row column-seperation">
						<div class="col-sm-12">
							<div class="cf ">
								<div class="row">
									<div class="col-sm-12">
										<div class="dd" id="nestable2">
											<form class="menuitem-form" action="<?= Url::to(['/menu/setting'])?>" method="post">
												<ol class="dd-list">
													<?= MenuItem::getMenuItem($menu->id);?>
												</ol>
												<div class="form-group">
													<button type="submit" class="btn btn-success btn-save"><?= Translate::save(); ?></button>
												</div>
											</form>
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
	<script>
		$('#nestable2').nestable({
			maxDepth : 3,
			group   : 1,
		});

		$('#nestable2').on('change', function(e) {
			$( ".dd-item.dd3-item" ).each(function( index ) {
				var parent_id = 0;
				if(($(this).closest('ol')).parent().attr('data-id') != ''){
					parent_id = ($(this).closest('ol')).parent().attr('data-id');
				}

				$(this).find('.parent-menu').val(parent_id);
			});

		});

		$('.icp-dd').iconpicker({
			searchInFooter: true,
		});
		$('.icp').on('iconpickerSelected', function(e) {
			$('.lead .picker-target').get(0).className = 'picker-target fa-3x ' +
				e.iconpickerInstance.options.iconBaseClass + ' ' +
				//e.iconpickerInstance.options.fullClassFormatter(e.iconpickerValue);
				$(this).closest('.dd-item').find('.icon-menu').val(e.iconpickerValue);
		});

		$(document).on('click', '.btn-save', function() {
			$.ajax({
				type   : 'POST',
				cache  : false,
				url    : '<?= Url::to(['/menu/setting'])?>',
				data   : $('.menuitem-form').serializeArray(),
				success: function(response) {
					location.reload();
				}
			});
			return false;
		});

		$('.menu-status').on('switchChange.bootstrapSwitch', function(event, state) {
			if(state == true) {
				status = 1;
			} else {
				status = 0
			}
			$(this).val(status);
		});

	</script>