<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="MediaCenter, Template, eCommerce">
  <meta name="robots" content="all">
  <title>Thành Công</title>

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>includehome/css/bootstrap.min.css">

  <!-- Customizable CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>includehome/css/main.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>includehome/css/blue.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>includehome/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>includehome/css/owl.transitions.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>includehome/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>includehome/css/rateit.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>includehome/css/mobileSelect.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>includehome/css/bootstrap-select.min.css">
  <link rel="shortcut icon" href="<?php echo base_url() ?>includehome/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url() ?>includehome/images/favicon.ico" type="image/x-icon">
  <!-- Icons/Glyphs -->
  <link rel="stylesheet" href="<?php echo base_url() ?>includehome/css/font-awesome.css">
  <script src="<?php echo base_url() ?>includehome/js/vue.js"></script>
  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=vietnamese" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap&subset=vietnamese" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=vietnamese" rel="stylesheet">

  <script src="<?php echo base_url() ?>includehome/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url() ?>includehome/js/jssor.slider.min.js"></script>
  <script src="<?php echo base_url() ?>includehome/js/angular-1.5.min.js"></script>
  <script src="https://cdn.rawgit.com/adebisi-fa/dang-jssor/master/demo/scripts/dang-jssor-0.0.3/dang-jssor.min.js"></script>
  <script src="<?php echo base_url() ?>includehome/js/notify.js"></script>
  <script src="<?php echo base_url() ?>includehome/js/slideout.min.js"></script>
  <script src="<?php echo base_url() ?>includehome/js/superslide-std.min.js"></script>
  <script src="<?php echo base_url() ?>includehome/js/mobileSelect.min.js"></script>
  <script src="<?php echo base_url() ?>includehome/js/sticky-sidebar.min.js"></script>
</head>

<script>
  window.onload = function() {

    superslideMenu = new OSREC.superslide({
      slider: document.getElementById('menuContainer'),
      content: document.getElementById('content'),
      animation: 'slideLeft',
      duration: 0.5,
      allowDrag: true,
      slideContent: true,
      allowContentInteraction: true,
      closeOnBlur: false,
      width: '70vw',
      height: '50vh'
    });

    // var p = superslideMenu.open();



  };
</script>
<style>
  .navlink {
    padding: 20px 15px;
  }
  .navlink.active {
    background: #F7C81C; color: #fff
  }
</style>

<body class="cnt-home" ng-app="myApp" ng-cloak>

  <header class="header-style-1">

    <div class="main-header" id="content">
      <!-- <i class='fa fa-bars' style='cursor: pointer' onclick='superslideMenu.toggle()'></i> -->
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
            <i id="btn-v-menu" style="font-size: 35px;float: left;margin-top: 4px;margin-left: 14px;" class='fa fa-bars' style='cursor: pointer' onclick='superslideMenu.toggle()'></i>
            <div class="logo"> <a href="<?php echo base_url() ?>"> <img style="margin-top: -5px;height: 53px;" src="<?php echo base_url() ?>includehome/images/logo.png" alt="logo"> </a> </div>
            <!-- /.logo -->
            <!-- ============================================================= LOGO : END ============================================================= -->
          </div>
          <!-- /.logo-holder -->

          <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
            <!-- /.contact-row -->
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <div class="search-area">
              <form action="<?php echo base_url() ?>Home/search">
                <div class="control-group">
                  <input name="search_fill" class="search-field" placeholder="Tìm kiếm ... " />
                  <button type="submit" class="search-button"></button>
                </div>
              </form>
            </div>
            <!-- /.search-area -->
            <!-- ============================================================= SEARCH AREA : END ============================================================= -->
          </div>
          <!-- /.top-search-holder -->

          <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
            <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

            <div class="dropdown dropdown-cart" id="show_cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                <div class="items-cart-inner">
                  <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                  <div class="basket-item-count"><span class="count">0</span></div>
                  <div class="total-price-basket"> <span class="total-price"><span class="value">0 vnđ </span> </span> </div>
                </div>
              </a>
              <!-- /.dropdown-menu-->
            </div>
            <!-- /.dropdown-cart -->

            <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
          </div>
          <!-- /.top-cart-row -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container -->

    </div>
    <!-- /.main-header -->
    <script>
        var app = angular.module('myApp', [])
        app.controller('SidebarCtrl', function($scope, $http, $rootScope) {


        })
      </script>