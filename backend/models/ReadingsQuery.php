<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Readings]].
 *
 * @see Readings
 */
class ReadingsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Readings[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Readings|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
