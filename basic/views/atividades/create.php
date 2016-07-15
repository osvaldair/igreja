<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Atividades */

$this->title = 'Cadastrar Atividades';
$this->params['breadcrumbs'][] = ['label' => 'Atividades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atividades-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
