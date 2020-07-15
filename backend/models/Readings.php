<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "readings".
 *
 * @property int $txn_code
 * @property int $meterno
 * @property string $readingdate
 * @property float $currentread
 * @property float $previousread
 */
class Readings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'readings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['meterno', 'currentread', 'previousread'], 'required'],
            [['meterno'], 'integer'],
            [['readingdate'], 'safe'],
            [['currentread', 'previousread'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'txn_code' => 'Txn Code',
            'meterno' => 'Meterno',
            'readingdate' => 'Readingdate',
            'currentread' => 'Currentread',
            'previousread' => 'Previousread',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ReadingsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ReadingsQuery(get_called_class());
    }
}
