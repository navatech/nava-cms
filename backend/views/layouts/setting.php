<?php
/* @var $this \yii\web\View */
/* @var $content string */
use backend\assets\AppAsset;
use backend\widgets\NavBar;
use backend\widgets\Setting;
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
	<?php $this->head() ?>
</head>
<body class="fixed-header dashboard  windows desktop pace-done sidebar-visible menu-pin config-page">
<?php $this->beginBody() ?>
<?= Sidebar::widget() ?>
<div class="page-container ">
	<?= NavBar::widget() ?>
	<div class="page-content-wrapper ">
		<div class="content full-height">
			<?= Setting::widget() ?>
			<div class="inner-content full-height setting-configure">
				<?= $content ?>
			</div>
		</div>
		<div
	</div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

