<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\BestBakery */


?>
<div class="best-bakery-update content">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
