<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use backend\widgets\NavBar;
use backend\widgets\Setting;
use backend\widgets\Sidebar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

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
<body class="fixed-header dashboard  windows desktop pace-done sidebar-visible menu-pin">
<?php $this->beginBody() ?>
<?= Sidebar::widget() ?>
<!-- START PAGE-CONTAINER -->
<div class="page-container ">
    <?= NavBar::widget() ?>
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">
        <div class="content full-height">
            <?= Setting::widget() ?>
            <div class="inner-content full-height">
                <?= $content ?>
            </div>
            <!-- END APP -->
        </div>
    <div
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

