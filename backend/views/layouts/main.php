<?php
/* @var $this \yii\web\View */
/* @var $content string */
use backend\assets\AppAsset;
use backend\widgets\NavBar;
use backend\widgets\Sidebar;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<link rel="icon" href="<?= Yii::$app->setting->get('general_favicon') ?>">
	<?php $this->head() ?>
</head>
<body class="fixed-header dashboard  windows desktop pace-done sidebar-visible menu-pin">
<?php $this->beginBody() ?>
<?= Sidebar::widget() ?>
<div class="page-container ">
	<?= NavBar::widget() ?>
	<div class="page-content-wrapper ">
		<div class="content sm-gutter">
			<div class="container-fluid padding-25 sm-padding-10">
				<?= $content ?>
			</div>
		</div>
		<div class="container-fluid container-fixed-lg footer">
			<div class="copyright sm-text-center">
				<p class="small no-margin pull-left sm-pull-reset">
					<span class="hint-text">Copyright &copy; <?= date("Y") ?> </span>
					<span class="font-montserrat">NavaTech</span>.
					<span class="hint-text">All rights reserved. </span>
				</p>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
