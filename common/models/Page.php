<?php
namespace common\models;

use common\models\translate\PageTranslate;
use navatech\language\Translate;
use Yii;

/**
 * This is the model class for table "page".
 *
 * @property integer         $id
 * @property integer         $status
 * @property integer         $category_id
 * @property string          $image
 * @property string          $name
 * @property string          $information
 * @property string          $description
 * @property string          $content
 * @property PageTranslate[] $pageTranslates
 */
class Page extends Model {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'page';
	}

	public $img;

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
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
			'id'          => 'No.',
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
	 * @return \yii\db\ActiveQuery
	 */
	public function getPageTranslates() {
		return $this->hasMany(PageTranslate::className(), ['page_id' => 'id']);
	}
}
