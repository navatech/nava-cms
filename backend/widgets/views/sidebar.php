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
			<button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar">
				<i class="fa fa-angle-right "></i>
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

<script>
	$(document).ready(function() {
		if($('body').hasClass('config-page')){
			$('.sidebar-menu a').each(function() {
				if($(this).attr('href') == '/backend/site/setting'){
					$(this).parent().addClass('active');
				}
			})
		}
		$('.sidebar-menu .sub-menu li.active').parent().closest('li').addClass('active');
	})
	$(document).on('click', '.sidebar-menu a', function(e) {
		if ($(this).parent().children('.sub-menu') === false) {
			return;
		}
		var el = $(this);
		var parent = $(this).parent().parent();
		var li = $(this).parent();
		var sub = $(this).parent().children('.sub-menu');

		if(li.hasClass("open active")){
			el.children('.arrow').removeClass("open active");
			sub.slideUp(200, function() {
				li.removeClass("open active");
			});

		}else{
			parent.children('li.open').children('.sub-menu').slideUp(200);
			parent.children('li.open').children('a').children('.arrow').removeClass('open active');
			parent.children('li.open').removeClass("open active");
			el.children('.arrow').addClass("open active");
			sub.slideDown(200, function() {
				li.addClass("open active");

			});
		}
		//e.preventDefault();
	});

</script>