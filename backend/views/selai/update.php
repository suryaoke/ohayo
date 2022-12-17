<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Selai */

$this->title = 'Update Selai: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Selais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="selai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
