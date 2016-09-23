<?php

namespace common\models;

use kartik\widgets\SwitchInput;
use navatech\language\Translate;
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
            [['menu_id', 'icon', 'url'], 'required'],
            [['menu_id', 'parent_id', 'level', 'sort_order', 'status'], 'integer'],
            [['icon', 'url'], 'string', 'max' => 255],
	        [
		        [
			        'icon',
			        'url',
			        'name',
			        'name_' . Yii::$app->language,
		        ],
		        'safe',
	        ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_id' => 'Menu',
            'icon' => 'Icon',
            'parent_id' => Translate::menu_parent(),
            'level' => Translate::level(),
            'url' => 'Url',
            'sort_order' => Translate::sort_order(),
            'status' => Translate::status(),
        ];
    }

	public function behaviors($attributes = null) {
		$attributes = [
			'name',
		];
		$behaviors  = parent::behaviors($attributes);
		return $behaviors;
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getMenu() {
		return $this->hasOne(Menu::className(), ['id' => 'menu_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getMenuItemLangs() {
		return $this->hasMany(MenuItemLang::className(), ['menu_item_id' => 'id']);
	}

	public static function getAllmenuitem() {
		$menuitems     = MenuItem::findAll(['status'=>1]);
		$response = [];
		foreach ($menuitems as $menuitem) {
			$response[$menuitem->id] = $menuitem->name;
		}
		return $response;
	}

	public static function getMenuItem($menu_id) {
		$menuitems     = MenuItem::find()->where([
			'parent_id' => 0,
			'menu_id' => $menu_id
		])->all();
		$response = [];
		$html = '';
		foreach ($menuitems as $menuitem) {
			$response[]         = $menuitem;
			$html.='<li class="dd-item dd3-item" data-id="'.$menuitem->id.'">';
			$html.='<div class="dd-handle dd3-handle"></div><div class="dd3-content"><div class="col-sm-3"><div class="btn-group">';
			$html.='<button type="button" class="btn btn-primary iconpicker-component"><i class="fa'.$menuitem->icon.'"></i></button>';
			$html.='<button type="button" class="icp icp-dd btn btn-primary dropdown-toggle" data-selected="'.$menuitem->icon .'" data-toggle="dropdown">';
			$html.='<span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><div class="dropdown-menu iconpicker-container"></div>';
			$html.='</div></div><div class="col-sm-6">'.$menuitem->name.'</div><div class="col-sm-3">';
			$html.='<input type="hidden" name="MenuItem['.$menuitem->id.'][id]" value="'.$menuitem->id .'">';
			$html.='<input type="hidden" name="MenuItem['.$menuitem->id .'][parent_id]" value="'. $menuitem->parent_id .'" class="parent-menu">';
			$html.='<input type="hidden" name="MenuItem['.$menuitem->id .'][icon]" value="'. $menuitem->icon .'" class="icon-menu">';
			$html.= SwitchInput::widget([
				'name'        => 'MenuItem[' . $menuitem->id . '][status]',
				'inlineLabel' => false,
				'options'     => [
					'class' => 'menu-status',
				],
				'value'       => $menuitem->status,
			]);
			$html.='</div></div>';
			$children           = MenuItem::find()->where([
				'parent_id' => $menuitem->id,
				'menu_id' => $menu_id
			])->all();
			if ($children) {
				$html.= self::getChildrenMenu($children,$menuitem->menu_id);
			}
			$html.='</li>';

		}
		return $html;
	}

	public function getChildrenMenu($models, $menu_id) {
		$html = '<ol class="dd-list">';
		foreach ($models as $menuitem) {
			$html.='<li class="dd-item dd3-item" data-id="'.$menuitem->id.'">';
			$html.='<div class="dd-handle dd3-handle"></div><div class="dd3-content"><div class="col-sm-3"><div class="btn-group">';
			$html.='<button type="button" class="btn btn-primary iconpicker-component"><i class="fa'.$menuitem->icon.'"></i></button>';
			$html.='<button type="button" class="icp icp-dd btn btn-primary dropdown-toggle" data-selected="'.$menuitem->icon .'" data-toggle="dropdown">';
			$html.='<span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><div class="dropdown-menu iconpicker-container"></div>';
			$html.='</div></div><div class="col-sm-6">'.$menuitem->name.'</div><div class="col-sm-3">';
			$html.='<input type="hidden" name="MenuItem['.$menuitem->id.'][id]" value="'.$menuitem->id .'">';
			$html.='<input type="hidden" name="MenuItem['.$menuitem->id .'][parent_id]" value="'. $menuitem->parent_id .'" class="parent-menu">';
			$html.='<input type="hidden" name="MenuItem['.$menuitem->id .'][icon]" value="'. $menuitem->icon .'" class="icon-menu">';
			$html.= SwitchInput::widget([
				'name'        => 'MenuItem[' . $menuitem->id . '][status]',
				'inlineLabel' => false,
				'options'     => [
					'class' => 'menu-status',
				],
				'value'       => $menuitem->status,
			]);
			$html.='</div></div>';
			$children             = MenuItem::find()->where([
				'parent_id' => $menuitem->id,
				'menu_id' => $menu_id
			])->all();
			if ($children) {
				$html.= self::getChildrenMenu($children,$menu_id);
			}
			$html.='</li>';

		}
		$html.='</ol>';
		return $html;
	}


}
