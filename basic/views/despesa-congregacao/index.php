<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DespesaCongregacaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Despesa da Congregacão';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="despesa-congregacao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Despesa da Congregação', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_caixa',
            'id_despesa',
            'id_congregacao',
            'data',
            // 'valor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
