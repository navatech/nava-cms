<?php
namespace common\models\translate;

use common\models\MenuItem;
use common\models\Model;
use navatech\language\Translate;

/**
 * This is the model class for table "menu_item_lang".
 *
 * @property integer $id
 * @property integer $menu_item_id
 * @property string  $language
 * @property integer $name
 */
class MenuItemTranslate extends Model {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'menu_item_translate';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[
				[
					'menu_item_id',
					'language',
				],
				'required',
			],
			[
				[
					'id',
					'menu_item_id',
				],
				'integer',
			],
			[
				[
					'name',
					'language',
				],
				'string',
				'max' => 255,
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id'           => 'ID',
			'menu_item_id' => Translate::menu_item(),
			'language'     => Translate::language(),
			'name'         => Translate::name(),
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getMenuItem() {
		return $this->hasOne(MenuItem::className(), ['id' => 'menu_item_id']);
	}
}
