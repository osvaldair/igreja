<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CaixaDiario */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Caixa Diarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caixa-diario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('alterar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza que deseja deletar este ítem?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_cad_saldo_inicial',
            'data',
            'valor_receita',
            'valor_despesa',
            'historico',
            'saldo',
        ],
    ]) ?>

</div>
