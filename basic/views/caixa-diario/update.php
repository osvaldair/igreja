<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CaixaDiario */

$this->title = 'Alterar Caixa Diário: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Caixa Diarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="caixa-diario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
