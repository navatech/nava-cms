<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "page_lang".
 *
 * @property integer $id
 * @property integer $page_id
 * @property string $name
 * @property string $information
 * @property string $language
 */
class PageLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_id'], 'integer'],
            [['name', 'information'], 'string'],
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
            'page_id' => 'Page ID',
            'name' => 'Name',
            'information' => 'Information',
            'language' => 'Language',
        ];
    }
}
