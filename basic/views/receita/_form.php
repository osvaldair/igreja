<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Receita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="receita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_caixa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_congregacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_receita')->textInput() ?>

    <?= $form->field($model, 'valor_receita')->textInput() ?>

    <?= $form->field($model, 'oferta')->textInput() ?>

    <?= $form->field($model, 'doacao')->textInput() ?>

    <?= $form->field($model, 'campanha')->textInput() ?>

    <?= $form->field($model, 'evento')->textInput() ?>

    <?= $form->field($model, 'cantina')->textInput() ?>

    <?= $form->field($model, 'receb_emprestimo')->textInput() ?>

    <?= $form->field($model, 'venda_imobilizado')->textInput() ?>

    <?= $form->field($model, 'receita_financeira')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Alterar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
