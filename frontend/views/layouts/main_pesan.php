<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Grill &amp;amp; Bar, BeMine, About Us, To Our Table, Desserts &amp;amp;Drinks, Contact Us">
    <meta name="description" content="">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link href="<?= Yii::$app->getHomeUrl(); ?>/images/WhatsAppImage2022-05-31at20.26.51.png" rel="icon">
    <link href="<?= Yii::$app->getHomeUrl(); ?>/images/WhatsAppImage2022-05-31at20.26.51s.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>nicepage.css" media="screen">
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>Home.css" media="screen">
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
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
</head>

<body data-home-page="https://website2202108.nicepage.io/Home.html?version=41a080b6-ca5e-4112-9689-8cfbd635b8ca" data-home-page-title="Home" class="u-body u-xl-mode">
    <?php $this->beginBody() ?>

    <header class="u-align-center-sm u-align-center-xs u-clearfix u-custom-color-8 u-header u-sticky u-sticky-c2ff u-header" id="sec-0f86" class="ml-auto">
        <div class="u-clearfix u-sheet u-sheet-1">
           
<h3>Pesanan | Ohayo bakery&cake</h3>
            
           
        </div>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>


    <footer class="u-clearfix u-custom-color-7 u-footer" id="sec-5a5f">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="<?= Yii::$app->getHomeUrl(); ?>https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1904" data-image-height="1080">
                <img src="<?= Yii::$app->getHomeUrl(); ?>images/WhatsAppImage2022-05-31at20.26.51.png" class="u-logo-image u-logo-image-1">
            </a>
            <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
                <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                            <use xlink:href="#svg-c22d"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-c22d">
                            <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
                        </svg></span>
                </a>
                <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                            <use xlink:href="#svg-b417"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-b417">
                            <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
                        </svg></span>
                </a>
                <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                            <use xlink:href="#svg-9685"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-9685">
                            <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path>
                            <path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path>
                            <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
                        </svg></span>
                </a>
            </div>
            <div class="u-border-1 u-border-white u-expanded-width u-line u-line-horizontal u-opacity u-opacity-50 u-line-1"></div>
        </div>
    </footer>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
