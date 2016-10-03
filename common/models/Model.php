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

class Model extends ActiveRecord {

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
	 * {@inheritDoc}
	 */
	public static function findOneTranslated($condition) {
		return is_array($condition) ? self::find()->where($condition)->translate()->one() : self::find()
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
		clearstatcache();
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

	public function getStatus($status = null) {
		if ($status !== null) {
			return $status == 1 ? Translate::yes() : Translate::no();
		} else {
			return array(
				0 => Translate::no(),
				1 => Translate::yes(),
			);
		}
	}
}