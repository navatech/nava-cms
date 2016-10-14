<?php
/**
 * Created by Navatech.
 * @project yii2-cms
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    6/21/2016
 * @time    10:39 AM
 * @var LoginForm $model
 */
use app\assets\LoginAsset;
use dektrium\user\models\LoginForm;
use navatech\language\Translate;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

LoginAsset::register($this);
Yii::$app->layout              = false;
$this->title                   = Translate::login() . ' | ' . Yii::$app->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginPage() ?>
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

	<body>
	<?php $this->beginBody() ?>
	<div class="content">

		<section id="content" class="m-t-lg wrapper-md">
			<div id="login-darken"></div>
			<div id="login-form" class="container aside-xxl animated fadeInUp">
		<span class="navbar-brand block ">
			<img src="<?= Yii::$app->setting->get('general_logo') ?>" class="img-responsive ">
		</span>
				<section class="panel panel-default bg-white m-t-lg">
					<header class="panel-heading text-center"><strong><?= Translate::login() ?></strong>

					</header>

					<?php $form = ActiveForm::begin([
						'id'                     => 'login-form',
						'enableAjaxValidation'   => false,
						'enableClientValidation' => false,
						'validateOnBlur'         => false,
						'validateOnType'         => false,
						'validateOnChange'       => false,
						'options'                => [
							'class' => 'panel-body wrapper-lg',
						],
					]) ?>

					<?= $form->field($model, 'login', [
						'labelOptions' => ['class' => 'block clearfix'],
					])->textInput([
						'autofocus'   => 'autofocus',
						'class'       => 'form-control input-lg',
						'placeholder' => Translate::username(),
					]) ?>

					<?= $form->field($model, 'password', [
						'labelOptions' => ['class' => 'control-label'],
					])->passwordInput([
						'autofocus'   => 'autofocus',
						'class'       => 'form-control input-lg',
						'placeholder' => Translate::password(),
					]) ?>

					<div class="checkbox">
						<?= $form->field($model, 'rememberMe', [
							'labelOptions' => ['class' => 'inline'],
							'template'     => '{beginLabel} Remember Me{endLabel}{input}',
						])->checkbox(['tabindex' => '4']) ?>
					</div>
					<button type="submit" class="btn btn-success"><?= Translate::login() ?></button>
					<?php ActiveForm::end(); ?>
				</section>
				<!-- footer -->
				<footer id="footer">
					<div class="text-center text-success padder">
						<p>
							<small>&copy; 2016 Powered by <a href="http://navatech.vn/" target="_blank">NavaTech</a>
							</small>
						</p>
					</div>
				</footer>
				<!-- / footer -->
			</div>
		</section>
	</div>      <!--main content end-->

	<?php $this->endBody() ?>
	</body>
	</html>

<?php $this->endPage() ?>