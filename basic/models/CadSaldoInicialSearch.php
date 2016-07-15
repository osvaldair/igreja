<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CadSaldoInicial;

/**
 * CadSaldoInicialSearch represents the model behind the search form about `app\models\CadSaldoInicial`.
 */
class CadSaldoInicialSearch extends CadSaldoInicial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'saldo_ini_caixa_diario', 'saldo_ini_caixa_banco'], 'integer'],
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
        $query = CadSaldoInicial::find();

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
            'data' => $this->data,
            'saldo_ini_caixa_diario' => $this->saldo_ini_caixa_diario,
            'saldo_ini_caixa_banco' => $this->saldo_ini_caixa_banco,
        ]);

        return $dataProvider;
    }
}
