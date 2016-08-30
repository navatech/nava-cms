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

use common\models\MenuItem;
use common\widgets\Widget;
use yii\widgets\Menu;

class Sidebar extends Widget {

	/**
	 * {@inheritDoc}
	 */
	public function run() {
		$menu_items = MenuItem::findAll(['menu_id'=>1]);
		return $this->render("sidebar",[
			'menu_items'=>$menu_items
		]);
	}
}