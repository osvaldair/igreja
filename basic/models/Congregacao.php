<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "congregacao".
 *
 * @property string $id
 * @property string $nome_congregacao
 * @property string $cnpj
 * @property string $pr_dirigente
 * @property string $tel_fixo
 * @property string $tel_celular
 * @property string $email
 * @property string $qtde_membros
 * @property string $data_aniversario_congreg
 * @property string $data_aniversario_pr
 *
 * @property Atividades[] $atividades
 * @property Despesa[] $despesas
 * @property Dizimo[] $dizimos
 * @property Escala[] $escalas
 * @property FreqEbd[] $freqEbds
 * @property Membro[] $membros
 * @property Receita[] $receitas
 * @property Usuario[] $usuarios
 */
class Congregacao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'congregacao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome_congregacao', 'pr_dirigente', 'email', 'qtde_membros', 'data_aniversario_congreg', 'data_aniversario_pr'], 'required'],
            [['cnpj', 'tel_fixo', 'tel_celular', 'qtde_membros'], 'integer'],
            [['data_aniversario_congreg', 'data_aniversario_pr'], 'safe'],
            [['nome_congregacao', 'pr_dirigente', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome_congregacao' => 'Nome da Congregação',
            'cnpj' => 'CNPJ',
            'pr_dirigente' => 'Pastor Dirigente',
            'tel_fixo' => 'Telefone Fixo',
            'tel_celular' => 'Telefone Celular',
            'email' => 'E-mail',
            'qtde_membros' => 'Nº de Membros',
            'data_aniversario_congreg' => 'Data de Aniversário da Congregação',
            'data_aniversario_pr' => 'Data de Aniversário do Pastor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtividades()
    {
        return $this->hasMany(Atividades::className(), ['id_congregacao' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDespesas()
    {
        return $this->hasMany(Despesa::className(), ['id_congregacao' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDizimos()
    {
        return $this->hasMany(Dizimo::className(), ['id_congregacao' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscalas()
    {
        return $this->hasMany(Escala::className(), ['id_congregacao' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFreqEbds()
    {
        return $this->hasMany(FreqEbd::className(), ['id_congregacao' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembros()
    {
        return $this->hasMany(Membro::className(), ['id_congregacao' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceitas()
    {
        return $this->hasMany(Receita::className(), ['id_congregacao' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['id_congregacao' => 'id']);
    }
}
