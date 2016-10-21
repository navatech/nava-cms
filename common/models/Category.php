<?php
namespace common\models;

use navatech\language\Translate;
use Yii;
use yii\db\ActiveQuery;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "category".
 *
 * @property integer        $id
 * @property integer        $parent_id
 * @property integer        $type
 * @property integer        $order
 * @property string         $image
 * @property integer        $status
 * @property $this          $parent
 * @property CategoryLang[] $categoryLangs
 * @property Product[]      $products
 * @property Post[]         $posts
 * @property string         $name
 */
class Category extends Model {

	const TYPE_ALL     = 0;

	const TYPE_PRODUCT = 1;

	const TYPE_POST    = 2;

	/**@var UploadedFile */
	public $img;

	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return 'category';
	}

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
				[
					'img',
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

	/**
	 * {@inheritDoc}
	 */
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
	public function attributeLabels() {
		return [
			'id'        => 'No.',
			'parent_id' => Translate::category_parent(),
			'type'      => Translate::type(),
			'order'     => Translate::sort_order(),
			'image'     => Translate::image(),
			'status'    => Translate::status(),
		];
	}

	/**
	 * @return ActiveQuery
	 */
	public function getParent() {
		return self::find()->where(['parent_id' => $this->id]);
	}

	/**
	 * @return ActiveQuery
	 */
	public function getCategoryLangs() {
		return $this->hasMany(CategoryLang::className(), ['category_id' => 'id']);
	}

	/**
	 * @return ActiveQuery
	 */
	public function getPosts() {
		return $this->hasMany(Post::className(), ['id' => 'category_id']);
	}

	/**
	 * @return ActiveQuery
	 */
	public function getProducts() {
		return $this->hasMany(Product::className(), ['id' => 'category_id']);
	}

	/**
	 * @param int    $type
	 * @param int    $parent_id
	 * @param string $suffix
	 *
	 * @return array
	 */
	public static function getDependCategories($type = self::TYPE_ALL, $parent_id = 0, $suffix = '') {
		if ($type == self::TYPE_ALL) {
			$type = [
				1,
				2,
			];
		}
		/**@var self[] $models */
		$models   = Category::find()->where([
			'parent_id' => $parent_id,
			'type'      => $type,
		])->all();
		$response = [];
		foreach ($models as $model) {
			$response[$model->id] = $suffix != '' ? ($suffix . ' ') : '' . $model->name;
			$response             = ArrayHelper::merge($response, self::getDependCategories($type, $model->id, '—'));
		}
		return $response;
	}
}
