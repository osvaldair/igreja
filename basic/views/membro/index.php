<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MembroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Membros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="membro-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Membros', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_congregacao',
            'nome',
             'rg',
             'cpf',
             'sexo',
//             'dt_nascimento',
//             'naturalidade',
//             'estado_civil',
//             'conjugue',
//             'nome_mae',
//             'nome_pai',
            // 'qtde_filhos',
            // 'endereco',
            // 'bairro',
            // 'cidade',
            // 'estado',
            // 'cep',
            // 'email:email',
            // 'dt_batismo',
            // 'batizado_es',
            // 'dt_membresia',
            // 'biblia',
            // 'dizimista',
            // 'motivo_entrada',
            // 'escolaridade',
            // 'igreja_anterior',
            // 'tel_fixo',
            // 'tel_celular',
            // 'profissao',
            // 'ebd',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
