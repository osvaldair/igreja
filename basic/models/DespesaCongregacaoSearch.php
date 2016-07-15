<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DespesaCongregacao;

/**
 * DespesaCongregacaoSearch represents the model behind the search form about `app\models\DespesaCongregacao`.
 */
class DespesaCongregacaoSearch extends DespesaCongregacao
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_caixa', 'id_despesa', 'id_congregacao', 'valor'], 'integer'],
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
        $query = DespesaCongregacao::find();

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
            'id_despesa' => $this->id_despesa,
            'id_congregacao' => $this->id_congregacao,
            'data' => $this->data,
            'valor' => $this->valor,
        ]);

        return $dataProvider;
    }
}
