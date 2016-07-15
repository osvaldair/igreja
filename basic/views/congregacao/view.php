<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Congregacao */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Congregações', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congregacao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Alterar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza que deseja deletar este ítem?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nome_congregacao',
            'cnpj',
            'pr_dirigente',
            'tel_fixo',
            'tel_celular',
            'email:email',
            'qtde_membros',
            'data_aniversario_congreg',
            'data_aniversario_pr',
        ],
    ]) ?>

</div>
