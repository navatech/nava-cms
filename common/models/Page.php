<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property integer $id
 * @property double $price
 * @property integer $status
 * @property integer $category_id
 * @property string $image
 */
class Page extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['status', 'category_id'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price' => 'Price',
            'status' => 'Status',
            'category_id' => 'Category ID',
            'image' => 'Image',
        ];
    }
}
