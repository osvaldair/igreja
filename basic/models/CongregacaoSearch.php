<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Congregacao;

/**
 * CongregacaoSearch represents the model behind the search form about `app\models\Congregacao`.
 */
class CongregacaoSearch extends Congregacao
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cnpj', 'tel_fixo', 'tel_celular', 'qtde_membros'], 'integer'],
            [['nome_congregacao', 'pr_dirigente', 'email', 'data_aniversario_congreg', 'data_aniversario_pr'], 'safe'],
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
        $query = Congregacao::find();

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
            'cnpj' => $this->cnpj,
            'tel_fixo' => $this->tel_fixo,
            'tel_celular' => $this->tel_celular,
            'qtde_membros' => $this->qtde_membros,
            'data_aniversario_congreg' => $this->data_aniversario_congreg,
            'data_aniversario_pr' => $this->data_aniversario_pr,
        ]);

        $query->andFilterWhere(['like', 'nome_congregacao', $this->nome_congregacao])
            ->andFilterWhere(['like', 'pr_dirigente', $this->pr_dirigente])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
