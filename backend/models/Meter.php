<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "meter".
 *
 * @property int $meterno
 * @property int $serialnumber
 */
class Meter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['meterno', 'serialnumber'], 'required'],
            [['meterno', 'serialnumber'], 'integer'],
            [['meterno'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'meterno' => 'Meterno',
            'serialnumber' => 'Serialnumber',
        ];
    }

    /**
     * {@inheritdoc}
     * @return MeterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MeterQuery(get_called_class());
    }
}
