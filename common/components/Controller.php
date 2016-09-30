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
use Yii;
use yii\helpers\Url;

class Controller extends \yii\web\Controller {

	/**@var User */
	public $user;

	/**
	 * {@inheritDoc}
	 */
	public function init() {
		parent::init();
		$this->user = Yii::$app->getUser()->getIdentity();
	}

	/**
	 * {@inheritDoc}
	 */
	public function beforeAction($action) {
		if (Yii::$app->setting->get('web_active') == 'no' && Yii::$app->controller->action->id != 'maintain') {
			$this->redirect(Url::to(['/site/maintain']));
		}
		return parent::beforeAction($action);
	}
}