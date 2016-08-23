<?php
/**
 * Created by Navatech.
 * @project hellovietnam
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    6/21/2016
 * @time    10:39 AM
 */
namespace backend\widgets;

use common\widgets\Widget;

class NavBar extends Widget {

	/**
	 * {@inheritDoc}
	 */
	public function run() {
		return $this->render('navBar');
	}
}