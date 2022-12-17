<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Login</title>
    <link href="<?= Yii::$app->getHomeUrl(); ?>/images/WhatsAppImage2022-05-31at20.26.51.png" rel="icon">
    <link href="<?= Yii::$app->getHomeUrl(); ?>/images/WhatsAppImage2022-05-31at20.26.51s.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>nicepage.css" media="screen">
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>login.css" media="screen">
    <script class="u-script" type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.16, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "images/WhatsAppImage2022-05-31at20.26.51.png",
            "sameAs": []
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
</head>
<div class="site-login">


    <body class="u-body u-xl-mode">

        <section class="u-clearfix u-custom-color-6 u-section-1" id="sec-7230">
            <div class="u-clearfix u-sheet u-sheet-1">

                <img class="u-image u-image-default u-image-1" src="<?= Yii::$app->getHomeUrl(); ?>images/WhatsAppImage2022-05-31at20.26.51.png" alt="" data-image-width="1904" data-image-height="1080">
                <div class="u-form u-login-control u-white u-form-1">
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <div class="u-form-group u-form-name">
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                    </div>
                    <div class="u-form-group u-form-password">
                        <?= $form->field($model, 'password')->passwordInput() ?>
                    </div>

                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                    <div class="u-align-left u-form-group u-form-submit">
                        <?= Html::submitButton('Login', ['class' => 'u-border-none u-btn u-btn-submit u-button-style u-palette-2-base u-btn-1', 'name' => 'login-button']) ?>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <a href="<?= \yii\helpers\Url::to(['../../frontend/web/site/index']) ?>" data-page-id="2202136" class="u-border-none u-button-style u-palette-2-base u-btn-1">HOME</a>
                    <input type="hidden" value="" name="recaptchaResponse">



                    <?php ActiveForm::end(); ?>
                </div>

            </div>
        </section>



    </body>
</div>