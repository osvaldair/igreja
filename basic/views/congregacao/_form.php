<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Congregacao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="congregacao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome_congregacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pr_dirigente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel_fixo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel_celular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qtde_membros')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_aniversario_congreg')->textInput() ?>

    <?= $form->field($model, 'data_aniversario_pr')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Alterar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
