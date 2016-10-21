<?php
namespace common\models;

use navatech\language\Translate;
use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id
 * @property string  $name
 * @property integer $status
 */
class Menu extends Model {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'menu';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[
				['name'],
				'required',
			],
			[
				['status'],
				'integer',
			],
			[
				['name'],
				'string',
				'max' => 255,
			],
			[
				[
					'name',
					'name_' . Yii::$app->language,
				],
				'safe',
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id'     => 'No.',
			'name'   => Translate::name(),
			'status' => Translate::status(),
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getMenuItem() {
		return $this->hasMany(MenuItem::className(), ['menu_id' => 'id'])->orderBy(['sort_order' => SORT_ASC]);
	}
}
