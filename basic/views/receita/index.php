<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReceitaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cadastrar Receitas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receita-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Receitas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_caixa',
            'id_congregacao',
            'data_receita',
            'valor_receita',
            // 'oferta',
            // 'doacao',
            // 'campanha',
            // 'evento',
            // 'cantina',
            // 'receb_emprestimo',
            // 'venda_imobilizado',
            // 'receita_financeira',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
