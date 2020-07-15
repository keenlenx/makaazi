<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Invoice;

/**
 * InvoiceSearch represents the model behind the search form of `backend\models\Invoice`.
 */
class InvoiceSearch extends Invoice
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoiceno', 'billtype', 'datecreated', 'datepaid', 'txncode', 'paymentmode'], 'safe'],
            [['meterno'], 'integer'],
            [['amount'], 'number'],
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
        $query = Invoice::find();

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
            'meterno' => $this->meterno,
            'amount' => $this->amount,
            'datecreated' => $this->datecreated,
            'datepaid' => $this->datepaid,
        ]);

        $query->andFilterWhere(['like', 'invoiceno', $this->invoiceno])
            ->andFilterWhere(['like', 'billtype', $this->billtype])
            ->andFilterWhere(['like', 'txncode', $this->txncode])
            ->andFilterWhere(['like', 'paymentmode', $this->paymentmode]);

        return $dataProvider;
    }
}
