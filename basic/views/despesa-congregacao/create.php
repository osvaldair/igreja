<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DespesaCongregacao */

$this->title = 'Cadastrar Despesa da Congregação';
$this->params['breadcrumbs'][] = ['label' => 'Despesa Congregacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="despesa-congregacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
