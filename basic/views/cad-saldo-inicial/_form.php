<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CadSaldoInicial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cad-saldo-inicial-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'saldo_ini_caixa_diario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saldo_ini_caixa_banco')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Alterar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
