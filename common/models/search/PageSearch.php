<?php
namespace common\models\search;

use common\models\Page;
use common\models\PageLang;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

/**
 * PageSearch represents the model behind the search form of `common\models\Page`.
 */
class PageSearch extends Page {

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[
				[
					'id',
					'status',
					'category_id',
				],
				'integer',
			],
			[
				[
					'image',
					'name',
				],
				'safe',
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function scenarios() {
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}

	/**
	 * Creates data provider instance with search query applied
	 *
	 * @param array $params
	 *
	 * @return ActiveDataProvider
	 */
	public function search($params) {
		$query        = Page::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);
		$this->load($params);
		if (!$this->validate()) {
			return $dataProvider;
		}
		if ($this->name != '') {
			$pageLangs = PageLang::find()->where([
				'LIKE',
				'name',
				$this->name,
			])->all();
			$query->andWhere([
				'IN',
				'id',
				ArrayHelper::map($pageLangs, 'id', 'page_id'),
			]);
		}
		// grid filtering conditions
		$query->andFilterWhere([
			'id'          => $this->id,
			'status'      => $this->status,
			'category_id' => $this->category_id,
		]);
		$query->andFilterWhere([
			'like',
			'image',
			$this->image,
		]);
		return $dataProvider;
	}
}
