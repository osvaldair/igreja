<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property string $id
 * @property string $id_grupo_usuario
 * @property string $id_congregacao
 * @property string $nome
 * @property string $data_inclusao
 * @property string $login
 * @property string $senha
 *
 * @property Congregacao $idCongregacao
 * @property GrupoUsuario $idGrupoUsuario
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_grupo_usuario', 'id_congregacao'], 'required'],
            [['id', 'id_grupo_usuario', 'id_congregacao'], 'integer'],
            [['data_inclusao'], 'safe'],
            [['nome'], 'string', 'max' => 20],
            [['login'], 'string', 'max' => 15],
            [['senha'], 'string', 'max' => 12],
            [['id_congregacao'], 'exist', 'skipOnError' => true, 'targetClass' => Congregacao::className(), 'targetAttribute' => ['id_congregacao' => 'id']],
            [['id_grupo_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => GrupoUsuario::className(), 'targetAttribute' => ['id_grupo_usuario' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_grupo_usuario' => 'Id Grupo do Usuário',
            'id_congregacao' => 'Id da Congregação',
            'nome' => 'Nome do Usuário',
            'data_inclusao' => 'Data de Inclusão',
            'login' => 'Login do Usuário',
            'senha' => 'Senha do Usuário',
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
    public function getIdGrupoUsuario()
    {
        return $this->hasOne(GrupoUsuario::className(), ['id' => 'id_grupo_usuario']);
    }
}
