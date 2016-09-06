<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu_item".
 *
 * @property integer $id
 * @property integer $menu_id
 * @property string $icon
 * @property string $parent_id
 * @property integer $level
 * @property string $url
 * @property integer $sort_order
 * @property integer $status
 */
class MenuItem extends Model
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
            [['menu_id', 'icon', 'parent_id', 'url'], 'required'],
            [['menu_id', 'parent_id', 'level', 'sort_order', 'status'], 'integer'],
            [['icon', 'url'], 'string', 'max' => 255],
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
            'icon' => 'Icon',
            'parent_id' => 'Parent ID',
            'level' => 'Level',
            'url' => 'Url',
            'sort_order' => 'Sort Order',
            'status' => 'Status',
        ];
    }

	public function behaviors($attributes = null) {
		$attributes = [
			'name',
		];
		$behaviors  = parent::behaviors($attributes);
		return $behaviors;
	}
}
