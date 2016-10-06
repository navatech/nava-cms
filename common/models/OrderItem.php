<?php
namespace common\models;

use navatech\language\Translate;
use Yii;

/**
 * This is the model class for table "order_item".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $product_id
 * @property integer $quantity
 * @property integer $price
 */
class OrderItem extends \yii\db\ActiveRecord {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'order_item';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[
				[
					'id',
					'order_id',
					'product_id',
					'quantity',
					'price',
				],
				'required',
			],
			[
				[
					'id',
					'order_id',
					'product_id',
					'quantity',
					'price',
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
			'id'         => 'NO',
			'order_id'   => Translate::order(),
			'product_id' => Translate::product(),
			'quantity'   => Translate::quantity(),
			'price'      => Translate::price(),

		];
	}
}
