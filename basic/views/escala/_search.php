<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EscalaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escala-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_atividades') ?>

    <?= $form->field($model, 'id_membro') ?>

    <?= $form->field($model, 'id_congregacao') ?>

    <?= $form->field($model, 'dia_escala') ?>

    <?php // echo $form->field($model, 'local_escala') ?>

    <?php // echo $form->field($model, 'horario_escala') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
