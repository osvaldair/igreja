<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "escala".
 *
 * @property string $id
 * @property string $id_atividades
 * @property string $id_membro
 * @property string $id_congregacao
 * @property string $dia_escala
 * @property string $local_escala
 * @property string $horario_escala
 *
 * @property Atividades $idAtividades
 * @property Congregacao $idCongregacao
 * @property Membro $idMembro
 */
class Escala extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'escala';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_atividades', 'id_membro', 'id_congregacao'], 'required'],
            [['id_atividades', 'id_membro', 'id_congregacao'], 'integer'],
            [['dia_escala', 'horario_escala'], 'safe'],
            [['local_escala'], 'string', 'max' => 10],
            [['id_atividades'], 'exist', 'skipOnError' => true, 'targetClass' => Atividades::className(), 'targetAttribute' => ['id_atividades' => 'id']],
            [['id_congregacao'], 'exist', 'skipOnError' => true, 'targetClass' => Congregacao::className(), 'targetAttribute' => ['id_congregacao' => 'id']],
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
            'id_atividades' => 'Id Atividades',
            'id_membro' => 'Id Membro',
            'id_congregacao' => 'Id Congregação',
            'dia_escala' => 'Dia da Escala',
            'local_escala' => 'Local da Escala',
            'horario_escala' => 'Horário da Escala',
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
    public function getIdCongregacao()
    {
        return $this->hasOne(Congregacao::className(), ['id' => 'id_congregacao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMembro()
    {
        return $this->hasOne(Membro::className(), ['id' => 'id_membro']);
    }
}
