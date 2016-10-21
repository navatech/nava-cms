<?php
namespace common\models\translate;

use common\models\Model;
use common\models\Product;
use navatech\language\Translate;

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
class ProductTranslate extends Model {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'product_translate';
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
			'id'          => 'No.',
			'product_id'  => Translate::product(),
			'name'        => Translate::name(),
			'description' => Translate::description(),
			'content'     => Translate::content(),
			'language'    => Translate::language(),
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProduct() {
		return $this->hasOne(Product::className(), ['id' => 'product_id']);
	}
}
