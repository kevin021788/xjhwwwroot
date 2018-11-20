<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pkey]].
 *
 * @see Pkey
 */
class PkeyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Pkey[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Pkey|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
