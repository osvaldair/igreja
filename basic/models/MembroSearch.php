<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Membro;

/**
 * MembroSearch represents the model behind the search form about `app\models\Membro`.
 */
class MembroSearch extends Membro
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_congregacao', 'rg', 'cpf', 'qtde_filhos', 'motivo_entrada', 'tel_fixo', 'tel_celular'], 'integer'],
            [['nome', 'sexo', 'dt_nascimento', 'naturalidade', 'estado_civil', 'conjugue', 'nome_mae', 'nome_pai', 'email', 'dt_batismo', 'batizado_es', 'dt_membresia', 'biblia', 'dizimista', 'escolaridade', 'igreja_anterior', 'profissao', 'ebd'], 'safe'],
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
        $query = Membro::find();

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
            'id_congregacao' => $this->id_congregacao,
            'rg' => $this->rg,
            'cpf' => $this->cpf,
            'dt_nascimento' => $this->dt_nascimento,
            'qtde_filhos' => $this->qtde_filhos,
            'dt_batismo' => $this->dt_batismo,
            'dt_membresia' => $this->dt_membresia,
            'motivo_entrada' => $this->motivo_entrada,
            'tel_fixo' => $this->tel_fixo,
            'tel_celular' => $this->tel_celular,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'naturalidade', $this->naturalidade])
            ->andFilterWhere(['like', 'estado_civil', $this->estado_civil])
            ->andFilterWhere(['like', 'conjugue', $this->conjugue])
            ->andFilterWhere(['like', 'nome_mae', $this->nome_mae])
            ->andFilterWhere(['like', 'nome_pai', $this->nome_pai])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'batizado_es', $this->batizado_es])
            ->andFilterWhere(['like', 'biblia', $this->biblia])
            ->andFilterWhere(['like', 'dizimista', $this->dizimista])
            ->andFilterWhere(['like', 'escolaridade', $this->escolaridade])
            ->andFilterWhere(['like', 'igreja_anterior', $this->igreja_anterior])
            ->andFilterWhere(['like', 'profissao', $this->profissao])
            ->andFilterWhere(['like', 'ebd', $this->ebd]);

        return $dataProvider;
    }
}
