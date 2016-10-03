<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_lang".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $name
 * @property string $information
 * @property string $language
 */
class ProductLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id'], 'integer'],
            [['name', 'information'], 'string'],
            [['language'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'name' => 'Name',
            'information' => 'Information',
            'language' => 'Language',
        ];
    }
}
