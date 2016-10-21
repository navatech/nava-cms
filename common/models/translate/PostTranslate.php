<?php
namespace common\models\translate;

use common\models\Model;
use common\models\Post;
use navatech\language\Translate;

/**
 * This is the model class for table "post_lang".
 *
 * @property integer $id
 * @property integer $post_id
 * @property string  $name
 * @property string  $information
 * @property string  $language
 */
class PostTranslate extends Model {

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'post_translate';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[
				['post_id'],
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
				['post_id'],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => Post::className(),
				'targetAttribute' => ['post_id' => 'id'],
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id'          => 'No.',
			'post_id'     => Translate::post(),
			'name'        => Translate::name(),
			'description' => Translate::description(),
			'content'     => Translate::content(),
			'language'    => Translate::language(),
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getPost() {
		return $this->hasOne(Post::className(), ['id' => 'post_id']);
	}
}
