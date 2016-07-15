<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CargoMembro */

$this->title = 'Cadastrar Cargo de Membros';
$this->params['breadcrumbs'][] = ['label' => 'Cargo Membros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cargo-membro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
