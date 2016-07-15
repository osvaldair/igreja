<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atividade_membro".
 *
 * @property string $id
 * @property string $id_atividades
 * @property string $id_membro
 * @property string $data
 *
 * @property Atividades $idAtividades
 * @property Membro $idMembro
 */
class AtividadeMembro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'atividade_membro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_atividades', 'id_membro', 'data'], 'required'],
            [['id_atividades', 'id_membro'], 'integer'],
            [['data'], 'safe'],
            [['id_atividades'], 'exist', 'skipOnError' => true, 'targetClass' => Atividades::className(), 'targetAttribute' => ['id_atividades' => 'id']],
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
            'id_atividades' => 'Id da Atividade',
            'id_membro' => 'Id Membro',
            'data' => 'Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAtividades()
    {
        return $this->hasOne(Atividades::className(), ['id' => 'id_atividades']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMembro()
    {
        return $this->hasOne(Membro::className(), ['id' => 'id_membro']);
    }
}
