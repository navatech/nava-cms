<?php
/**
 * Created by Navatech.
 * @project yii2-cms
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    10/10/2016
 * @time    11:29 AM
 */
namespace backend\widgets;

use common\widgets\Widget;
use navatech\language\Translate;
use navatech\setting\models\Setting as SettingModel;

class AreaChart extends Widget {

	/**
	 * {@inheritDoc}
	 */
	public function run() {
		return $this->render("areachart");
	}
}

?>