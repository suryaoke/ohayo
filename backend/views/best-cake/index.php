<?php

use backend\models\BestCake;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BestCakeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


?>
<div class="best-cake-index content">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Best Cake', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
     
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           
            'nama',
            'deskripsi',
            'img_url:url',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BestCake $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
