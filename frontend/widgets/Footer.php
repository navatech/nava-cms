<?php
/**
 * Created by Navatech.
 * @project hellovietnam
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    6/21/2016
 * @time    10:39 AM
 */
namespace frontend\widgets;

use common\widgets\Widget;

class Footer extends Widget {

	/**
	 * {@inheritDoc}
	 */
	public function run() {
		return $this->render('footer');
	}
}