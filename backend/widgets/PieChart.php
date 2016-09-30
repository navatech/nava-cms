<?php
/**
 * Created by Navatech.
 * @project yii2-cms
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    6/21/2016
 * @time    10:39 AM
 */
namespace backend\widgets;

use common\widgets\Widget;
use navatech\language\Translate;
use navatech\setting\models\Setting as SettingModel;

class LineChart extends Widget {

	/**
	 * {@inheritDoc}
	 */
	public function run() {
		return $this->render("linechart");
	}
}