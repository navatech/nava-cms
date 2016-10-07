<?php
namespace common\models;

use navatech\language\Translate;
use Yii;
use yii\db\ActiveQuery;
use yii\web\UploadedFile;

/**
 * This is the model class for table "product".
 *
 * @property integer        $id
 * @property double         $price
 * @property integer        $status
 * @property integer        $category_id
 * @property string         $image
 * @property ProductImage[] $productImages
 * @property ProductLang[]  $productLangs
 * @property Category       $category
 */
class Product extends Model {

	/**@var UploadedFile */
	public $img;

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'product';
	}

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
				[
					'img',
					'image',
					'created_at',
					'updated_at',
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

	/**
	 * {@inheritDoc}
	 */
	public function behaviors($attributes = null) {
		$attributes = [
			'name',
			'description',
			'content',
		];
		$behaviors  = parent::behaviors($attributes);
		return $behaviors;
	}

	/**
	 * @return ActiveQuery
	 */
	public function getCategory() {
		return $this->hasOne(Category::className(), ['id' => 'category_id']);
	}

	/**
	 * @return ActiveQuery
	 */
	public function getProductLangs() {
		return $this->hasMany(ProductLang::className(), ['product_id' => 'id']);
	}

	/**
	 * @return ActiveQuery
	 */
	public function getProductImages() {
		return $this->hasMany(ProductImage::className(), ['product_id' => 'id']);
	}
}
