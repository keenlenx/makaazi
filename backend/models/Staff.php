<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property int $s_id
 * @property string $s_name
 * @property int $s_phone
 * @property string $s_role
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['s_id', 's_name', 's_phone', 's_role'], 'required'],
            [['s_id', 's_phone'], 'integer'],
            [['s_name'], 'string', 'max' => 100],
            [['s_role'], 'string', 'max' => 50],
            [['s_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            's_id' => 'S ID',
            's_name' => 'S Name',
            's_phone' => 'S Phone',
            's_role' => 'S Role',
        ];
    }

    /**
     * {@inheritdoc}
     * @return StaffQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StaffQuery(get_called_class());
    }
}
