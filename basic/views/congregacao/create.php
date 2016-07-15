<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Congregacao */

$this->title = 'Cadastrar Congregações';
$this->params['breadcrumbs'][] = ['label' => 'Congregacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congregacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
