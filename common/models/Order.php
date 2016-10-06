<?php
namespace common\models;

use navatech\language\Translate;
use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string  $phone_number
 * @property string  $shipping_address
 * @property string  $created_at
 * @property integer $total_price
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
					'status',
				],
				'integer',
			],
			[
				['shipping_address'],
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
			'user_id'          => Translate::user(),
			'phone_number'     => Translate::phone(),
			'shipping_address' => Translate::address(),
			'created_at'       => Translate::created_at(),
			'total_price'      => Translate::total_price(),
			'status'           => Translate::status(),
		];
	}
}
