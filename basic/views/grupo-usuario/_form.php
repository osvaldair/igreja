<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GrupoUsuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grupo-usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'data_inclusao')->textInput() ?>

    <?= $form->field($model, 'administrador')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avancado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'padrao')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Alterar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
