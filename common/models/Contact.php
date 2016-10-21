<?php
namespace common\models;

use navatech\language\Translate;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id
 * @property integer $location_id
 * @property string  $fullname
 * @property string  $email
 * @property string  $phone
 * @property string  $title
 * @property string  $content
 * @property string  $created_date
 * @property integer $status
 */
class Contact extends Model {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'contact';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[
				[
					'fullname',
					'email',
					'phone',
					'title',
					'content',
					'status',
				],
				'required',
			],
			[
				['status'],
				'integer',
			],
			[
				['created_date'],
				'safe',
			],
			[
				[
					'fullname',
					'email',
					'phone',
					'title',
					'content',
				],
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
			'id'         => 'No.',
			'fullname'   => Translate::fullname(),
			'email'      => Translate::email(),
			'phone'      => Translate::phone(),
			'title'      => Translate::title(),
			'content'    => Translate::content(),
			'created_at' => Translate::created_at(),
			'status'     => Translate::status(),
		];
	}
}
