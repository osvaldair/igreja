<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CongregacaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="congregacao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome_congregacao') ?>

    <?= $form->field($model, 'cnpj') ?>

    <?= $form->field($model, 'pr_dirigente') ?>

    <?= $form->field($model, 'tel_fixo') ?>

    <?php // echo $form->field($model, 'tel_celular') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'qtde_membros') ?>

    <?php // echo $form->field($model, 'data_aniversario_congreg') ?>

    <?php // echo $form->field($model, 'data_aniversario_pr') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
