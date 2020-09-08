<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tenants".
 *
 * @property int $t_id
 * @property string $t_name
 * @property int $t_mobile
 * @property string $t_email
 * @property int $t_agreed_to_terms
 */
class Tenants extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tenants';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t_id', 't_name', 't_mobile', 't_email', 't_agreed_to_terms'], 'required'],
            [['t_id', 't_mobile', 't_agreed_to_terms'], 'integer'],
            [['t_name'], 'string', 'max' => 100],
            [['t_email'], 'string', 'max' => 50],
            [['t_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            't_id' => 'T ID',
            't_name' => 'T Name',
            't_mobile' => 'T Mobile',
            't_email' => 'T Email',
            't_agreed_to_terms' => 'T Agreed To Terms',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TenantsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TenantsQuery(get_called_class());
    }
}
