<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "endereco".
 *
 * @property string $id
 * @property string $id_membro
 * @property string $rua
 * @property string $numero
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $pais
 *
 * @property Membro $idMembro
 */
class Endereco extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'endereco';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_membro', 'rua', 'numero', 'bairro', 'cidade', 'estado', 'pais'], 'required'],
            [['id_membro'], 'integer'],
            [['rua', 'bairro', 'cidade', 'estado', 'pais'], 'string', 'max' => 100],
            [['numero'], 'string', 'max' => 10],
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
            'rua' => 'Rua',
            'numero' => 'Número',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'pais' => 'País',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMembro()
    {
        return $this->hasOne(Membro::className(), ['id' => 'id_membro']);
    }
}
