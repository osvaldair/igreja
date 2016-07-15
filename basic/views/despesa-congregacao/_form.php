<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DespesaCongregacao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="despesa-congregacao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_caixa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_despesa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_congregacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'valor')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Alterar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
