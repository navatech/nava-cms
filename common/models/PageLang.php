<?php
namespace common\models;

/**
 * This is the model class for table "page_lang".
 *
 * @property integer $id
 * @property integer $page_id
 * @property string  $name
 * @property string  $information
 * @property string  $language
 */
class PageLang extends Model {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'page_lang';
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
			'id'          => 'ID',
			'page_id'     => 'Page ID',
			'name'        => 'Name',
			'information' => 'Information',
			'language'    => 'Language',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getPage() {
		return $this->hasOne(Page::className(), ['id' => 'page_id']);
	}
}
