<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Selai */

$this->title = 'Create Selai';
$this->params['breadcrumbs'][] = ['label' => 'Selais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="selai-create content">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
