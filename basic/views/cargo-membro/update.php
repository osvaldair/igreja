<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CargoMembro */

$this->title = 'Alterar Cargos de Membros: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cargo Membros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cargo-membro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
