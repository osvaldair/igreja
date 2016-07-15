<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CargoMembro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cargo-membro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_membro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_cargo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_inicio')->textInput() ?>

    <?= $form->field($model, 'data_termino')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Ativo' => 'Ativo', 'Suspenso' => 'Suspenso', 'Férias' => 'Férias', 'Substituto' => 'Substituto', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Alterar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
