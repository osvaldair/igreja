<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CadSaldoInicialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cadastrar Saldo Inicial';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cad-saldo-inicial-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Saldo Inicial', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'data',
            'saldo_ini_caixa_diario',
            'saldo_ini_caixa_banco',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
