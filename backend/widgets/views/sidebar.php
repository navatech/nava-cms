<?php
use backend\widgets\Sidebar;
use yii\helpers\Url;
?>
<!-- BEGIN SIDEBPANEL-->
<nav class="page-sidebar" data-pages="sidebar">
	<!-- BEGIN SIDEBAR MENU HEADER-->
	<div class="sidebar-header">
		<a href="<?= Yii::$app->request->BaseUrl;?>">
			<img src="<?= Yii::$app->request->BaseUrl ;?>/img/logo_white.png" alt="logo" class="brand"  width="78" height="22">
		</a>

		<div class="sidebar-header-controls">
			<button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
			</button>
		</div>
	</div>
	<!-- END SIDEBAR MENU HEADER-->
	<!-- START SIDEBAR MENU -->
	<div class="sidebar-menu">
		<!-- BEGIN SIDEBAR MENU ITEMS-->
		<ul class="menu-items">
			<?php foreach($menu_items as $key=>$menu_item):?>
				<li class="<?= ($key==0)?'m-t-30':''?> ">
					<a href="<?= Url::to(['/'.$menu_item->url]);?>" class="detailed">
						<span class="title"><?= $menu_item->name?></span>
						<!--<span class="details">12 New Updates</span>-->
					</a>
					<span class=" <?= Sidebar::isActive(substr($menu_item->url,0,strpos($menu_item->url, '/')),str_replace('/','',substr($menu_item->url,strpos($menu_item->url, '/'))),null,'bg-success') ?> icon-thumbnail"><i class="<?= 'fa fa-'.$menu_item->icon?>"></i></span>
				</li>
			<?php endforeach;?>
		</ul>
		<div class="clearfix"></div>
	</div>
	<!-- END SIDEBAR MENU -->
</nav>
<!-- END SIDEBAR -->
<!-- END SIDEBPANEL-->