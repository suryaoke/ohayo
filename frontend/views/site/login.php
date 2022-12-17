<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

?>
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Page 1</title>
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>nicepage.css" media="screen">
<link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>login.css" media="screen">
    <script class="u-script" type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.16, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/WhatsAppImage2022-05-31at20.26.51.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
  </head>


  <section class="u-clearfix u-custom-color-6 u-section-1" id="sec-7230">
    <div class="u-clearfix u-sheet u-sheet-1">
      <img class="u-image u-image-default u-image-1" src="<?= Yii::$app->getHomeUrl(); ?>images/WhatsAppImage2022-05-31at20.26.51.png" alt=""
        data-image-width="1904" data-image-height="1080">
      <div class="u-form u-login-control u-white u-form-1">
        <form action="#" method="POST"
          class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom"
          name="form" style="padding: 30px;">
          <div class="u-form-group u-form-name">
            <label for="username-a30d" class="u-label">Username *</label>
            <input type="text" placeholder="Enter your Username" id="username-a30d" name="username"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-1" required="">
          </div>
          <div class="u-form-group u-form-password">
            <label for="password-a30d" class="u-label">Password *</label>
            <input type="text" placeholder="Enter your Password" id="password-a30d" name="password"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-input-2" required="">
          </div>
          <div class="u-form-checkbox u-form-group">
            <input type="checkbox" id="checkbox-a30d" name="remember" value="On">
            <label for="checkbox-a30d" class="u-label">Remember me</label>
          </div>
          <div class="u-align-left u-form-group u-form-submit">
            <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-palette-2-base u-btn-1">Login</a>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
          <input type="hidden" value="" name="recaptchaResponse">


        </form>
      </div>
    </div>
  </section>
