<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "membro".
 *
 * @property string $id
 * @property string $id_congregacao
 * @property string $nome
 * @property string $rg
 * @property string $cpf
 * @property string $sexo
 * @property string $dt_nascimento
 * @property string $naturalidade
 * @property string $estado_civil
 * @property string $conjugue
 * @property string $nome_mae
 * @property string $nome_pai
 * @property string $qtde_filhos
 * @property string $status
 * @property string $email
 * @property string $dt_batismo
 * @property string $batizado_es
 * @property string $dt_membresia
 * @property string $biblia
 * @property string $dizimista
 * @property string $motivo_entrada
 * @property string $escolaridade
 * @property string $igreja_anterior
 * @property string $tel_fixo
 * @property string $tel_celular
 * @property string $profissao
 * @property string $ebd
 *
 * @property CargoMembro[] $cargoMembros
 * @property Departamento[] $departamentos
 * @property Dizimo[] $dizimos
 * @property Endereco[] $enderecos
 * @property Escala[] $escalas
 * @property FreqEbd[] $freqEbds
 * @property Congregacao $idCongregacao
 */
class Membro extends \yii\db\ActiveRecord
{
    const SEXO_FEMININO = "Feminino";
    const SEXO_MASCULINO = "Masculino";
    const ESTADO_CIVIL_SOLTEIRO = "Solteiro";
    const ESTADO_CIVIL_CASADO = "Casado";
    const ESTADO_CIVIL_DIVORCIADO = "Divorciado";
    const ESTADO_CIVIL_DESQUITADO = "Desquitado";
    const ESTADO_CIVIL_VIUVO = "Viúvo";
    const SIM = "Sim";
    const NAO = "Não";
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'membro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_congregacao', 'nome', 'rg', 'cpf', 'sexo', 'dt_nascimento', 'naturalidade', 'estado_civil', 'conjugue', 'nome_mae', 'nome_pai', 'qtde_filhos', 'status', 'email', 'dt_batismo', 'batizado_es', 'dt_membresia', 'biblia', 'dizimista', 'escolaridade', 'ebd'], 'required'],
            [['id_congregacao', 'rg', 'cpf', 'qtde_filhos', 'tel_fixo', 'tel_celular'], 'integer'],
            [['sexo', 'estado_civil', 'status', 'batizado_es', 'biblia', 'dizimista', 'escolaridade', 'ebd'], 'string'],
            [['dt_nascimento', 'dt_batismo', 'dt_membresia'], 'safe'],
            [['nome', 'conjugue', 'nome_mae', 'nome_pai', 'email', 'igreja_anterior'], 'string', 'max' => 100],
            [['naturalidade', 'motivo_entrada', 'profissao'], 'string', 'max' => 50],
            [['id_congregacao'], 'exist', 'skipOnError' => true, 'targetClass' => Congregacao::className(), 'targetAttribute' => ['id_congregacao' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_congregacao' => 'Id da Congregação',
            'nome' => 'Nome do Membro',
            'rg' => 'Identidade',
            'cpf' => 'CPF',
            'sexo' => 'Sexo',
            'dt_nascimento' => 'Data de Nascimento',
            'naturalidade' => 'Naturalidade',
            'estado_civil' => 'Estado Civil',
            'conjugue' => 'Cônjugue',
            'nome_mae' => 'Nome da Mãe',
            'nome_pai' => 'Nome do Pai',
            'qtde_filhos' => 'Nº de Filhos',
            'status' => 'Status',
            'email' => 'E-mail',
            'dt_batismo' => 'Data de Batismo',
            'batizado_es' => 'Batizado no Espírito Santo',
            'dt_membresia' => 'Data de Membro',
            'biblia' => 'Bíblia',
            'dizimista' => 'Dizimista',
            'motivo_entrada' => 'Motivo da Entrada',
            'escolaridade' => 'Escolaridade',
            'igreja_anterior' => 'Igreja Anterior',
            'tel_fixo' => 'Telefone Fixo',
            'tel_celular' => 'Telefone Celular',
            'profissao' => 'Profissão',
            'ebd' => 'EBD',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCargoMembros()
    {
        return $this->hasMany(CargoMembro::className(), ['id_membro' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentos()
    {
        return $this->hasMany(Departamento::className(), ['id_membro' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDizimos()
    {
        return $this->hasMany(Dizimo::className(), ['id_membro' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnderecos()
    {
        return $this->hasMany(Endereco::className(), ['id_membro' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscalas()
    {
        return $this->hasMany(Escala::className(), ['id_membro' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFreqEbds()
    {
        return $this->hasMany(FreqEbd::className(), ['id_membro' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCongregacao()
    {
        return $this->hasOne(Congregacao::className(), ['id' => 'id_congregacao']);
    }
    /**
     * Meto que retorna um array com os valores para o campo SEXO
     * 
     * @return array
     */
    public function getSexo() {
        return [
            self::SEXO_FEMININO => self::SEXO_FEMININO,
            self::SEXO_MASCULINO => self::SEXO_MASCULINO
        ];
    }
        /**
     * Meto que retorna um array com os valores para o campo ESTADO_CIVIL
     * 
     * @return array
     */
    public function getEstadoCivil() {
        return [
        self::ESTADO_CIVIL_SOLTEIRO => self::ESTADO_CIVIL_SOLTEIRO,
        self::ESTADO_CIVIL_CASADO => self::ESTADO_CIVIL_CASADO,
        self::ESTADO_CIVIL_DIVORCIADO => self::ESTADO_CIVIL_DIVORCIADO,
        self::ESTADO_CIVIL_DESQUITADO => self::ESTADO_CIVIL_DESQUITADO,
        self::ESTADO_CIVIL_VIUVO => self::ESTADO_CIVIL_VIUVO         
        ];
    }
    /**
     * Meto que retorna um array com os valores para o campo BATIZADO_NO_ESPÍRITO_SANTO
     * 
     * @return array
     *
    public function getBatizadoNoEspiritoSanto() {
        return [
        self::BATIZADO_NO_ESPIRITO_SANTO_SIM => self::BATIZADO_NO_ESPIRITO_SANTO_SIM,
        self::BATIZADO_NO_ESPIRITO_SANTO_NAO => self::BATIZADO_NO_ESPIRITO_SANTO_NAO,
        ];   
    }*/
     /**
     * Meto que retorna um array com os valores para STATUS
     * 
     * @return array
     */
    public function getStatus() {
        return [
            self::SIM => self::SIM,
            self::NAO => self::NAO,
            ];       
    }    
}
