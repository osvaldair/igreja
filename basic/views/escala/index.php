<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EscalaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cadastrar Escalas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="escala-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Escalas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_atividades',
            'id_membro',
            'id_congregacao',
            'dia_escala',
            // 'local_escala',
            // 'horario_escala',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
