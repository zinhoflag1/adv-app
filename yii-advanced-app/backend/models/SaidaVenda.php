<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "saida_venda".
 *
 * @property integer $id
 * @property integer $cliente_id
 * @property string $data_venda
 * @property string $total
 * @property string $forma_pgto
 * @property string $frete
 * @property string $taxa_ml
 * @property string $nota
 * @property string $tipo
 * @property string $desconto_val
 * @property double $perc_desc
 */
class SaidaVenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'saida_venda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cliente_id'], 'integer'],
            [['data_venda'], 'safe'],
            [['total', 'frete', 'taxa_ml', 'desconto_val', 'perc_desc'], 'number'],
            [['forma_pgto'], 'string', 'max' => 45],
            [['nota'], 'string', 'max' => 255],
            [['tipo'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Código',
            'cliente_id' => 'Cliente',
            'data_venda' => 'Data',
            'total' => 'Total R$',
            'forma_pgto' => 'Forma Pagto',
            'frete' => 'Frete R$',
            'taxa_ml' => 'Tx ML',
            'nota' => 'Nota',
            'tipo' => 'Tipo Cesta Venda ou Orcamento',
            'desconto_val' => 'Valor Desconto',
            'perc_desc' => 'Percentual Desconto',
        ];
    }

    /**
     * @inheritdoc
     * @return SaidaVendaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SaidaVendaQuery(get_called_class());
    }
}
