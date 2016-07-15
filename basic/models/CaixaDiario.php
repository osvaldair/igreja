<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "caixa_diario".
 *
 * @property string $id
 * @property string $id_cad_saldo_inicial
 * @property string $data
 * @property double $valor_receita
 * @property double $valor_despesa
 * @property string $historico
 * @property double $saldo
 *
 * @property Caixa[] $caixas
 * @property CadSaldoInicial $idCadSaldoInicial
 */
class CaixaDiario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'caixa_diario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cad_saldo_inicial'], 'required'],
            [['id_cad_saldo_inicial'], 'integer'],
            [['data'], 'safe'],
            [['valor_receita', 'valor_despesa', 'saldo'], 'number'],
            [['historico'], 'string', 'max' => 45],
            [['id_cad_saldo_inicial'], 'exist', 'skipOnError' => true, 'targetClass' => CadSaldoInicial::className(), 'targetAttribute' => ['id_cad_saldo_inicial' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_cad_saldo_inicial' => 'Id Cad Saldo Inicial',
            'data' => 'Data',
            'valor_receita' => 'Valor da Receita',
            'valor_despesa' => 'Valor da Despesa',
            'historico' => 'Histórico',
            'saldo' => 'Saldo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaixas()
    {
        return $this->hasMany(Caixa::className(), ['id_caixa_diario' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCadSaldoInicial()
    {
        return $this->hasOne(CadSaldoInicial::className(), ['id' => 'id_cad_saldo_inicial']);
    }
}
