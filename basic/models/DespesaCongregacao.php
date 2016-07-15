<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "despesa_congregacao".
 *
 * @property string $id
 * @property string $id_caixa
 * @property string $id_despesa
 * @property string $id_congregacao
 * @property string $data
 * @property string $valor
 *
 * @property Caixa $idCaixa
 * @property Congregacao $idCongregacao
 * @property Despesa $idDespesa
 */
class DespesaCongregacao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'despesa_congregacao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_caixa', 'id_despesa', 'id_congregacao', 'data', 'valor'], 'required'],
            [['id_caixa', 'id_despesa', 'id_congregacao', 'valor'], 'integer'],
            [['data'], 'safe'],
            [['id_caixa'], 'exist', 'skipOnError' => true, 'targetClass' => Caixa::className(), 'targetAttribute' => ['id_caixa' => 'id']],
            [['id_congregacao'], 'exist', 'skipOnError' => true, 'targetClass' => Congregacao::className(), 'targetAttribute' => ['id_congregacao' => 'id']],
            [['id_despesa'], 'exist', 'skipOnError' => true, 'targetClass' => Despesa::className(), 'targetAttribute' => ['id_despesa' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_caixa' => 'Id Caixa',
            'id_despesa' => 'Id Despesa',
            'id_congregacao' => 'Id Congregação',
            'data' => 'Data da Despesa',
            'valor' => 'Valor da Despesa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCaixa()
    {
        return $this->hasOne(Caixa::className(), ['id' => 'id_caixa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCongregacao()
    {
        return $this->hasOne(Congregacao::className(), ['id' => 'id_congregacao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDespesa()
    {
        return $this->hasOne(Despesa::className(), ['id' => 'id_despesa']);
    }
}
