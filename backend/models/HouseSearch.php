<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\House;

/**
 * HouseSearch represents the model behind the search form of `backend\models\House`.
 */
class HouseSearch extends House
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['h_number', 'h_type'], 'safe'],
            [['h_apartment_id', 'h_rent', 'h_deposit', 'h_water_deposit', 'h_bedrooms'], 'integer'],
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
        $query = House::find();

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
            'h_apartment_id' => $this->h_apartment_id,
            'h_rent' => $this->h_rent,
            'h_deposit' => $this->h_deposit,
            'h_water_deposit' => $this->h_water_deposit,
            'h_bedrooms' => $this->h_bedrooms,
        ]);

        $query->andFilterWhere(['like', 'h_number', $this->h_number])
            ->andFilterWhere(['like', 'h_type', $this->h_type]);

        return $dataProvider;
    }
}
