<?php
/**
 * Created by Navatech.
 * @project yii2-cms
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    9/12/2016
 * @time    4:33 PM
 */
namespace common\components;

use common\models\User;
use navatech\language\components\MultiLanguageController;
use Yii;
use yii\helpers\Url;

class Controller extends MultiLanguageController {

	/**@var User */
	public $identity;

	public function init() {
		parent::init();
		$this->identity = Yii::$app->getUser()->getIdentity();
	}

	public function beforeAction($action) {
		if (Yii::$app->setting->get('web_active') == 'no' && Yii::$app->controller->action->id != 'maintain') {
			$this->redirect(Url::to(['/site/maintain']));
		}
		if (Yii::$app->user->isGuest) {
			$this->redirect(Url::to(['user/login']));
		}
		return parent::beforeAction($action);
	}
}