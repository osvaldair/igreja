<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DespesaCongregacao */

$this->title = 'Alterar Despesa da Congregação: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Despesa Congregacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="despesa-congregacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
