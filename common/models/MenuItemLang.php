<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu_item_lang".
 *
 * @property integer $id
 * @property integer $menu_item_id
 * @property string $language
 * @property integer $name
 */
class MenuItemLang extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_item_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_item_id', 'language'], 'required'],
            [['id', 'menu_item_id', ], 'integer'],
            [['name', 'language'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_item_id' => 'Menu Item ID',
            'language' => 'Language',
            'name' => 'Name',
        ];
    }

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getMenuItem() {
		return $this->hasOne(MenuItem::className(), ['id' => 'menu_item_id']);
	}

}
