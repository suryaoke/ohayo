<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pesan */

?>
<div class="pesan-create content">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
