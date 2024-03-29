<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Departamento;

/**
 * DepartamentoSearch represents the model behind the search form about `app\models\Departamento`.
 */
class DepartamentoSearch extends Departamento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_membro', 'qtde_integrantes'], 'integer'],
            [['nome_departamento', 'dirigente', 'data_congresso'], 'safe'],
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
        $query = Departamento::find();

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
            'id_membro' => $this->id_membro,
            'qtde_integrantes' => $this->qtde_integrantes,
            'data_congresso' => $this->data_congresso,
        ]);

        $query->andFilterWhere(['like', 'nome_departamento', $this->nome_departamento])
            ->andFilterWhere(['like', 'dirigente', $this->dirigente]);

        return $dataProvider;
    }
}
