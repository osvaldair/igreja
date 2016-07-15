<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departamento".
 *
 * @property string $id
 * @property string $id_membro
 * @property string $nome_departamento
 * @property string $dirigente
 * @property string $qtde_integrantes
 * @property string $data_congresso
 *
 * @property Membro $idMembro
 * @property EmiteCarteirinha[] $emiteCarteirinhas
 */
class Departamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_membro', 'dirigente'], 'required'],
            [['id_membro', 'qtde_integrantes'], 'integer'],
            [['data_congresso'], 'safe'],
            [['nome_departamento'], 'string', 'max' => 20],
            [['dirigente'], 'string', 'max' => 10],
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
            'nome_departamento' => 'Nome do Departamento',
            'dirigente' => 'Dirigente',
            'qtde_integrantes' => 'Número de Integrantes',
            'data_congresso' => 'Data do Congresso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMembro()
    {
        return $this->hasOne(Membro::className(), ['id' => 'id_membro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmiteCarteirinhas()
    {
        return $this->hasMany(EmiteCarteirinha::className(), ['id_departamento' => 'id']);
    }
}
