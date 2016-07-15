<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cad_saldo_inicial".
 *
 * @property string $id
 * @property string $data
 * @property double $saldo_ini_caixa_diario
 * @property double $saldo_ini_caixa_banco
 *
 * @property CaixaBanco[] $caixaBancos
 * @property CaixaDiario[] $caixaDiarios
 */
class CadSaldoInicial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cad_saldo_inicial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data'], 'safe'],
            [['saldo_ini_caixa_diario', 'saldo_ini_caixa_banco'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'Data',
            'saldo_ini_caixa_diario' => 'Saldo Inicial do Caixa Diário',
            'saldo_ini_caixa_banco' => 'Saldo Inicial do Caixa Banco',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaixaBancos()
    {
        return $this->hasMany(CaixaBanco::className(), ['id_cad_saldo_inicial' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaixaDiarios()
    {
        return $this->hasMany(CaixaDiario::className(), ['id_cad_saldo_inicial' => 'id']);
    }
}
