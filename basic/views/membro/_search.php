<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MembroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="membro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_congregacao') ?>

    <?= $form->field($model, 'nome') ?>

    <?php // echo $form->field($model, 'rg') ?>

    <?php // echo $form->field($model, 'cpf') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'dt_nascimento') ?>

    <?php // echo $form->field($model, 'naturalidade') ?>

    <?php // echo $form->field($model, 'estado_civil') ?>

    <?php // echo $form->field($model, 'conjugue') ?>

    <?php // echo $form->field($model, 'nome_mae') ?>

    <?php // echo $form->field($model, 'nome_pai') ?>

    <?php // echo $form->field($model, 'qtde_filhos') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'dt_batismo') ?>

    <?php // echo $form->field($model, 'batizado_es') ?>

    <?php // echo $form->field($model, 'dt_membresia') ?>

    <?php // echo $form->field($model, 'biblia') ?>

    <?php // echo $form->field($model, 'dizimista') ?>

    <?php // echo $form->field($model, 'motivo_entrada') ?>

    <?php // echo $form->field($model, 'escolaridade') ?>

    <?php // echo $form->field($model, 'igreja_anterior') ?>

    <?php // echo $form->field($model, 'tel_fixo') ?>

    <?php // echo $form->field($model, 'tel_celular') ?>

    <?php // echo $form->field($model, 'profissao') ?>

    <?php // echo $form->field($model, 'ebd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
