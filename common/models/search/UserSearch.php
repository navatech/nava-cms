<?php
namespace common\models\search;

use common\models\User;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 */
class UserSearch extends User {

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[
				[
					'id',
					'confirmed_at',
					'blocked_at',
					'created_at',
					'updated_at',
					'flags',
					'role_id',
				],
				'integer',
			],
			[
				[
					'username',
					'email',
					'password_hash',
					'auth_key',
					'unconfirmed_email',
					'registration_ip',
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
		$query = User::find();
		// add conditions that should always apply here
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
			'sort'  => ['defaultOrder' => ['id' => SORT_DESC]],
		]);
		$this->load($params);
		if (!$this->validate()) {
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}
		// grid filtering conditions
		$query->andFilterWhere([
			'id'           => $this->id,
			'confirmed_at' => $this->confirmed_at,
			'blocked_at'   => $this->blocked_at,
			'created_at'   => $this->created_at,
			'updated_at'   => $this->updated_at,
			'flags'        => $this->flags,
			'role_id'      => $this->role_id,
		]);
		$query->andFilterWhere([
			'like',
			'username',
			$this->username,
		])->andFilterWhere([
			'like',
			'email',
			$this->email,
		])->andFilterWhere([
			'like',
			'password_hash',
			$this->password_hash,
		])->andFilterWhere([
			'like',
			'auth_key',
			$this->auth_key,
		])->andFilterWhere([
			'like',
			'unconfirmed_email',
			$this->unconfirmed_email,
		])->andFilterWhere([
			'like',
			'registration_ip',
			$this->registration_ip,
		]);
		return $dataProvider;
	}
}
