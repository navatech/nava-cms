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
use yii\bootstrap\ActiveForm;

?>
<?php Yii::$app->layout = 'setting'; ?>
<div class="panel panel-transparent ">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
		<?php foreach($model as $key => $menu): ?>
			<li class="<?= ($key == 0) ? 'active' : '' ?>">
				<a data-toggle="tab" href="#menu-<?= $menu->id ?>"><span><?= $menu->name ?></span></a>
			</li>
		<?php endforeach; ?>
	</ul>
	<div class="tab-content">
		<?php foreach($model as $key => $menu): ?>
			<div class="tab-pane slide-left <?= ($key == 0) ? 'active' : '' ?>" id="menu-<?= $menu->id ?>">
				<div class="row column-seperation">
					<div class="col-sm-12">
						<div class="cf ">
							<div class="row">
								<div class="col-sm-12">
									<code id="nestable-output"></code> <code id="nestable2-output"></code>
										<div class="dd" id="nestable">
										</div>
										<div class="dd" id="nestable2">
											<ol class="dd-list">
												<?php
												foreach($menu->menuItem as $menu_item):
													?>
													<li class="dd-item dd3-item" data-id="<?= $menu_item->id ?>" data-icon="<?= $menu_item->icon ?>" data-url="<?= $menu_item->url ?>" data-level="<?= $menu_item->level ?>" data-parent_id="<?= $menu_item->parent_id ?>" data-sort_order="<?= $menu_item->sort_order ?>" data-status="<?= $menu_item->status ?>">
														<div class="dd-handle dd3-handle"></div>
														<div class="dd3-content">
															<div class="col-sm-3">
																<div class="btn-group">
																	<button type="button" class="btn btn-primary iconpicker-component">
																		<i class="<?= $menu_item->icon ?>"></i></button>
																	<button type="button" class="icp icp-dd btn btn-primary dropdown-toggle" data-selected="fa-car" data-toggle="dropdown">
																		<span class="caret"></span>
																		<span class="sr-only">Toggle Dropdown</span>
																	</button>
																	<div class="dropdown-menu"></div>
																</div>
															</div>
															<div class="col-sm-6">
																<?= $menu_item->name ?>
															</div>
															<div class="col-sm-3">
																<?= SwitchInput::widget(['name'=>'status', 'value'=>true]); ?>
															</div>
														</div>
													</li>

												<?php endforeach; ?>
											</ol>
										</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<script>
	var updateOutput = function(e) {
		var list = e.length ? e : $(e.target),
		    output = list.data('output');
		if (window.JSON) {
			output.html(window.JSON.stringify(list.nestable('serialize')));
		} else {
			output.html('JSON browser support required for this demo.');
		}
	};
	$('#basic_example').nestable();
	$('#drag_handler_example').nestable();
	// activate Nestable for list 1
	$('#nestable').nestable({
		group: 1
	})
		.on('change', updateOutput);

	// activate Nestable for list 2
	$('#nestable2').nestable({
		group: 1,
		dragStop: function(e) {
			var list = this;
			var el = this.dragEl.children(this.options.itemNodeName).first();
			el[0].parentNode.removeChild(el[0]);
			this.placeEl.replaceWith(el);

			this.dragEl.remove();

			var $parents = $(el[0]).parents('.' + list.options.itemClass);
			var $parent = null;
			if ($parents.length > 0) $parent = $parents[0];
			list.options.onDragFinished(el[0], $parent);
			this.el.trigger('change');
			if (this.hasNewRoot) {
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

	// output initial serialised data
	updateOutput($('#nestable').data('output', $('#nestable-output')));
	updateOutput($('#nestable2').data('output', $('#nestable2-output')));

	$('#nestable-menu').on('click', function(e) {
		var target = $(e.target),
		    action = target.data('action');
		if (action === 'expand-all') {
			$('.dd').nestable('expandAll');
		}
		if (action === 'collapse-all') {
			$('.dd').nestable('collapseAll');
		}
	});



</script>
