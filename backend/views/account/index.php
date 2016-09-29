<?php
use backend\controllers\AccountController;
use common\models\User;
use navatech\language\Translate;
use navatech\role\helpers\RoleChecker;
use navatech\role\models\Role;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title                   = Translate::user();
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

	<h1><?= Html::encode($this->title) ?></h1>
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
				'value'     => function (User $data) {
					return $data->role->name;
				},
				'filter'    => ArrayHelper::map(Role::find()->all(), 'id', 'name'),
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
