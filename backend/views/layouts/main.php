<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>dist/css/adminlte.min.css">
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="<?= Yii::$app->getHomeUrl(); ?>images/WhatsAppImage2022-05-31at20.26.51.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sideba-warning elevation-6">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= Yii::$app->getHomeUrl(); ?>/images/WhatsAppImage2022-05-31at20.26.51.png" class=" elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="<?= Yii::$app->getHomeUrl(); ?>#" class="d-block">Admin | Ohayo</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="<?= Url::toRoute(['/']) ?>" class="nav-link active">
                                <i class=" fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="<?= Url::toRoute(['/']) ?>" class="nav-link">
                                <i class="nav-icon fas fa-clipboard"></i>
                                <p>
                                    Daftar Menu
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                          
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= Url::toRoute(['bakery/index']) ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Bakery</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= Url::toRoute(['cake/index']) ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cake</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= Url::toRoute(['selai/index']) ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Selai</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="<?= Url::toRoute(['pesan/index']) ?>" class="nav-link">
                                <i class="nav-icon 	fas fa-address-book"></i>

                                <p>
                                    Pesanan

                                </p>
                                <span class="right badge badge-danger">New</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= Url::toRoute(['lokasi/index']) ?>" class="nav-link">
                                <i class="nav-icon 	fas fa-building"></i>

                                <p>
                                    Lokasi

                                </p>
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a href="<?= Url::toRoute(['data/index']) ?>" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                  Data Penjualan
                                 
                                </p>
                            </a>
                        </li>

                         
                        <li class="nav-item">
                            <a  class="nav-link">
                                <i class="nav-icon fas fa-check-square"></i>
                                <p>
                                    Best
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                          
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= Url::toRoute(['best-bakery/index']) ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Best_Bakery</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= Url::toRoute(['best-cake/index']) ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Best_Cake</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= Url::toRoute(['best-selai/index']) ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Best_Selai</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                      
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        <main role="main" class="flex-shrink-0">
            <div class="content-wrapper">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </main>

    </div>







    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= Yii::$app->getHomeUrl(); ?>dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/raphael/raphael.min.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?= Yii::$app->getHomeUrl(); ?>dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= Yii::$app->getHomeUrl(); ?>dist/js/pages/dashboard2.js"></script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
