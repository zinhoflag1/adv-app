<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SaidaVenda;

/**
 * SaidaVendaSearch represents the model behind the search form about `app\models\SaidaVenda`.
 */
class SaidaVendaSearch extends SaidaVenda
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cliente_id'], 'integer'],
            [['data_venda', 'forma_pgto', 'nota', 'tipo'], 'safe'],
            [['total', 'frete', 'taxa_ml', 'desconto_val', 'perc_desc'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SaidaVenda::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'cliente_id' => $this->cliente_id,
            'data_venda' => $this->data_venda,
            'total' => $this->total,
            'frete' => $this->frete,
            'taxa_ml' => $this->taxa_ml,
            'desconto_val' => $this->desconto_val,
            'perc_desc' => $this->perc_desc,
        ]);

        $query->andFilterWhere(['like', 'forma_pgto', $this->forma_pgto])
            ->andFilterWhere(['like', 'nota', $this->nota])
            ->andFilterWhere(['like', 'tipo', $this->tipo]);

        return $dataProvider;
    }
}
