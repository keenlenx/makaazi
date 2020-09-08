<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tenants;

/**
 * TenantsSearch represents the model behind the search form of `backend\models\Tenants`.
 */
class TenantsSearch extends Tenants
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t_id', 't_mobile', 't_agreed_to_terms'], 'integer'],
            [['t_name', 't_email'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
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
    public function search($params)
    {
        $query = Tenants::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            't_id' => $this->t_id,
            't_mobile' => $this->t_mobile,
            't_agreed_to_terms' => $this->t_agreed_to_terms,
        ]);

        $query->andFilterWhere(['like', 't_name', $this->t_name])
            ->andFilterWhere(['like', 't_email', $this->t_email]);

        return $dataProvider;
    }
}
