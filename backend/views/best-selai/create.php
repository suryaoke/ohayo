<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\BestSelai */


?>
<div class="best-selai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
