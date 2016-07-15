<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DespesaCongregacaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="despesa-congregacao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_caixa') ?>

    <?= $form->field($model, 'id_despesa') ?>

    <?= $form->field($model, 'id_congregacao') ?>

    <?= $form->field($model, 'data') ?>

    <?php // echo $form->field($model, 'valor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
