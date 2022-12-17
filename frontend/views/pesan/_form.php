<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pesan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pesan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pesanan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Pesan', ['class' => 'btn btn-success']) ?>
        <a href="<?= \yii\helpers\Url::to(['/site/index']) ?>" data-page-id="2202136" class="u-border-none u-button-style u-palette-2-base u-btn-1">Batalkan Pesan</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>
