<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pesan */


\yii\web\YiiAsset::register($this);
?>
<div class="pesan-view">

    <p>
        <?= Html::a('Ubah Pesanan', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('batalkan pesan', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah kamu yakin ingin membatalkan pesanan? :)',
                'method' => 'post',
            ],
        ]) ?>
        
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'nama',
            'hp',
            'email:email',
            'pesanan:ntext',
        ],
    ]) ?>
<a href="<?= \yii\helpers\Url::to(['/site/index']) ?>"  class="p-3 mb-2 bg-success text-white"  >OKE</a>
</div>
