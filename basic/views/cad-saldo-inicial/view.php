<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CadSaldoInicial */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cad Saldo Inicials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cad-saldo-inicial-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Alterar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
            'data',
            'saldo_ini_caixa_diario',
            'saldo_ini_caixa_banco',
        ],
    ]) ?>

</div>
