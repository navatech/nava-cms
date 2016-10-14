<?php
/**
 * Created by PhpStorm.
 * User: lephuong
 * Date: 9/29/16
 * Time: 2:06 PM
 */
namespace common\web;

use common\models\User;
use Yii;

class View extends \yii\web\View {

	/**@var User */
	public $user = null;

	/**
	 * {@inheritDoc}
	 */
	public function init() {
		parent::init();
		if (!Yii::$app->user->isGuest) {
			$this->user = Yii::$app->user->identity;
		}
	}
}