<?php

use backend\models\Data;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="data-index content">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'bulan',
            'jumlah',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Data $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
