<?php
/**
 * Created by Navatech.
 * @project yii2-cms
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    8/27/2016
 * @time    11:28 AM
 */
namespace common\models;

use navatech\language\components\LanguageBehavior;
use navatech\language\db\ActiveRecord;
use navatech\language\db\LanguageQuery;
use navatech\language\Translate;
use Yii;
use yii\web\UploadedFile;

/**
 * @property string $statusText
 */
class Model extends ActiveRecord {

	const  STATUS_NO  = 0;

	const  STATUS_YES = 1;

	const  STATUS     = [
		0,
		1,
	];

	/**
	 * {@inheritDoc}
	 */
	public function behaviors($attributes = null) {
		if ($attributes != null) {
			return [
				'ml' => [
					'class'      => LanguageBehavior::className(),
					'attributes' => $attributes,
				],
			];
		}
		return parent::behaviors();
	}

	/**
	 * {@inheritDoc}
	 */
	public static function find() {
		return new LanguageQuery(get_called_class());
	}

	/**
	 * @param $condition
	 *
	 * @return static|null|\yii\db\ActiveRecord
	 */
	public static function findOneTranslated($condition) {
		return is_array($condition) ? static::find()->where($condition)->translate()->one() : static::find()
			->where(['id' => $condition])
			->translate()
			->one();
	}

	/**
	 * fetch stored image file name with complete path
	 *
	 * @param string $picture
	 *
	 * @return string
	 */
	public function getPictureFile($picture = '') {
		$dir = Yii::getAlias('@app/web') . '/uploads/' . $this->tableName() . '/';
		return isset($this->$picture) ? $dir . $this->$picture : null;
	}

	/**
	 * fetch stored image url
	 *
	 * @param string $picture
	 *
	 * @return string
	 */
	public function getPictureUrl($picture = '') {
		Yii::$app->params['uploadUrl'] = Yii::$app->urlManager->baseUrl . '/uploads/' . $this->tableName() . '/';
		$image                         = !empty($this->$picture) ? $this->$picture : Yii::$app->urlManager->baseUrl . '/uploads/no_image_thumb.gif';
		if (is_file(Yii::getAlias("@app/web") . '/uploads/' . $this->tableName() . '/' . $image)) {
			return Yii::$app->params['uploadUrl'] . $image;
		} else {
			return $image;
		}
	}

	/**
	 * Process upload of image
	 *
	 * @param string $picture
	 *
	 * @return mixed the uploaded image instance
	 */
	public function uploadPicture($picture = '') {
		$img = UploadedFile::getInstance($this, 'img');
		if (empty($img)) {
			return false;
		}
		$dir = Yii::getAlias('@app/web') . '/uploads/' . $this->tableName() . '/';
		if (!is_dir($dir)) {
			@mkdir($dir, 0777, true);
		}
		$ext            = $img->getExtension();
		$this->$picture = $this->getPrimaryKey() . '_image' . ".{$ext}";
		return $img;
	}

	/**
	 * @return string
	 */
	public function getStatusText() {
		return $this->getAttribute('status') == static::STATUS_NO ? Translate::no() : Translate::yes();
	}

	/**
	 * For filter on grid
	 * @return array
	 */
	public static function filter() {
		return [
			Translate::no(),
			Translate::yes(),
		];
	}
}