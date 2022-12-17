<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

?>

<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Our Features &amp;amp; Services">
    <meta name="description" content="">
    <title>menu</title>
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>nicepage.css" media="screen">
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>menu.css" media="screen">
    <script class="u-script" type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.16, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


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
    <meta property="og:title" content="menu">
    <meta property="og:type" content="website">

    <style>
        img{
            height: 30px;
            width: 60px;
        }
    </style>
</head>



<body class="u-body u-xl-mode">


    <section class="u-align-center u-clearfix u-custom-color-6 u-section-1" id="carousel_7cf0">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    
                
                <?php foreach ($modelCake as $key => $val) :?> 
                <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <img src="<?= Url::toRoute(['../../backend/web/upload/svg'.$val->gambar])?>" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-1" data-image-width="626" data-image-height="626">
                            <h4 class="u-text u-text-default u-text-palette-1-base u-text-1"><?= $val->nama ?> <img src="<?= Url::toRoute(['../../backend/web/upload/svg'.$val->status])?>"></h4>
                            <p class="u-text u-text-palette-1-dark-2 u-text-2"> <?= $val->harga ?></p>
                            <a href="<?= \yii\helpers\Url::to(['/pesan/create']) ?>" class="u-active-palette-1-light-1 u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-text-active-white u-text-hover-white u-btn-1" target="_blank">Pesan</a>
                        </div>
   
                </div>

                <?php endforeach; ?>

                 
                <?php foreach ($modelBakery as $key => $val) :?> 
                <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <img src="<?= Url::toRoute(['../../backend/web/upload/svg'.$val->gambar])?>" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-1" data-image-width="626" data-image-height="626">
                            <h4 class="u-text u-text-default u-text-palette-1-base u-text-1"><?= $val->nama ?> <img src="<?= Url::toRoute(['../../backend/web/upload/svg'.$val->status])?>"></h4>
                            <p class="u-text u-text-palette-1-dark-2 u-text-2"> <?= $val->harga ?></p>
                            <a href="<?= \yii\helpers\Url::to(['/pesan/create']) ?>" class="u-active-palette-1-light-1 u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-text-active-white u-text-hover-white u-btn-1" target="_blank">Pesan</a>
                        </div>
   
                </div>

                <?php endforeach; ?>


                <?php foreach ($modelSelai as $key => $val) :?> 
                <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                            <img src="<?= Url::toRoute(['../../backend/web/upload/svg'.$val->img_url])?>" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-1" data-image-width="626" data-image-height="626">
                            <h4 class="u-text u-text-default u-text-palette-1-base u-text-1"><?= $val->nama ?></h4>
                            <p class="u-text u-text-palette-1-dark-2 u-text-2"> <?= $val->deskripsi ?></p>
                           
                        </div>
   
                </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>

</html>