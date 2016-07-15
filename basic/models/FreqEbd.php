<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "freq_ebd".
 *
 * @property string $id
 * @property string $id_membro
 * @property string $id_congregacao
 * @property string $data
 * @property string $presenca
 * @property string $professor
 *
 * @property Congregacao $idCongregacao
 * @property Membro $idMembro
 */
class FreqEbd extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'freq_ebd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_membro', 'id_congregacao', 'presenca', 'professor'], 'required'],
            [['id_membro', 'id_congregacao'], 'integer'],
            [['data'], 'safe'],
            [['presenca'], 'string'],
            [['professor'], 'string', 'max' => 255],
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
            'id_membro' => 'Id do Membro',
            'id_congregacao' => 'Id da Congregação',
            'data' => 'Data da Aula',
            'presenca' => 'Presença',
            'professor' => 'Professor',
        ];
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
