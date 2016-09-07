<?php
/**
 * Created by Navatech.
 * @project yii2-cms
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    9/7/2016
 * @time    5:03 PM
 */
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
								<div class="col-sm-8">
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
																<button type="button" class="btn btn-primary">
																	<i class="<?= $menu_item->icon ?>"></i>
																</button>
																<button type="button" class="icp icp-dd btn btn-primary dropdown-toggle" data-toggle="dropdown">
																	<span class="caret"></span>
																	<span class="sr-only">Toggle Dropdown</span>
																</button>
																<div class="dropdown-menu"></div>
															</div>
														</div>
														<div class="col-sm-6">
															<?= $menu_item->name ?>
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
			</div>
		<?php endforeach; ?>
	</div>
</div>

