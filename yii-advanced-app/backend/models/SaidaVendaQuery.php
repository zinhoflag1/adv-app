<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[SaidaVenda]].
 *
 * @see SaidaVenda
 */
class SaidaVendaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return SaidaVenda[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SaidaVenda|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
