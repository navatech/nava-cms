<?php
/**
 * Created by Navatech.
 * @project yii2-cms
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    9/7/2016
 * @time    5:03 PM
 */
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
										<input type="hidden" name="menujson" id="nestable2-output">
										<div class="dd" id="nestable">
										</div>
										<div class="dd" id="nestable2">
											<form class="menuitem-form">
												<ol class="dd-list">
													<?php
													foreach($menu->menuItem as $menu_item):
													?>
														<li class="dd-item dd3-item" data-id="<?= $menu_item->id ?>" data-icon="<?= $menu_item->icon ?>" data-status="<?= $menu_item->status ?>">
															<div class="dd-handle dd3-handle"></div>
															<div class="dd3-content">
																<div class="col-sm-3">
																	<div class="btn-group">
																		<button type="button" class="btn btn-primary iconpicker-component">
																			<i class=" fa fa-<?= $menu_item->icon ?>"></i>
																		</button>
																		<button type="button" class="icp icp-dd btn btn-primary dropdown-toggle" data-selected="fa-car" data-toggle="dropdown">
																			<span class="caret"></span>
																			<span class="sr-only">Toggle Dropdown</span>
																		</button>
																		<div class="dropdown-menu iconpicker-container"></div>
																	</div>
																</div>
																<div class="col-sm-6">
																	<?= $menu_item->name ?>
																</div>
																<div class="col-sm-3">
																	<input type="hidden" name="MenuItem[<?= $menu_item->id ?>][id]" value="<?=$menu_item->id?>">
																	<input type="hidden" name="MenuItem[<?= $menu_item->id ?>][parent_id]" value="<?=$menu_item->parent_id?>">
																	<input type="hidden" name="MenuItem[<?= $menu_item->id ?>][icon]" value="<?=$menu_item->icon?>" class="icon-menu">
																	<?=  SwitchInput::widget([
																		'name'=>'MenuItem['.$menu_item->id.'][status]',
																		'inlineLabel' => false,
																		'options'=>[
																			'class'=>'menu-status',
																		],
																		'value'=>$menu_item->status,
																	]);?>
																</div>
															</div>
														</li>
													<?php endforeach; ?>
												</ol>
											</form>
										</div>
									</div>

								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success btn-save"><?= Translate::save(); ?></button>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
	<script>
		var updateOutput = function(e) {
			var list   = e.length ? e : $(e.target),
			    output = list.data('output');
			if(window.JSON) {
				output.html(window.JSON.stringify(list.nestable('serialize')));
			} else {
				output.html('JSON browser support required for this demo.');
			}
		};
		$('#nestable2').nestable({
			group   : 1,
			dragStop: function(e) {
				var list = this;
				var el   = this.dragEl.children(this.options.itemNodeName).first();
				el[0].parentNode.removeChild(el[0]);
				this.placeEl.replaceWith(el);
				this.dragEl.remove();
				var $parents = $(el[0]).parents('.' + list.options.itemClass);
				var $parent  = null;
				if($parents.length > 0) {
					$parent = $parents[0];
				}
				list.options.onDragFinished(el[0], $parent);
				this.el.trigger('change');
				if(this.hasNewRoot) {
					this.dragRootEl.trigger('change');
				}
				this.reset();

			},
		})
			.on('change', updateOutput).on('_mouseStop', function(event, noPropagation) {
			$.ui.sortable.prototype._mouseStop.apply(this, arguments);
			var ret = this.serialize({startDepthCount: 0});
			console.log(ret);
		});

		updateOutput($('#nestable2').data('output', $('#nestable2-output')));

		$('.icp-dd').each(function() {
			var $this = $(this);
			$('.icp-dd').iconpicker({
				container: $this.next()
			});
		});

		$('.icp').on('iconpickerSelected', function(e) {
			$(this).parent().find('.iconpicker-component').html($('.iconpicker-selected').html());
			$(this).closest('.dd-item').attr('data-icon', e.iconpickerValue);
			$('#menuitem-icon').val(e.iconpickerValue);
			$(this).closest('.dd-item').find('.icon-menu').val(e.iconpickerValue);
			updateOutput($('#nestable2').data('output', $('#nestable2-output')));
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
			if(state == true){
				status = 1;
			}else{
				status = 0
			}
			$(this).val(status);
		});

	</script>
