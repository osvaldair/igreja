<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Escala */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escala-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_atividades')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_membro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_congregacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dia_escala')->textInput() ?>

    <?= $form->field($model, 'local_escala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'horario_escala')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Alterar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
