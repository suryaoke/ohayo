<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bakery */

?>
<div class="bakery-create content">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
