<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CaixaBancoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="caixa-banco-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_cad_saldo_inicial') ?>

    <?= $form->field($model, 'data') ?>

    <?= $form->field($model, 'valor_receita') ?>

    <?= $form->field($model, 'valor_despesa') ?>

    <?php // echo $form->field($model, 'historico') ?>

    <?php // echo $form->field($model, 'saldo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
