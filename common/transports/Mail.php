<?php
namespace common\transports;

use Yii;

/**
 * Created by PhpStorm.
 * User: lephuong
 * Date: 9/29/16
 * Time: 11:06 AM
 */
class Mail extends navatech\backup\transports\Mail {

	/**
	 * @param array $config
	 */
	public function __construct($config = []) {
		$this->fromEmail = Yii::$app->setting->get('backup_from_email');
		$this->toEmail   = Yii::$app->setting->get('backup_to_email');
		parent::__construct($config);
	}
}