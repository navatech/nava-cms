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
use navatech\role\helpers\RoleChecker;
use Yii;

class Sidebar extends Widget {

	/**
	 * {@inheritDoc}
	 */
	public function run() {
		/**@var MenuItem[] $models */
		$models     = MenuItem::find()->where([
			'menu_id'   => 1,
			'parent_id' => 0,
			'status'    => 1,
		])->orderBy(['sort_order' => SORT_ASC])->all();
		$menu_items = self::menu($models);
		return $this->render("sidebar", [
			'menu_items' => $menu_items,
		]);
	}

	/**
	 * @param $models
	 *
	 * @return array
	 */
	public static function menu($models) {
		$menu_items = [];
		foreach ($models as $key => $model) {
			$items = self::menu(MenuItem::find()->where([
				'parent_id' => $model->id,
				'status'    => 1,
			])->orderBy(['sort_order' => SORT_ASC])->all());
			if (empty($items)) {
				$template = '<a href="{url}"> {label} </a><span class="icon-thumbnail"><i class="fa ' . $model->icon . '"></i></span>';
			} else {
				$template = '<a href="javascript:void(0)"> {label} <span class=" arrow"></span></a><span class="icon-thumbnail"><i class="fa ' . $model->icon . '"></i></span>';
			}
			$route        = Yii::$app->createController($model->url);
			$menu_items[] = [
				'label'    => '<span class="title">' . $model->name . '</span>',
				'encode'   => false,
				'template' => $template,
				'url'      => ['/' . $model->url],
				'items'    => $items,
				'visible'  => RoleChecker::isAuth(get_class($route[0]), str_replace('/', '', substr($model->url, strpos($model->url, '/')))),
			];
		}
		return $menu_items;
	}
}