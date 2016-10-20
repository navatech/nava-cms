<?php
/**
 * @var array $menu_items
 */
use yii\helpers\Url;
use yii\widgets\Menu;

?>
<div class="header">
	<div class="container">
		<div class="header-wrap">
			<div class="row">
				<div class="col-sm-3 logo">
					<a href="<?= Url::to(['site/index'])?>">
						<img class="img-responsive" src="/images/logo.png">
					</a>
				</div>
				<div class="col-sm-6 main-menu">
					<ul>
						<li>
							<a href="#">Trang Chủ</a>
						</li>
						<li>
							<a href="#">Giới Thiệu</a>
						</li>
						<li>
							<a href="#">Liên Hệ</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-3 social-header">
					<ul class="pull-right">
						<li class="facebook">
							<a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li class="google-plus">
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</li>
						<li class="youtube">
							<a href="#"><i class="fa fa-youtube"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>
<!--<div class="slider">
	<ul class="bxslider">
		<li><img src="/images/1.jpg" /></li>
		<li><img src="/images/2.jpg" /></li>
		<li><img src="/images/3.jpg" /></li>
	</ul>
</div>-->