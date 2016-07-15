<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CaixaBanco */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="caixa-banco-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_cad_saldo_inicial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'valor_receita')->textInput() ?>

    <?= $form->field($model, 'valor_despesa')->textInput() ?>

    <?= $form->field($model, 'historico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saldo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Alterar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
