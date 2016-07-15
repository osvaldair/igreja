<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GrupoUsuario;

/**
 * GrupoUsuarioSearch represents the model behind the search form about `app\models\GrupoUsuario`.
 */
class GrupoUsuarioSearch extends GrupoUsuario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['data_inclusao', 'administrador', 'avancado', 'padrao'], 'safe'],
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
        $query = GrupoUsuario::find();

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
            'data_inclusao' => $this->data_inclusao,
        ]);

        $query->andFilterWhere(['like', 'administrador', $this->administrador])
            ->andFilterWhere(['like', 'avancado', $this->avancado])
            ->andFilterWhere(['like', 'padrao', $this->padrao]);

        return $dataProvider;
    }
}
