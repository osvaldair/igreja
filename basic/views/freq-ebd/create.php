<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FreqEbd */

$this->title = 'Create Freq Ebd';
$this->params['breadcrumbs'][] = ['label' => 'Freq Ebds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="freq-ebd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
