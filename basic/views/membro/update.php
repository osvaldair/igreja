<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Membro */

$this->title = 'Alterar Membro: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Membros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="membro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'sexo' => $sexo,
        'estadoCivil' => $estadoCivil,
        'status' => $status,
    ]) ?>

</div>
