<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "house".
 *
 * @property string $h_number
 * @property int $h_apartment_id
 * @property int $h_rent
 * @property int $h_deposit
 * @property int $h_water_deposit
 * @property string $h_type
 * @property int $h_bedrooms
 */
class House extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'house';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['h_number', 'h_apartment_id', 'h_rent', 'h_deposit', 'h_water_deposit', 'h_type', 'h_bedrooms'], 'required'],
            [['h_apartment_id', 'h_rent', 'h_deposit', 'h_water_deposit', 'h_bedrooms'], 'integer'],
            [['h_number'], 'string', 'max' => 20],
            [['h_type'], 'string', 'max' => 50],
            [['h_number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'h_number' => 'H Number',
            'h_apartment_id' => 'H Apartment ID',
            'h_rent' => 'H Rent',
            'h_deposit' => 'H Deposit',
            'h_water_deposit' => 'H Water Deposit',
            'h_type' => 'H Type',
            'h_bedrooms' => 'H Bedrooms',
        ];
    }

    /**
     * {@inheritdoc}
     * @return HouseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HouseQuery(get_called_class());
    }
}
