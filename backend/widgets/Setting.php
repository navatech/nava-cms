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

class Setting extends Widget {

	/**
	 * {@inheritDoc}
	 */
	public function run() {
		$settings     = SettingModel::findAll([
			'parent_id' => 0,
			'type'      => SettingModel::TYPE_ACTION,
		]);
		$settingItems = [];
		foreach ($settings as $setting) {
			$translateCode  = $setting->code;
			$settingItems[] = [
				'label'  => '<i class="glyphicon  ' . $setting->icon . '"></i> ' . Translate::$translateCode(),
				'url'    => ['/setting/default/' . $setting->code],
				'encode' => false,
			];
		}
		return $this->render("setting", ['settingItems' => $settingItems]);
	}
}