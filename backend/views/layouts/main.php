<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use backend\widgets\NavBar;
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
        <div class="content sm-gutter">
            <div class="container-fluid padding-25 sm-padding-10">
                 <?= $content ?>
            </div>
        </div>
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg footer">
            <div class="copyright sm-text-center">
                <p class="small no-margin pull-left sm-pull-reset">
                    <span class="hint-text">Copyright &copy; <?= date("Y")?> </span>
                    <span class="font-montserrat">NavaTech</span>.
                    <span class="hint-text">All rights reserved. </span>
                </p>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- END COPYRIGHT -->
    </div>
    <!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
