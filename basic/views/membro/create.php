<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Membro */

$this->title = 'Cadastrar Membros';
$this->params['breadcrumbs'][] = ['label' => 'Membros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="membro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'sexo' => $sexo,
        'estadoCivil' => $estadoCivil,
        'status' => $status,
    ]) ?>

</div>
