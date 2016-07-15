<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AtividadeMembro */

$this->title = 'Cadastrar Atividades do Membro';
$this->params['breadcrumbs'][] = ['label' => 'Atividade Membros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atividade-membro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
