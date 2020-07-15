<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pricing".
 *
 * @property int $code
 * @property string $bill_type
 * @property float $price
 */
class Pricing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pricing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bill_type', 'price'], 'required'],
            [['price'], 'number'],
            [['bill_type'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'bill_type' => 'Bill Type',
            'price' => 'Price',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PricingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PricingQuery(get_called_class());
    }
}
