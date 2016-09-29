<?php
/**
 * Created by Navatech.
 * @project vnlance-vn
 * @author  Dung
 * @email   dung[at]gmail.com
 * @date    01/07/2016
 * @time    5:25 CH
 */
namespace common\authclient;

use dektrium\user\clients\Facebook;
use dektrium\user\clients\Google;
use Yii;

class Collection extends \yii\authclient\Collection {

	public function init() {
		parent::init();
		$clients = [];
		if (Yii::$app->setting->facebook_connect == 'Có') {
			$clients['facebook'] = [
				'class'        => Facebook::className(),
				'clientId'     => Yii::$app->setting->facebook_client_id,
				'clientSecret' => Yii::$app->setting->facebook_client_secret,
			];
		}
		if (Yii::$app->setting->google_connect == 'Có') {
			$clients['google'] = [
				'class'        => Google::className(),
				'clientId'     => Yii::$app->setting->google_client_id,
				'clientSecret' => Yii::$app->setting->google_client_secret,
			];
		}
		$this->setClients($clients);
	}
}