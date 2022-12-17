<?php

use backend\models\Pesan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchPesan */
/* @var $dataProvider yii\data\ActiveDataProvider */
use fedemotta\datatables\DataTables;

?>
<div class="pesan-index content">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pesan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

   
    <?= DataTables::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           
            ['class' => 'yii\grid\SerialColumn'],


            'nama',
            'hp',
            'email:email',
            'pesanan:ntext',
           
        ],
        'clientOptions' => [
            "lengthMenu" => [[20, -1], [20, Yii::t('app', "All")]],
           
            "responsive" => true,
            "dom" => 'Bfrtip',
            "buttons"=>[
                'copy','excel','pdf'
            ]
            
        ],
       
    ]); ?>


</div>