<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Lokasi */


?>
<div class="lokasi-update content">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
