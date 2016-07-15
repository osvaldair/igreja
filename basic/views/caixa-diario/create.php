<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CaixaDiario */

$this->title = 'Cadastrar Caixa Diário';
$this->params['breadcrumbs'][] = ['label' => 'Caixa Diarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caixa-diario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
