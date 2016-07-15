<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FreqEbdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Freq Ebds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="freq-ebd-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Freq Ebd', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_membro',
            'id_congregacao',
            'data',
            'presenca',
            // 'professor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
