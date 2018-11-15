<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Culture]].
 *
 * @see Culture
 */
class CultureQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Culture[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Culture|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
