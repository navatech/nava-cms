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
<div class="quickview-wrapper  builder hidden-sm hidden-xs" id="builder">
    <div class="p-l-30 p-r-30 ">
        <a class="builder-close quickview-toggle pg-close" data-toggle="quickview" data-toggle-element="#builder" href="#"></a>
        <a class="builder-toggle" data-toggle="quickview" data-toggle-element="#builder"><i class="pg pg-theme"></i></a>
        <ul class="nav nav-tabs nav-tabs-simple nav-tabs-primary m-t-10">
            <li class="active">
                <a data-toggle="tab" href="#tabLayouts">Layouts</a>
            </li>
            <li>
                <a data-toggle="tab" href="#tabThemes">Colors</a>
            </li>
            <li>
                <a data-toggle="tab" href="#tabContent">Content</a>
            </li>
        </ul>
        <div class="tab-content m-b-30 p-l-30">
            <div class="tab-pane active " id="tabLayouts">
                <div class="scrollable">
                    <div class="p-l-10 p-r-50">
                        <h5 class="semi-bold">
                            Layout options
                        </h5>
                        <p class="no-margin">
                            Builder make it easier
                        </p>
                        <p class="small hint-text m-b-20">
                            Customize and Preview your dashboard.
                        </p>
                        <div class="row p-b-35">
                            <div class="col-xs-6 ">
                                <a class="btn-toggle-layout fs-12 active " data-action="menuDefault" href="#"><img alt="Menu divided icon" class="m-b-15" src="/backend/img/demo/menu_divided_con.png" data-src="/backend/img/demo/menu_divided_con.png" data-src-retina="/backend/img/demo/menu_divided_con_2x.png" width="126" height="95">
                                    <span class="text-dark m-t-5">Divided Header & Condensed / Quick
            Menu</span></a>
                            </div>
                            <div class="col-xs-6">
                                <a class="btn-toggle-layout fs-12" data-action="menuBelow" href="#">
                                    <img alt="Full header icon" class="m-b-15 " src="/backend/img/demo/full_header_con.png" data-src-retina="/backend/img/demo/full_header_con_2x.png" width="126" height="95"> <span class="text-dark m-t-5">Full Width Header & Condensed/ Quick
            Menu</span></a>
                            </div>
                        </div>
                        <div class="row p-b-10 ">
                            <div class="col-xs-6">
                                <a class="btn-toggle-layout fs-12" data-action="menuPinned" href="#">
                                    <img alt="Menu divided" class="m-b-15" src="/backend/img/demo/menu_divided.png" data-src="/backend/img/demo/menu_divided.png" data-src-retina="/backend/img/demo/menu_divided_2x.png" width="126" height="95"> <span class="text-dark m-t-5">Divided Header & Fixed/Pinned Menu</span></a>
                            </div>
                            <div class="col-xs-6">
                                <a class="btn-toggle-layout fs-12" data-action="menuPinnedBelow" href="#"><img alt="Full header" class="m-b-15" src="/backend/img/demo/full_header.png" data-src="/backend/img/demo/full_header.png" data-src-retina="/backend/img/demo/full_header_2x.png" width="126" height="95">
                                    <span class="text-dark m-t-5">Full Width Header & Fixed/Pinned
            Menu</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane " id="tabThemes">
                <div class="scrollable">
                    <div class="p-l-10 p-r-50">
                        <h5 class="semi-bold">
                            Color Options
                        </h5>
                        <p class=" hint-text no-margin">
                            Color makes it different
                        </p>
                        <p class="small hint-text m-b-20">
                            Customize and Preview your dashboard.
                        </p>
                        <a href="#" class="btn-toggle-theme b-a b-grey active theme-selector m-b-30" data-action="default">
                            <img alt="Theme default" src="/backend/img/demo/theme_default.png" class="image-responsive-height">
                            <div class="p-l-15 p-r-20 p-b-10 p-t-10">
                                <p class="no-margin">
                                    <span class="block font-montserrat text-uppercase fs-12 bold">Default</span>
                                    <span class="fs-11">pages default color palette</span>
                                </p>
                            </div>
                        </a>
                        <a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="corporate">
                            <img alt="Theme corporate" src="/backend/img/demo/theme_corporate.png" class="image-responsive-height">
                            <div class="p-l-15 p-r-20 p-b-10 p-t-10">
                                <p class="no-margin">
                                    <span class="block font-montserrat text-uppercase fs-12 bold">Corporate</span>
                                    <span class="fs-11">give your an a profesional look</span>
                                </p>
                            </div>
                        </a>
                        <a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="retro">
                            <img alt="Theme retro" src="/backend/img/demo/theme_retro.png" class="image-responsive-height">
                            <div class="p-l-15 p-r-20 p-b-10 p-t-10">
                                <p class="no-margin">
                                    <span class="block font-montserrat text-uppercase fs-12 bold">Retro</span>
                                    <span class="fs-11">calm color palette</span>
                                </p>
                            </div>
                        </a>
                        <a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="unlax">
                            <img alt="Theme unlax" src="/backend/img/demo/theme_unlax.png" class="image-responsive-height">
                            <div class="p-l-15 p-r-20 p-b-10 p-t-10">
                                <p class="no-margin">
                                    <span class="block font-montserrat text-uppercase fs-12 bold">Unlax</span>
                                    <span class="fs-11">calm color palette</span>
                                </p>
                            </div>
                        </a>
                        <a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="vibes">
                            <img alt="Thmeme vibes" src="/backend/img/demo/theme_vibes.png" class="image-responsive-height">
                            <div class="p-l-15 p-r-20 p-b-10 p-t-10">
                                <p class="no-margin">
                                    <span class="block font-montserrat text-uppercase fs-12 bold">Vibes</span>
                                    <span class="fs-11">calm color palette</span>
                                </p>
                            </div>
                        </a>
                        <a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="abstract">
                            <img alt="Theme abstract" src="/backend/img/demo/theme_abstract.png" class="image-responsive-height">
                            <div class="p-l-15 p-r-20 p-b-10 p-t-10">
                                <p class="no-margin">
                                    <span class="block font-montserrat text-uppercase fs-12 bold">Abstract</span>
                                    <span class="fs-11">calm color palette</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tab-pane " id="tabContent">
                <div class="scrollable">
                    <div class="p-l-10 p-r-50">
                        <h5 class="semi-bold">
                            Content
                        </h5>
                        <p class=" hint-text no-margin">
                            Builder make it easier
                        </p>
                        <p class="small hint-text m-b-20">
                            Customize and Preview your dashboard.
                        </p>
                        <ul class="p-b-50">
                            <li class="full-width m-b-30">
                                <a class="btn-toggle-content content-select active" data-action="plainContent" href="#">
                                    <img alt="Blank" class="m-b-10 image-responsive-height" src="/backend/img/demo/blank.svg"> Plain
                                </a>
                            </li>
                            <li class="full-width m-b-30">
                                <a class="btn-toggle-content content-select" data-action="parallaxCoverpage" href="#">
                                    <img alt="Parallax cover" class="m-b-10 image-responsive-height" src="/backend/img/demo/paralax_cover.gif"> Coverpage with parallax</a>
                            </li>
                            <li class="full-width m-b-30">
                                <a class="btn-toggle-content content-select" data-action="fullheightParallax" href="#">
                                    <img alt="Parallax full" class="m-b-10 image-responsive-height" src="/backend/img/demo/paralax_full.gif"> Full height coverpage with parallax</a>
                            </li>
                            <li class="full-width m-b-30">
                                <a class="btn-toggle-content content-select" data-action="titleParallax" href="#">
                                    <img alt="Parallax title" class="m-b-10 image-responsive-height" src="/backend/img/demo/paralax_title.gif"> Page title parallax
                                </a>
                            </li>
                            <li class="full-width m-b-30">
                                <a class="btn-toggle-content content-select" data-action="columns-3-9" href="#">
                                    <img alt="3_9" class="m-b-10 image-responsive-height" src="/backend/img/demo/3_9.svg"> Column view (3 : 9)</a>
                            </li>
                            <li class="full-width m-b-30">
                                <a class="btn-toggle-content content-select" data-action="columns-9-3" href="#">
                                    <img alt="9_3" class="m-b-10 image-responsive-height" src="/backend/img/demo/9_3.svg"> Column view (9 : 3)</a>
                            </li>
                            <li class="full-width m-b-30">
                                <a class="btn-toggle-content content-select" data-action="columns-6-6" href="#">
                                    <img alt="6_6" class="m-b-10 image-responsive-height" src="/backend/img/demo/6_6.svg"> Column view (6 : 6)</a>
                            </li>
                            <li class="full-width m-b-30">
                                <a class="btn-toggle-content content-select" data-action="horizontal-menu" href="#">
                                    <img alt="6_6" class="m-b-10 image-responsive-height" src="/backend/img/demo/6_6.svg"> Horizontal Menu
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="pull-bottom p-b-15 p-l-15 p-r-15 b-t b-grey p-t-15 m-l-15 m-r-15 bg-white builder-footer">
            <div class="pull-left">
                <span class="font-arial fs-12 hint-text">Toggle</span>
                <span class="inline-block font-montserrat fs-12 bold">RTL</span>
                <input id="rtl-switch" class="inline-block" type="checkbox" data-size="small" data-init-plugin="switchery" />
            </div>
            <div class="pull-right">
                <form action="http://104.197.142.33/builder_process.php" method="POST" id="exportForm">
                    <input type="hidden" name="layout" id="layout" value="1">
                    <input type="hidden" name="colors" id="colors" value="1">
                    <input type="hidden" name="content" id="content" value="1">
                    <button id="btnExport" class="btn btn-cons btn-primary">Export</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

