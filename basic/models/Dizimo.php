<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dizimo".
 *
 * @property string $id
 * @property string $id_membro
 * @property string $id_congregacao
 * @property string $data
 * @property double $valor
 *
 * @property Congregacao $idCongregacao
 * @property Membro $idMembro
 */
class Dizimo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dizimo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_membro', 'id_congregacao'], 'required'],
            [['id', 'id_membro', 'id_congregacao'], 'integer'],
            [['data'], 'safe'],
            [['valor'], 'number'],
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
            'id_membro' => 'Id Membro',
            'id_congregacao' => 'Id Congregação',
            'data' => 'Data',
            'valor' => 'Valor do Dízimo',
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
