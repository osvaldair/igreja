<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "caixa".
 *
 * @property string $id
 * @property string $id_caixa_banco
 * @property string $id_caixa_diario
 * @property string $data
 * @property double $saldo
 *
 * @property CaixaBanco $idCaixaBanco
 * @property CaixaDiario $idCaixaDiario
 * @property Despesa[] $despesas
 * @property Receita[] $receitas
 */
class Caixa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'caixa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_caixa_banco', 'id_caixa_diario', 'saldo'], 'required'],
            [['id_caixa_banco', 'id_caixa_diario'], 'integer'],
            [['data'], 'safe'],
            [['saldo'], 'number'],
            [['id_caixa_banco'], 'exist', 'skipOnError' => true, 'targetClass' => CaixaBanco::className(), 'targetAttribute' => ['id_caixa_banco' => 'id']],
            [['id_caixa_diario'], 'exist', 'skipOnError' => true, 'targetClass' => CaixaDiario::className(), 'targetAttribute' => ['id_caixa_diario' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_caixa_banco' => 'Id Caixa Banco',
            'id_caixa_diario' => 'Id Caixa Diário',
            'data' => 'Data',
            'saldo' => 'Saldo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCaixaBanco()
    {
        return $this->hasOne(CaixaBanco::className(), ['id' => 'id_caixa_banco']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCaixaDiario()
    {
        return $this->hasOne(CaixaDiario::className(), ['id' => 'id_caixa_diario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDespesas()
    {
        return $this->hasMany(Despesa::className(), ['id_caixa' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceitas()
    {
        return $this->hasMany(Receita::className(), ['id_caixa' => 'id']);
    }
}
