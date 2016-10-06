<?php
namespace common\models;

use navatech\language\Translate;
use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property double  $price
 * @property integer $status
 * @property integer $category_id
 * @property string  $image
 */
class Product extends Model {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'product';
	}
	public $img;

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[
				[
					'category_id',
					'price',
				],
				'required',
			],
			[
				['price'],
				'number',
			],
			[
				[
					'status',
					'category_id',
				],
				'integer',
			],
			[
				[   'img',
					'image',
					'created_at',
					'updated_at'
				],
				'string',
				'max' => 255,
			],
			[
				[
					'img',
					'image',
				],
				'file',
				'extensions' => 'jpg, gif, png',
			],
			[
				[
					'name',
					'name_' . Yii::$app->language,
					'description',
					'description_' . Yii::$app->language,
					'content',
					'content_' . Yii::$app->language,
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
			'id'          => 'NO',
			'price'       => Translate::price(),
			'status'      => Translate::status(),
			'category_id' => Translate::category(),
			'image'       => Translate::image(),
		];
	}

	public function behaviors($attributes = null) {
		$attributes = [
			'name',
			'description',
			'content'
		];
		$behaviors  = parent::behaviors($attributes);
		return $behaviors;
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProductLangs() {
		return $this->hasMany(ProductLang::className(), ['product_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProductImages() {
		return $this->hasMany(ProductImage::className(), ['product_id' => 'id']);
	}
}
