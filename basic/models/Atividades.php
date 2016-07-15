<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atividades".
 *
 * @property string $id
 * @property string $nome
 *
 * @property AtividadeMembro[] $atividadeMembros
 * @property Escala[] $escalas
 */
class Atividades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'atividades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            'nome' => 'Nome da Atividade',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtividadeMembros()
    {
        return $this->hasMany(AtividadeMembro::className(), ['id_atividades' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscalas()
    {
        return $this->hasMany(Escala::className(), ['id_atividades' => 'id']);
    }
}
