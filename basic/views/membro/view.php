<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Membro */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Membros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="membro-view">

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
            'id_congregacao',
            'nome',
            'rg',
            'cpf',
            'sexo',
            'dt_nascimento',
            'naturalidade',
            'estado_civil',
            'conjugue',
            'nome_mae',
            'nome_pai',
            'qtde_filhos',
            'endereco',
            'bairro',
            'cidade',
            'estado',
            'cep',
            'email:email',
            'dt_batismo',
            'batizado_es',
            'dt_membresia',
            'biblia',
            'dizimista',
            'motivo_entrada',
            'escolaridade',
            'igreja_anterior',
            'tel_fixo',
            'tel_celular',
            'profissao',
            'ebd',
        ],
    ]) ?>

</div>
