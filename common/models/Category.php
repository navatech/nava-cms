<?php

namespace common\models;

use navatech\language\Translate;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property integer $type
 * @property integer $order
 * @property string $image
 * @property integer $status
 */
class Category extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

	public $img;

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[
				[
					'parent_id',
					'type',
					'order',
					'status',
				],
				'integer',
			],
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
					'parent_id',
				],
				'safe',
			],
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
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'NO',
            'parent_id' => Translate::category_parent(),
            'type' => Translate::type(),
            'order' => Translate::sort_order(),
            'image' => Translate::image(),
            'status' => Translate::status(),
        ];
    }

	public function getType($type = null) {
		if ($type != null) {
			switch ($type) {
				case 1:
					return Translate::product();
					break;
				case 2:
					return Translate::post();
					break;
			}
		} else {
			return [
				1 => Translate::product(),
				2 => Translate::post(),
			];
		}
	}

	public static function getCategoryText($type) {
		$cats     = Category::find()->where([
			'parent_id' => 0,
			'type'      => $type,
		])->all();
		$response = [];
		foreach ($cats as $cat) {
			$response[$cat->id] = $cat->name;
			$children           = $cat->find()->where([
				'parent_id' => $cat->id,
				'type'      => $type,
			])->all();
			if ($children) {
				$response = self::getChildrenCat($children, $response, 1, $type);
			}
		}
		return $response;
	}

	public function getChildrenCat($models, $response, $level, $type) {
		$prefix = '';
		for ($i = 0; $i < $level; $i ++) {
			$prefix .= "-";
		}
		foreach ($models as $model) {
			$response[$model->id] = $prefix . $model->name;
			$children             = $model->find()->where([
				'parent_id' => $model->id,
				'type'      => $type,
			])->all();
			if ($children) {
				$response = self::getChildrenCat($children, $response, $level + 1, $type);
			}
		}
		return $response;
	}

	public function getParentCategory($type) {
		$parent = self::getCategoryText($type);
		$none   = [0 => Translate::no()];
		$result = ArrayHelper::merge($none, $parent);
		return $result;
	}

	public function getCategoryById($id) {
		$category = Category::find()->where(['id' => $id])->one();
		if ($category != null) {
			return $category->name;
		} else {
			return Translate::no();
		}
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCategoryLangs() {
		return $this->hasMany(CategoryLang::className(), ['category_id' => 'id']);
	}
}
