<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Readings;

/**
 * ReadingsSearch represents the model behind the search form of `backend\models\Readings`.
 */
class ReadingsSearch extends Readings
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['txn_code', 'meterno'], 'integer'],
            [['readingdate'], 'safe'],
            [['currentread', 'previousread'], 'number'],
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
        $query = Readings::find();

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
            'txn_code' => $this->txn_code,
            'meterno' => $this->meterno,
            'readingdate' => $this->readingdate,
            'currentread' => $this->currentread,
            'previousread' => $this->previousread,
        ]);

        return $dataProvider;
    }
}
