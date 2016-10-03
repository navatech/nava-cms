<?php

namespace common\models;

use navatech\language\Translate;
use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property integer $status
 * @property integer $category_id
 * @property string $image
 */
class Post extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

	public $img;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [
            	[
            		'status',
		            'category_id'
	            ], 'integer'],
	        [
		        [   'img',
			        'image',
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

	public function behaviors($attributes = null) {
		$attributes = [
			'name',
			'description',
			'content'
		];
		$behaviors  = parent::behaviors($attributes);
		return $behaviors;
	}
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'NO',
            'status' => Translate::status(),
            'category_id' => Translate::category(),
            'image' => Translate::image(),
        ];
    }

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getPostLangs() {
		return $this->hasMany(PostLang::className(), ['post_id' => 'id']);
	}
}
