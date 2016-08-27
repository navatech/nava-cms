<?php
/**
 * Created by Navatech.
 * @project yii2-cms
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    6/21/2016
 * @time    10:39 AM
 */
use app\assets\LoginAsset;
use navatech\language\Translate;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

LoginAsset::register($this);
Yii::$app->layout = false;
?>
<?php $this->beginPage() ?>
<?php
$this->params['breadcrumbs'][] = $this->title; ?>
	<!DOCTYPE html>
	<html lang="<?= Yii::$app->language ?>">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta charset="<?= Yii::$app->charset ?>"/>
		<?= Html::csrfMetaTags() ?>
		<title><?= Html::encode($this->title) ?></title>
		<meta name="description" content="User login page"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
		<?php $this->head() ?>
	</head>

	<body class="fixed-header">
	<?php $this->beginBody() ?>

	<div class="login-wrapper ">
		<!-- START Login Background Pic Wrapper-->
		<div class="bg-pic">
			<!-- START Background Pic-->
			<img src="<?= Yii::$app->request->BaseUrl ;?>/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg"  alt="" class="lazy">
			<!-- END Background Pic-->
			<!-- START Background Caption-->
			<div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
				<h2 class="semi-bold text-white">
					Pages make it easy to enjoy what matters the most in the life</h2>
				<p class="small">
					images Displayed are solely for representation purposes only, All work copyright of respective owner, otherwise &copy; <?= date('Y') ?> Navatech
				</p>
			</div>
			<!-- END Background Caption-->
		</div>
		<!-- END Login Background Pic Wrapper-->
		<!-- START Login Right Container-->
		<div class="login-container bg-white">
			<div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
				<img src="<?= Yii::$app->request->BaseUrl ;?>/img/logo.png" width="78" height="22">
				<p class="p-t-35">Sign into your pages account</p>
				<!-- START Login Form -->
				<?php $form = ActiveForm::begin([
					'id'                     => 'login-form',
					'enableAjaxValidation'   => true,
					'enableClientValidation' => false,
					'validateOnBlur'         => false,
					'validateOnType'         => false,
					'validateOnChange'       => false,
				]) ?>
				<!-- START Form Control-->
				<div class="form-group form-group-default">
					<label>Login</label>
					<div class="controls">
						<?= $form->field($model, 'login', [
							'labelOptions' => ['class' => 'block clearfix'],
							'template' => '{beginLabel}{input}{endLabel}'
						])->textInput([
							'autofocus'   => 'autofocus',
							'class'       => 'form-control',
							'placeholder' => Translate::username(),
						]) ?>
					</div>
				</div>
				<!-- END Form Control-->
				<!-- START Form Control-->
				<div class="form-group form-group-default">
					<label>Password</label>
					<div class="controls">
						<?= $form->field($model, 'password', [
							'labelOptions' => ['class' => 'block clearfix'],
							'template' => '{beginLabel} {input} {endLabel}'
						])->passwordInput([
							'autofocus'   => 'autofocus',
							'class'       => 'form-control',
							'placeholder' => Translate::password(),
						]) ?>
					</div>
				</div>
				<!-- START Form Control-->
				<div class="row">
					<div class="col-md-6 no-padding">
						<div class="checkbox ">
							<?= $form->field($model, 'rememberMe',
								[
									'labelOptions' => ['class' => 'inline'],
									'template' => '{beginLabel} Remember Me{endLabel}{input}'
								]
							)->checkbox(['tabindex' => '4']) ?>
						</div>

					</div>
					<div class="col-md-6 text-right">
						<a href="#" class="text-info small">Help? Contact Support</a>
					</div>
				</div>
				<!-- END Form Control-->
				<button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</button>
				<?php ActiveForm::end(); ?>
				<!--END Login Form-->
				<div class="pull-bottom sm-pull-bottom">
					<div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
						<div class="col-sm-3 col-md-2 no-padding">
							<img alt="" class="m-t-5" data-src="assets/img/demo/pages_icon.png" data-src-retina="assets/img/demo/pages_icon_2x.png" height="60" src="assets/img/demo/pages_icon.png" width="60">
						</div>
						<div class="col-sm-9 no-padding m-t-10">
							<p>
								<small>
									Create a pages account. If you have a facebook account, log into it for this
									process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a>
								</small>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END Login Right Container-->
	</div>
	<!-- START OVERLAY -->
	<div class="overlay hide" data-pages="search">
		<!-- BEGIN Overlay Content !-->
		<div class="overlay-content has-results m-t-20">
			<!-- BEGIN Overlay Header !-->
			<div class="container-fluid">
				<!-- BEGIN Overlay Logo !-->
				<img class="overlay-brand" src="<?= Yii::$app->request->BaseUrl ;?>/img/logo.png" alt="logo"  width="78" height="22">
				<!-- END Overlay Logo !-->
				<!-- BEGIN Overlay Close !-->
				<a href="#" class="close-icon-light overlay-close text-black fs-16">
					<i class="pg-close"></i>
				</a>
				<!-- END Overlay Close !-->
			</div>
			<!-- END Overlay Header !-->
			<div class="container-fluid">
				<!-- BEGIN Overlay Controls !-->
				<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
				<br>
				<div class="inline-block">
					<div class="checkbox right">
						<input id="checkboxn" type="checkbox" value="1" checked="checked">
						<label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
					</div>
				</div>
				<div class="inline-block m-l-10">
					<p class="fs-13">Press enter to search</p>
				</div>
				<!-- END Overlay Controls !-->
			</div>
			<!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
			<div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
				<span id="overlay-suggestions"></span>
				<br>
				<div class="search-results m-t-40">
					<p class="bold">Pages Search Results</p>
					<div class="row">
						<div class="col-md-6">
							<!-- BEGIN Search Result Item !-->
							<div class="">
								<!-- BEGIN Search Result Item Thumbnail !-->
								<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
									<div>
										<img width="50" height="50" src="<?= Yii::$app->request->BaseUrl ;?>/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
									</div>
								</div>
								<!-- END Search Result Item Thumbnail !-->
								<div class="p-l-10 inline p-t-5">
									<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
									<p class="hint-text">via john smith</p>
								</div>
							</div>
							<!-- END Search Result Item !-->
							<!-- BEGIN Search Result Item !-->
							<div class="">
								<!-- BEGIN Search Result Item Thumbnail !-->
								<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
									<div>T</div>
								</div>
								<!-- END Search Result Item Thumbnail !-->
								<div class="p-l-10 inline p-t-5">
									<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
									<p class="hint-text">via pages</p>
								</div>
							</div>
							<!-- END Search Result Item !-->
							<!-- BEGIN Search Result Item !-->
							<div class="">
								<!-- BEGIN Search Result Item Thumbnail !-->
								<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
									<div><i class="fa fa-headphones large-text "></i>
									</div>
								</div>
								<!-- END Search Result Item Thumbnail !-->
								<div class="p-l-10 inline p-t-5">
									<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
									<p class="hint-text">via pagesmix</p>
								</div>
							</div>
							<!-- END Search Result Item !-->
						</div>
						<div class="col-md-6">
							<!-- BEGIN Search Result Item !-->
							<div class="">
								<!-- BEGIN Search Result Item Thumbnail !-->
								<div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
									<div><i class="fa fa-facebook large-text "></i>
									</div>
								</div>
								<!-- END Search Result Item Thumbnail !-->
								<div class="p-l-10 inline p-t-5">
									<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
									<p class="hint-text">via facebook</p>
								</div>
							</div>
							<!-- END Search Result Item !-->
							<!-- BEGIN Search Result Item !-->
							<div class="">
								<!-- BEGIN Search Result Item Thumbnail !-->
								<div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
									<div><i class="fa fa-twitter large-text "></i>
									</div>
								</div>
								<!-- END Search Result Item Thumbnail !-->
								<div class="p-l-10 inline p-t-5">
									<h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
									<p class="hint-text">via twitter</p>
								</div>
							</div>
							<!-- END Search Result Item !-->
							<!-- BEGIN Search Result Item !-->
							<div class="">
								<!-- BEGIN Search Result Item Thumbnail !-->
								<div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
									<div><i class="fa fa-google-plus large-text "></i>
									</div>
								</div>
								<!-- END Search Result Item Thumbnail !-->
								<div class="p-l-10 inline p-t-5">
									<h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
									<p class="hint-text">via google plus</p>
								</div>
							</div>
							<!-- END Search Result Item !-->
						</div>
					</div>
				</div>
			</div>
			<!-- END Overlay Search Results !-->
		</div>
		<!-- END Overlay Content !-->
	</div>
	<!-- END OVERLAY -->


	<?php $this->endBody() ?>
	</body>
	</html>

<?php $this->endPage() ?>