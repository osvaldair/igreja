<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CaixaBanco;

/**
 * CaixaBancoSearch represents the model behind the search form about `app\models\CaixaBanco`.
 */
class CaixaBancoSearch extends CaixaBanco
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_cad_saldo_inicial'], 'integer'],
            [['data', 'historico'], 'safe'],
            [['valor_receita', 'valor_despesa', 'saldo'], 'number'],
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
        $query = CaixaBanco::find();

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
            'id_cad_saldo_inicial' => $this->id_cad_saldo_inicial,
            'data' => $this->data,
            'valor_receita' => $this->valor_receita,
            'valor_despesa' => $this->valor_despesa,
            'saldo' => $this->saldo,
        ]);

        $query->andFilterWhere(['like', 'historico', $this->historico]);

        return $dataProvider;
    }
}
