<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 */
class Menu extends Model
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'menu';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['name'], 'required'],
			[['status'], 'integer'],
			[['name'], 'string', 'max' => 255],
			[
				[
					'name',
					'name_' . Yii::$app->language
				],
				'safe']
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'name' => 'Name',
			'status' => 'Status',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getMenuItem() {
		return $this->hasMany(MenuItem::className(), ['menu_id' => 'id']);
	}

	public function getAllmenu(){
		$menus = Menu::findAll(['status'=>1]);
		$array     = [];
		foreach ($menus as $menu) {
			$array[$menu->id] = $menu->name;
		}
		return $array;
	}
}
