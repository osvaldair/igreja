<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Caixa */

$this->title = 'Cadastrar Caixa';
$this->params['breadcrumbs'][] = ['label' => 'Caixa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caixa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
