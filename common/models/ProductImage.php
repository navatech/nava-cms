<?php
namespace common\models;

use navatech\language\Translate;
use Yii;
use yii\web\UploadedFile;

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

	public function getPictureFile($picture = '') {
		$dir = Yii::getAlias('@app/web') . '/uploads/' . $this->tableName() . '/';
		return isset($this->$picture) ? $dir . $this->$picture : null;
	}

	/**
	 * fetch stored image url
	 *
	 * @param string $picture
	 *
	 * @return string
	 */
	public static function getPictureUrl($product_id = null) {
		Yii::$app->params['uploadUrl'] = Yii::$app->urlManager->baseUrl . '/uploads/' . self::tableName() . '/';
		if ($product_id != null) {
			$gallery = ProductImage::find()->where(['product_id' => $product_id])->all();
			if ($gallery) {
				$image = [];
				$i     = 0;
				foreach ($gallery as $list) {
					$image[$i] = Yii::$app->params['uploadUrl'] . $list->image;
					$i ++;
				}
				return $image;
			} else {
				return Yii::$app->urlManager->baseUrl . '/uploads/no_image_thumb.gif';
			}
		} else {
			return Yii::$app->urlManager->baseUrl . '/uploads/no_image_thumb.gif';
		}
	}

	public static function getPictureId($product_id = null) {
		if ($product_id != null) {
			$pictures = ProductImage::find()->where(['product_id' => $product_id])->all();
			$array    = [];
			$i        = 0;
			foreach ($pictures as $picture) {
				$array [$i] = [
					'image' => "/product/deleteimg?id=" . $picture->id,
					'key' => $picture->id,
				];
				$i ++;
			}
			return $array;
		} else {
			return [];
		}
	}

	/**
	 * Process upload of image
	 *
	 * @param string $picture
	 *
	 * @return mixed the uploaded image instance
	 */
	public function uploadPicture() {
		$img = UploadedFile::getInstances($this, 'img');
		if (empty($img)) {
			return false;
		}
		$dir = Yii::getAlias('@app/web') . '/uploads/' . $this->tableName() . '/';
		if (!is_dir($dir)) {
			@mkdir($dir, 0777, true);
		}
		return $img;
	}
}
