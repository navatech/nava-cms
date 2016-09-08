<?php

namespace common\widgets;

use common\models\User;
use Yii;

class Widget extends \yii\bootstrap\Widget {

	/**
	 * @var User
	 */
	public $user;

	/**
	 * @param      $controller
	 * @param null $action
	 * @param null $params
	 *
	 * @return string
	 */
	public static function isActive($controller, $action = null, $params = null, $text = 'active') {
		$string = '';
		if (!is_array($controller)) {
			$controller = [$controller];
		}
		if (!is_array($action) && $action != null) {
			$action = [$action];
		}
		if (!is_array($params) && $params != null) {
			$params = [$params];
		}
		if (in_array(Yii::$app->controller->id, $controller)) {
			if ($action == null || ($action != null && in_array(Yii::$app->controller->action->id, $action))) {
				if ($params == null || in_array($params, array_chunk(Yii::$app->controller->actionParams, 1, true))) {
					$string = $text;
				}
			}
		}
		return $string;
	}

	/**
	 * {@inheritDoc}
	 */
	public function init() {
		parent::init();
		$this->user = Yii::$app->user->getIdentity();
	}
}