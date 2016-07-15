<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Membro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="membro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_congregacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->dropDownList($sexo, ['prompt' => '-- Selecione --']) ?>

    <?= $form->field($model, 'dt_nascimento')->textInput() ?>

    <?= $form->field($model, 'naturalidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado_civil')->dropDownList($estadoCivil, ['prompt' => '--Selecione--']) ?>

    <?= $form->field($model, 'conjugue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome_mae')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome_pai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qtde_filhos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dt_batismo')->textInput() ?>

    <?= $form->field($model, 'batizado_es')->dropDownList($status, ['prompt' => '--Selecione--']) ?>

    <?= $form->field($model, 'dt_membresia')->textInput() ?>

    <?= $form->field($model, 'biblia')->dropDownList($status, ['prompt' => '--Selecione--']) ?>

    <?= $form->field($model, 'dizimista')->dropDownList($status, ['prompt' => '--Selecione--']) ?>

    <?= $form->field($model, 'motivo_entrada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'escolaridade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'igreja_anterior')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel_fixo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel_celular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profissao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ebd')->dropDownList($status, ['prompt' => '--Selecione--']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Alterar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
