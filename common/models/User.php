<?php
namespace common\models;

use navatech\role\models\Role;
use yii\helpers\ArrayHelper;

/**
 * @property Role $role
 */
class User extends \navatech\role\models\User {

	/**
	 * {@inheritDoc}
	 */
	public function rules() {
		$old = parent::rules();
		$new = [
			[
				[
					'password',
					'username',
				],
				'required',
				'on' => 'check',
			],
			[
				[
					'confirmed_at',
					'password',
				],
				'safe',
			],
			[
				[
					'username',
					'email',
				],
				'unique',
			],
		];
		return ArrayHelper::merge($old, $new);
	}

	/**
	 * {@inheritDoc}
	 */
	public function attributeLabels() {
		$attributeLabels = parent::attributeLabels();
		return ArrayHelper::merge($attributeLabels, [
			'id'       => ' ID',
			'username' => 'user',
			'email'    => 'email',
			'role_id'  => 'role',
		]);
	}
}
