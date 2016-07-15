<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupo_usuario".
 *
 * @property string $id
 * @property string $data_inclusao
 * @property string $administrador
 * @property string $avancado
 * @property string $padrao
 *
 * @property Usuario[] $usuarios
 */
class GrupoUsuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grupo_usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_inclusao'], 'safe'],
            [['administrador', 'avancado', 'padrao'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data_inclusao' => 'Data da Inclusão',
            'administrador' => 'Administrador',
            'avancado' => 'Avançado',
            'padrao' => 'Padrão',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['id_grupo_usuario' => 'id']);
    }
}
