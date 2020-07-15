<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "invoice".
 *
 * @property string $invoiceno
 * @property int $meterno
 * @property string $billtype
 * @property float $amount
 * @property string $datecreated
 * @property string $datepaid
 * @property string $txncode
 * @property string $paymentmode
 */
class Invoice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invoice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoiceno', 'meterno', 'billtype', 'amount', 'datecreated', 'datepaid', 'txncode', 'paymentmode'], 'required'],
            [['meterno'], 'integer'],
            [['amount'], 'number'],
            [['datecreated', 'datepaid'], 'safe'],
            [['invoiceno', 'txncode', 'paymentmode'], 'string', 'max' => 20],
            [['billtype'], 'string', 'max' => 50],
            [['invoiceno'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'invoiceno' => 'Invoiceno',
            'meterno' => 'Meterno',
            'billtype' => 'Billtype',
            'amount' => 'Amount',
            'datecreated' => 'Datecreated',
            'datepaid' => 'Datepaid',
            'txncode' => 'Txncode',
            'paymentmode' => 'Paymentmode',
        ];
    }

    /**
     * {@inheritdoc}
     * @return InvoicesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InvoicesQuery(get_called_class());
    }
}
