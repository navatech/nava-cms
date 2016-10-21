<?php
namespace common\models;

/**
 * This is the model class for table "category_lang".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string  $name
 * @property string  $language
 */
class CategoryLang extends Model {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'category_lang';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[
				[
					'category_id',
					'language',
					'name',
				],
				'required',
			],
			[
				['category_id'],
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
			[
				['category_id'],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => Category::className(),
				'targetAttribute' => ['category_id' => 'id'],
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id'          => 'ID',
			'category_id' => 'Category ID',
			'name'        => 'Name',
			'language'    => 'Language',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCategory() {
		return $this->hasOne(Category::className(), ['id' => 'category_id']);
	}
}
