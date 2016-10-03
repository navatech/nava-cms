<?php
/**
 * Created by PhpStorm.
 * User: lephuong
 * Date: 10/3/16
 * Time: 5:39 PM
 */
namespace common\transports;

use Yii;

class Ftp extends \navatech\backup\transports\Ftp {

	/**
	 * @param array $config
	 */
	public function __construct($config = []) {
		if (Yii::$app->setting->hasProperty('backup_ftp') && Yii::$app->setting->get('backup_ftp') == 'Yes') {

		}
		parent::__construct($config);
	}
}