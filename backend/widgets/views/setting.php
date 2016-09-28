<?php
/**
 * @var array $settingItems
 */
use navatech\language\Translate;
use navatech\role\helpers\RoleChecker;
use yii\widgets\Menu;

?>
<nav class="secondary-sidebar padding-30">
	<p class="menu-title"><?= Translate::setting() ?></p>
	<?= Menu::widget([
		'options' => [
			'class' => 'main-menu',
		],
		'items'   => \yii\helpers\ArrayHelper::merge($settingItems, [
			[
				'label'  => '<i class="fa fa-envelope"></i> ' . Translate::x_setting('Email Template'),
				'url'    => ['/email-template/setting'],
				'encode' => false,
			],
			[
				'label'  => '<i class="fa fa-fw fa-list-alt"></i> ' . Translate::x_setting('Menu'),
				'url'    => ['/menu/setting'],
				'encode' => false,
			],
			[
				'label'  => '<i class="fa fa-language"></i> ' . Translate::x_setting(Translate::language()),
				'url'    => ['/language/index/list'],
				'encode' => false,
			],
			[
				'label'  => '<i class="fa fa-globe"></i> ' . Translate::x_setting(Translate::translate()),
				'url'    => ['/language/phrase/index'],
				'encode' => false,
			],
            [
                'label'  => '<i class="fa fa-info-circle"></i> ' . Translate::about(),
                'url'    => ['/site/about'],
                'encode' => false,
            ],
		]),
	]) ?>
</nav>
