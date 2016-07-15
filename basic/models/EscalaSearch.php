<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Escala;

/**
 * EscalaSearch represents the model behind the search form about `app\models\Escala`.
 */
class EscalaSearch extends Escala
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_atividades', 'id_membro', 'id_congregacao'], 'integer'],
            [['dia_escala', 'local_escala', 'horario_escala'], 'safe'],
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
        $query = Escala::find();

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
            'id_congregacao' => $this->id_congregacao,
            'dia_escala' => $this->dia_escala,
            'horario_escala' => $this->horario_escala,
        ]);

        $query->andFilterWhere(['like', 'local_escala', $this->local_escala]);

        return $dataProvider;
    }
}
