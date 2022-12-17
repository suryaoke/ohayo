<?php

use frontend\models\Pesan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SearchPesan */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pesans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pesan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'hp',
            'email:email',
            'pesanan:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pesan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
