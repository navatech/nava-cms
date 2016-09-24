<?php
/**
 * @var array $menu_items
 */
use navatech\language\widgets\LanguageWidget;
use yii\widgets\Menu;

?>
<nav class="page-sidebar" data-pages="sidebar">
	<div class="sidebar-header">
		<a href="<?= Yii::$app->request->baseUrl; ?>">
			<img src="<?= Yii::$app->request->baseUrl; ?>/img/logo_white.png" alt="logo" class="brand" width="78" height="22">
		</a>
		<div class="sidebar-header-controls">
			<button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
			</button>
		</div>
	</div>
	<div class="sidebar-menu">
		<?= Menu::widget([
			'options'           => [
				'class' => 'menu-items',
			],
			'firstItemCssClass' => 'm-t-30',
			'items'             => $menu_items,
			'submenuTemplate' => "\n<ul class='sub-menu'>\n{items}\n</ul>\n",
		]) ?>
		<div class="clearfix"></div>
	</div>
</nav>