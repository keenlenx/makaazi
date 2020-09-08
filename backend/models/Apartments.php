<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "apartments".
 *
 * @property int $a_id
 * @property string $a_name
 * @property string $a_location
 * @property int $a_capacity
 */
class Apartments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'apartments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['a_name', 'a_location', 'a_capacity'], 'required'],
            [['a_capacity'], 'integer'],
            [['a_name'], 'string', 'max' => 50],
            [['a_location'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'a_id' => 'A ID',
            'a_name' => 'A Name',
            'a_location' => 'A Location',
            'a_capacity' => 'A Capacity',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ApartmentsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ApartmentsQuery(get_called_class());
    }
}
