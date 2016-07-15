<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CargoMembro;

/**
 * CargoMembroSearch represents the model behind the search form about `app\models\CargoMembro`.
 */
class CargoMembroSearch extends CargoMembro
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_membro', 'id_cargo'], 'integer'],
            [['data_inicio', 'data_termino', 'status'], 'safe'],
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
        $query = CargoMembro::find();

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
            'id_cargo' => $this->id_cargo,
            'data_inicio' => $this->data_inicio,
            'data_termino' => $this->data_termino,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
