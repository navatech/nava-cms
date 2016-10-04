<?php
namespace common\models;

use navatech\language\Translate;
use Yii;

/**
 * This is the model class for table "product_image".
 *
 * @property integer $id
 * @property integer $product_id
 * @property integer $image
 * @property integer $feature_image
 * @property integer $status
 */
class ProductImage extends \yii\db\ActiveRecord {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'product_image';
	}

	public $img;

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[
				[
					'product_id',
				],
				'required',
			],
			[
				[
					'img',
				],
				'file',
				'extensions' => 'jpg, gif, png',
				'maxFiles'   => 0,
			],
			[
				[
					'product_id',
					'status',
				],
				'integer',
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id'            => 'No',
			'product_id'    => Translate::product(),
			'image'         => Translate::image(),
			'status'        => Translate::status(),
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProduct() {
		return $this->hasOne(Product::className(), ['id' => 'post_id']);
	}

	public static function getPictureId($product_id = null) {
		if ($product_id != null) {
			$pictures = ProductImage::find()->where(['product_id' => $product_id])->all();
			$array    = [];
			$i        = 0;
			foreach ($pictures as $picture) {
				$array [$i] = [
					'url' => "/product/deleteimg?id=" . $picture->id,
					'key' => $picture->id,
				];
				$i ++;
			}
			return $array;
		} else {
			return [];
		}
	}

}
