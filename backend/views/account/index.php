<?php
use backend\controllers\AccountController;
use common\models\User;
use navatech\language\Translate;
use navatech\role\helpers\RoleChecker;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = Translate::user();
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a(Translate::create_x(Translate::user()), ['create'], ['class' => 'btn btn-success']) ?>
	</p>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel'  => $searchModel,
		'columns'      => [
			['class' => 'yii\grid\SerialColumn'],
			'username',
			'email:email',
			// 'confirmed_at',
			// 'unconfirmed_email:email',
			// 'blocked_at',
			// 'registration_ip',
			// 'created_at',
			// 'updated_at',
			// 'flags',
			[
				'attribute' => 'role_id',
				'value'     => function(User $data) {
					return $data->getAllRole($data->role_id)->name;
				},
				'filter'    => $searchModel->getAllRole(),
			],
			[
				'class'          => 'yii\grid\ActionColumn',
					'visibleButtons' => [
						'view'   => RoleChecker::isAuth(AccountController::className(), 'view'),
						'update' => RoleChecker::isAuth(AccountController::className(), 'update'),
						'delete' => RoleChecker::isAuth(AccountController::className(), 'delete'),
					],
			],
		],
	]); ?>
</div>
