<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Receita;

/**
 * ReceitaSearch represents the model behind the search form about `app\models\Receita`.
 */
class ReceitaSearch extends Receita
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_caixa', 'id_congregacao'], 'integer'],
            [['data_receita'], 'safe'],
            [['valor_receita', 'oferta', 'doacao', 'campanha', 'evento', 'cantina', 'receb_emprestimo', 'venda_imobilizado', 'receita_financeira'], 'number'],
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
        $query = Receita::find();

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
            'id_caixa' => $this->id_caixa,
            'id_congregacao' => $this->id_congregacao,
            'data_receita' => $this->data_receita,
            'valor_receita' => $this->valor_receita,
            'oferta' => $this->oferta,
            'doacao' => $this->doacao,
            'campanha' => $this->campanha,
            'evento' => $this->evento,
            'cantina' => $this->cantina,
            'receb_emprestimo' => $this->receb_emprestimo,
            'venda_imobilizado' => $this->venda_imobilizado,
            'receita_financeira' => $this->receita_financeira,
        ]);

        return $dataProvider;
    }
}
