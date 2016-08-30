<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu_item".
 *
 * @property integer $id
 * @property integer $menu_id
 * @property string $parent_id
 * @property string $entity
 * @property string $entity_id
 * @property integer $level
 * @property string $url
 * @property integer $position
 * @property integer $active
 * @property string $icon
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Menu $menu
 * @property MenuItemLang[] $menuItemLangs
 */
class MenuItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_id', 'parent_id', 'entity_id', 'url', 'created_at', 'updated_at'], 'required'],
            [['menu_id', 'parent_id', 'entity_id', 'level', 'position', 'active', 'created_at', 'updated_at'], 'integer'],
            [['url','entity','icon'], 'string', 'max' => 255],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['menu_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_id' => 'Menu ID',
            'parent_id' => 'Parent ID',
            'entity' => 'Entity',
            'entity_id' => 'Entity ID',
            'level' => 'Level',
            'url' => 'Url',
            'position' => 'Position',
            'active' => 'Active',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'menu_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenuItemLangs()
    {
        return $this->hasMany(MenuItemLang::className(), ['menu_item_id' => 'id']);
    }
}
