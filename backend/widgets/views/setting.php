<?php
use backend\widgets\Setting;
use navatech\language\Translate;
use yii\helpers\Url;

?>
<!-- START SECONDARY SIDEBAR MENU-->
<nav class="secondary-sidebar padding-30">
	<p class="menu-title"><?= Translate::setting()?></p>
	<ul class="main-menu">
		<?php foreach($settings as $key => $setting):?>
		<li class="<?= Setting::isActive('setting',$setting->code)?>">
			<a href="<?= Url::to(['/setting/'.$setting->code])?>">
				<span class="title"><i class="fa fa-cog"></i><?= $setting->name.' '.Translate::setting(); ?> </span>
			</a>
		</li>
		<?php endforeach;?>
		<li class="<?= Setting::isActive('email-template','setting')?>">
			<a href="<?= Url::to(['/email-template/setting'])?>">
				<span class="title"><i class="fa fa-envelope"></i> <?= Translate::x_setting('Email Template');?></span>
			</a>
		</li>
		<li class="<?= Setting::isActive('menu','setting')?>">
			<a href="<?= Url::to(['/menu/setting'])?>">
				<span class="title"><i class="fa fa-fw fa-list-alt"></i> <?= Translate::x_setting('Menu');?></span>
			</a>
		</li>
		<li class="<?= Setting::isActive('language','index')?>">
			<a href="<?= Url::to(['/language/index'])?>">
				<span class="title"><i class="fa fa-language"></i> <?= Translate::x_setting(Translate::language());?></span>
			</a>
		</li>
		<li class="<?= Setting::isActive('language','phrase')?>">
			<a href="<?= Url::to(['/language/phrase'])?>">
				<span class="title"><i class="fa fa-globe"></i> <?= Translate::x_setting(Translate::translate());?></span>
			</a>
		</li>
	</ul>
</nav>
<!-- END SECONDARY SIDEBAR MENU -->