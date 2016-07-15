<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CadSaldoInicial */

$this->title = 'Cadastrar Saldo Inicial';
$this->params['breadcrumbs'][] = ['label' => 'Cadastrar Saldo Inicial', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cad-saldo-inicial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
