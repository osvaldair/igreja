<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FreqEbdSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="freq-ebd-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_membro') ?>

    <?= $form->field($model, 'id_congregacao') ?>

    <?= $form->field($model, 'data') ?>

    <?= $form->field($model, 'presenca') ?>

    <?php // echo $form->field($model, 'professor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
