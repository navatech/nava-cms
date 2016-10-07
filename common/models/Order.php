<?php
namespace common\models;

use navatech\language\Translate;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string  $order_number
 * @property integer $user_id
 * @property string  $phone_number
 * @property string  $shipping_address
 * @property string  $created_at
 * @property integer $total_price
 * @property integer $discount
 * @property integer $status
 */
class Order extends Model {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'order';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[
				[
					'user_id',
					'order_number',
					'phone_number',
					'shipping_address',
					'total_price',
				],
				'required',
			],
			[
				[
					'user_id',
					'total_price',
					'discount',
					'status',
				],
				'integer',
			],
			[
				[
					'order_number',
					'shipping_address',
				],
				'string',
			],
			[
				['created_at'],
				'safe',
			],
			[
				['phone_number'],
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
			'id'               => 'No',
			'order_number'     => Translate::order_number(),
			'user_id'          => Translate::user(),
			'phone_number'     => Translate::phone(),
			'shipping_address' => Translate::shipping_address(),
			'created_at'       => Translate::created_at(),
			'total_price'      => Translate::total_price(),
			'discount'         => Translate::discount(),
			'status'           => Translate::status(),
		];
	}

	public function getDiscount($total, $discount) {
		$discount = $total / 100 * $discount;
		return $discount;
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getOrderItems() {
		return $this->hasMany(OrderItem::className(), ['order_id' => 'id']);
	}
}
