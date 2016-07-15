<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CadSaldoInicial */

$this->title = 'Alterar Saldo Inicial: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cad Saldo Inicials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cad-saldo-inicial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
