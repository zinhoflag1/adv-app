<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id Código
 * @property string $nome Nome
 * @property string $cpf_cnpj CPF/CNPJ
 * @property string $endereco Endereço
 * @property string $tel Telefone
 * @property string $cel Celular
 * @property string $nota Nota
 *
 * @property Aluguel[] $aluguels
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 70],
            [['cpf_cnpj'], 'string', 'max' => 45],
            [['endereco'], 'string', 'max' => 120],
            [['tel', 'cel'], 'string', 'max' => 15],
            [['nota'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Código'),
            'nome' => Yii::t('app', 'Nome'),
            'cpf_cnpj' => Yii::t('app', 'CPF/CNPJ'),
            'endereco' => Yii::t('app', 'Endereço'),
            'tel' => Yii::t('app', 'Telefone'),
            'cel' => Yii::t('app', 'Celular'),
            'nota' => Yii::t('app', 'Nota'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAluguels()
    {
        return $this->hasMany(Aluguel::className(), ['cliente_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ClienteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClienteQuery(get_called_class());
    }
}
