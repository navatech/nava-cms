<?php
namespace common\models;

use Yii;

/**
 * This is the model class for table "product_lang".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string  $name
 * @property string  $description
 * @property string  $content
 * @property string  $language
 */
class ProductLang extends \yii\db\ActiveRecord {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'product_lang';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[
				['product_id'],
				'integer',
			],
			[
				[
					'name',
					'description',
					'content',
				],
				'string',
			],
			[
				['language'],
				'string',
				'max' => 255,
			],
			[
				['product_id'],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => Product::className(),
				'targetAttribute' => ['product_id' => 'id'],
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id'          => 'ID',
			'product_id'  => 'Product ID',
			'name'        => 'Name',
			'description' => 'description',
			'content'     => 'content',
			'language'    => 'Language',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProduct() {
		return $this->hasOne(Product::className(), ['id' => 'product_id']);
	}
}
