<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "receita".
 *
 * @property string $id
 * @property string $id_caixa
 * @property string $id_congregacao
 * @property string $data_receita
 * @property double $valor_receita
 * @property double $oferta
 * @property double $doacao
 * @property double $campanha
 * @property double $evento
 * @property double $cantina
 * @property double $receb_emprestimo
 * @property double $venda_imobilizado
 * @property double $receita_financeira
 *
 * @property Caixa $idCaixa
 * @property Congregacao $idCongregacao
 */
class Receita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'receita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_caixa', 'id_congregacao'], 'required'],
            [['id_caixa', 'id_congregacao'], 'integer'],
            [['data_receita'], 'safe'],
            [['valor_receita', 'oferta', 'doacao', 'campanha', 'evento', 'cantina', 'receb_emprestimo', 'venda_imobilizado', 'receita_financeira'], 'number'],
            [['id_caixa'], 'exist', 'skipOnError' => true, 'targetClass' => Caixa::className(), 'targetAttribute' => ['id_caixa' => 'id']],
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
            'id_caixa' => 'Id Caixa',
            'id_congregacao' => 'Id Congregacao',
            'data_receita' => 'Data Receita',
            'valor_receita' => 'Valor Receita',
            'oferta' => 'Ofertas',
            'doacao' => 'Doacões',
            'campanha' => 'Campanhas',
            'evento' => 'Eventos',
            'cantina' => 'Cantina',
            'receb_emprestimo' => 'Recebimento de Empréstimos a Membros',
            'venda_imobilizado' => 'Venda de Imobilizados',
            'receita_financeira' => 'Receitas Financeiras',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCaixa()
    {
        return $this->hasOne(Caixa::className(), ['id' => 'id_caixa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCongregacao()
    {
        return $this->hasOne(Congregacao::className(), ['id' => 'id_congregacao']);
    }
}
