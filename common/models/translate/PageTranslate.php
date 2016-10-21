<?php
namespace common\models\translate;

use common\models\Model;
use common\models\Page;
use navatech\language\Translate;

/**
 * This is the model class for table "page_lang".
 *
 * @property integer $id
 * @property integer $page_id
 * @property string  $name
 * @property string  $information
 * @property string  $language
 */
class PageTranslate extends Model {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'page_translate';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[
				['page_id'],
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
				['page_id'],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => Page::className(),
				'targetAttribute' => ['page_id' => 'id'],
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id'          => 'No.',
			'page_id'     => Translate::page(),
			'name'        => Translate::name(),
			'information' => Translate::information(),
			'language'    => Translate::language(),
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getPage() {
		return $this->hasOne(Page::className(), ['id' => 'page_id']);
	}
}
