<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cargo_membro".
 *
 * @property string $id
 * @property string $id_membro
 * @property string $id_cargo
 * @property string $data_inicio
 * @property string $data_termino
 * @property string $status
 *
 * @property Cargo $idCargo
 * @property Membro $idMembro
 */
class CargoMembro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cargo_membro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_membro', 'id_cargo', 'data_inicio'], 'required'],
            [['id_membro', 'id_cargo'], 'integer'],
            [['data_inicio', 'data_termino'], 'safe'],
            [['status'], 'string'],
            [['id_cargo'], 'exist', 'skipOnError' => true, 'targetClass' => Cargo::className(), 'targetAttribute' => ['id_cargo' => 'id']],
            [['id_membro'], 'exist', 'skipOnError' => true, 'targetClass' => Membro::className(), 'targetAttribute' => ['id_membro' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_membro' => 'Id do Membro',
            'id_cargo' => 'Id do Cargo',
            'data_inicio' => 'Data de Início',
            'data_termino' => 'Data de Término',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCargo()
    {
        return $this->hasOne(Cargo::className(), ['id' => 'id_cargo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMembro()
    {
        return $this->hasOne(Membro::className(), ['id' => 'id_membro']);
    }
}
