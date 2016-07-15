<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CongregacaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Congregacaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congregacao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Congregações', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome_congregacao',
            'cnpj',
            'pr_dirigente',
            'tel_fixo',
            // 'tel_celular',
            // 'email:email',
            // 'qtde_membros',
            // 'data_aniversario_congreg',
            // 'data_aniversario_pr',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
