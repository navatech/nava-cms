<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post_lang".
 *
 * @property integer $id
 * @property integer $post_id
 * @property string $name
 * @property string $information
 * @property string $language
 */
class PostLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id'], 'integer'],
            [['name', 'description', 'content'], 'string'],
            [['language'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Post ID',
            'name' => 'Name',
	        'description'=> 'Description',
            'content' => 'Content',
            'language' => 'Language',
        ];
    }

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getPost() {
		return $this->hasOne(Post::className(), ['id' => 'post_id']);
	}
}
