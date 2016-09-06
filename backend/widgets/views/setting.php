<?php
use navatech\language\Translate;
use yii\helpers\Url;

?>
<!-- START SECONDARY SIDEBAR MENU-->
<nav class="secondary-sidebar padding-30">
	<p class="menu-title">Setting</p>
	<ul class="main-menu">
		<?php foreach($settings as $key => $setting):?>
		<li class="<?= ($key == 0)?'active':''?>">
			<a href="<?= Url::to(['/setting/'.$setting->name])?>">
				<span class="title"><i class="fa fa-info-circle"></i><?= $setting->name.' '.Translate::setting(); ?> </span>
			</a>
		</li>
		<?php endforeach;?>
		<li class="">
			<a href="#">
				<span class="title"><i class="fa fa-fw fa-list-alt"></i> <?= Translate::x_setting(Translate::menu());?></span>
			</a>
		</li>
		<li class="">
			<a href="#">
				<span class="title"><i class="fa fa-globe"></i> <?= Translate::x_setting(Translate::translate());?></span>
			</a>
		</li>
		<li class="">
			<a href="#">
				<span class="title"><i class="fa fa-envelope"></i> <?= Translate::x_setting(Translate::email());?></span>
			</a>
		</li>
		<li class="">
			<a href="#">
				<span class="title"><i class="fa fa-envelope-o"></i> <?= Translate::x_setting(Translate::email_template());?></span>
			</a>
		</li>
	</ul>
</nav>
<!-- END SECONDARY SIDEBAR MENU -->