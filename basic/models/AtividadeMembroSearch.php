<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AtividadeMembro;

/**
 * AtividadeMembroSearch represents the model behind the search form about `app\models\AtividadeMembro`.
 */
class AtividadeMembroSearch extends AtividadeMembro
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_atividades', 'id_membro'], 'integer'],
            [['data'], 'safe'],
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
        $query = AtividadeMembro::find();

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
            'id_atividades' => $this->id_atividades,
            'id_membro' => $this->id_membro,
            'data' => $this->data,
        ]);

        return $dataProvider;
    }
}
