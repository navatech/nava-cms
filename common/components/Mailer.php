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

use Yii;

class Mailer extends \yii\swiftmailer\Mailer {

	/**
	 * {@inheritDoc}
	 */
	public function init() {
		parent::init();
		$configure = [
			'class'    => 'Swift_SmtpTransport',
			'host'     => Yii::$app->setting->get('smtp_host'),
			'username' => Yii::$app->setting->get('smtp_user'),
			'password' => Yii::$app->setting->get('smtp_password'),
			'port'     => Yii::$app->setting->get('smtp_port'),
		];
		if (Yii::$app->setting->get('email_encryption') != 'none') {
			$configure['encryption'] = Yii::$app->setting->get('email_encryption');
		}
		$this->useFileTransport = false;
		$this->setTransport($configure);
	}
}