<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CaixaBanco */

$this->title = 'Cadastrar Caixa Bancos';
$this->params['breadcrumbs'][] = ['label' => 'Caixa Bancos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caixa-banco-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
