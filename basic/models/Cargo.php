<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cargo".
 *
 * @property string $id
 * @property string $data_ordenacao
 * @property string $nome
 *
 * @property CargoMembro[] $cargoMembros
 */
class Cargo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cargo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_ordenacao', 'nome'], 'required'],
            [['data_ordenacao'], 'safe'],
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
            'data_ordenacao' => 'Data de Ordenação',
            'nome' => 'Nome do Cargo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCargoMembros()
    {
        return $this->hasMany(CargoMembro::className(), ['id_cargo' => 'id']);
    }
}
