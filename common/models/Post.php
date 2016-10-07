<?php
namespace common\models;

use navatech\language\Translate;
use Yii;
use yii\db\ActiveQuery;
use yii\web\UploadedFile;

/**
 * This is the model class for table "post".
 *
 * @property integer    $id
 * @property integer    $status
 * @property integer    $category_id
 * @property string     $image
 * @property string     $created_at
 * @property string     $updated_at
 * @property PostLang[] $postLangs
 * @property Category   $category
 */
class Post extends Model {

	/**@var UploadedFile */
	public $img;

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'post';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[
				[
					'category_id',
				],
				'required',
			],
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
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id'          => 'NO',
			'status'      => Translate::status(),
			'category_id' => Translate::category(),
			'image'       => Translate::image(),
		];
	}

	/**
	 * @return ActiveQuery
	 */
	public function getPostLangs() {
		return $this->hasMany(PostLang::className(), ['post_id' => 'id']);
	}

	/**
	 * @return ActiveQuery
	 */
	public function getCategory() {
		return $this->hasOne(Category::className(), ['id' => 'category_id']);
	}
}
