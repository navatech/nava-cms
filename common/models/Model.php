<?php
/**
 * Created by Navatech.
 * @project yii2-cms
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    8/27/2016
 * @time    11:28 AM
 */
namespace common\models;

use navatech\language\components\LanguageBehavior;
use navatech\language\db\ActiveRecord;
use navatech\language\db\LanguageQuery;

class Model extends ActiveRecord {

	/**
	 * {@inheritDoc}
	 */
	public function behaviors($attributes = null) {
		if ($attributes != null) {
			return [
				'ml' => [
					'class'      => LanguageBehavior::className(),
					'attributes' => $attributes,
				],
			];
		}
		return parent::behaviors();
	}

	/**
	 * {@inheritDoc}
	 */
	public static function find() {
		return new LanguageQuery(get_called_class());
	}

	/**
	 * {@inheritDoc}
	 */
	public static function findOneTranslated($condition) {
		return is_array($condition) ? self::find()->where($condition)->translate()->one() : self::find()
			->where(['id' => $condition])
			->translate()
			->one();
	}
}