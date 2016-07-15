<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CaixaBancoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cadastrar Caixa Bancos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caixa-banco-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Caixa Bancos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_cad_saldo_inicial',
            'data',
            'valor_receita',
            'valor_despesa',
            // 'historico',
            // 'saldo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
