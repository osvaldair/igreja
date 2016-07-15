<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReceitaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="receita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_caixa') ?>

    <?= $form->field($model, 'id_congregacao') ?>

    <?= $form->field($model, 'data_receita') ?>

    <?= $form->field($model, 'valor_receita') ?>

    <?php // echo $form->field($model, 'oferta') ?>

    <?php // echo $form->field($model, 'doacao') ?>

    <?php // echo $form->field($model, 'campanha') ?>

    <?php // echo $form->field($model, 'evento') ?>

    <?php // echo $form->field($model, 'cantina') ?>

    <?php // echo $form->field($model, 'receb_emprestimo') ?>

    <?php // echo $form->field($model, 'venda_imobilizado') ?>

    <?php // echo $form->field($model, 'receita_financeira') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
