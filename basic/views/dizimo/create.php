<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dizimo */

$this->title = 'Cadastrar Dízimos';
$this->params['breadcrumbs'][] = ['label' => 'Dizimos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dizimo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
