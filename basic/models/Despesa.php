<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "despesa".
 *
 * @property string $id
 * @property string $nome
 *
 * @property DespesaCongregacao[] $despesaCongregacaos
 */
class Despesa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'despesa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome da Despesa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDespesaCongregacaos()
    {
        return $this->hasMany(DespesaCongregacao::className(), ['id_despesa' => 'id']);
    }
}
