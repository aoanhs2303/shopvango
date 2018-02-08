<script src="<?php echo base_url(); ?>includeadmin/assets/vendor_components/jquery/dist/jquery.js"></script>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url() ?>Admin" class="logo">
      <!-- <span class="logo-lg"><b>Fox</b>Admin</span> -->
      <img src="<?php echo base_url(); ?>includeadmin/images/logo.png" alt="" class="img-fluid" style="height: 50px; margin-top: -3px">
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu pr-2">
        <a href="index.html#" class="btn btn-block btn-danger">Đăng xuất</a>
      </div>
    </nav>
  </header>

  <!-- /SIDE/ -->
  <?php echo $menu ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-blue">
            <span class="info-box-icon push-bottom"><i class="ion ion-bag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Số hóa đơn</span>
              <span class="info-box-number">450</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                  <a href="" style="color: #f1f1f1">Xem chi tiết</a>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-green">
            <span class="info-box-icon push-bottom"><i class="ion ion-cash"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Doanh thu</span>
              <span class="info-box-number" style="font-size: 17px; padding-bottom: 6px">120.000.000 ₫</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                  <a href="" style="color: #f1f1f1">Xem chi tiết</a>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-purple">
            <span class="info-box-icon push-bottom"><i class="ion ion-person-stalker"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Số khách</span>
              <span class="info-box-number">1.201</span>

              <div class="progress">
                <div class="progress-bar" style="width: 85%"></div>
              </div>
              <span class="progress-description">
                  <a href="" style="color: #f1f1f1">Xem chi tiết</a>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box bg-red">
            <span class="info-box-icon push-bottom"><i class="ion ion-cube"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Số sản phẩm</span>
              <span class="info-box-number">213</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                  <a href="" style="color: #f1f1f1">Xem chi tiết</a>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xl-8 connectedSortable">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Products Yearly Sales</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart" style="height:327px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-xl-4 connectedSortable">
          <!-- weather -->
          <div class="box bg-blue text-center">
      <div class="box-body">
        <div class="p-5">
          <h3 class="white">
          <span class="font-size-30">City, </span>Country
          </h3>
          <p class="weather-day-date mb-30">
          <span class="mr-5">MONDAY</span> May 11, 2017
          </p>
          <div class="mb-30 weather-icon">
          <canvas class="mr-40 text-top" id="icon1" width="90" height="90"></canvas>
          <div class="inline-block">
            <span class="font-size-50">29°
            <span class="font-size-40">C</span>
            </span>
            <p class="text-left">DAY RAIN</p>
          </div>
          </div>
          <div class="row no-space">
          <div class="col-2">
            <div>
            <div class="mb-10">TUE</div>
            <i class="wi-day-sunny font-size-30 mb-10"></i>
            <div>24°
              <span class="font-size-12">C</span>
            </div>
            </div>
          </div>
          <div class="col-2">
            <div>
            <div class="mb-10">WED</div>
            <i class="wi-day-cloudy font-size-30 mb-10"></i>
            <div>21°
              <span class="font-size-12">C</span>
            </div>
            </div>
          </div>
          <div class="col-2">
            <div>
            <div class="mb-10">THU</div>
            <i class="wi-day-sunny font-size-30 mb-10"></i>
            <div>25°
              <span class="font-size-12">C</span>
            </div>
            </div>
          </div>
          <div class="col-2">
            <div>
            <div class="mb-10">FRI</div>
            <i class="wi-day-cloudy-gusts font-size-30 mb-10"></i>
            <div>20°
              <span class="font-size-12">C</span>
            </div>
            </div>
          </div>
          <div class="col-2">
            <div>
            <div class="mb-10">SAT</div>
            <i class="wi-day-lightning font-size-30 mb-10"></i>
            <div>18°
              <span class="font-size-12">C</span>
            </div>
            </div>
          </div>
          <div class="col-2">
            <div>
            <div class="mb-10">SUN</div>
            <i class="wi-day-storm-showers font-size-30 mb-10"></i>
            <div>14°
              <span class="font-size-12">C</span>
            </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      </div>
          <!-- /.box -->
        </div>

       </div>
      <!-- /.row -->
      <div class="row">
                <div class="col-xl-6">
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Đơn đặt hàng mới</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-responsive no-margin">
                  <thead>
                  <tr>
                    <th>ID Đơn ĐH</th>
                    <th>Tên sản phẩm</th>
                    <th>Trạng thái</th>
                    <th>Giá</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html">ODN84952</a></td>
                    <td>Iphone 6s</td>
                    <td><span class="label bg-purple">Xong</span></td>
                    <td>
                      <div>120.000 ₫</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">ODN84845</a></td>
                    <td>Apple TV</td>
                    <td><span class="label bg-yellow">Pending</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">40,80,-90,80,61,-73,68</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">ODN84982</a></td>
                    <td>Samsung TV</td>
                    <td><span class="label bg-green">Delivered</span></td>
                    <td>
                      <div class="sparkbar" data-color="#41b613" data-height="20">60,50,90,-40,91,-53,83</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">ODN85452</a></td>
                    <td>Intex Smart Watch</td>
                    <td><span class="label bg-blue">Processing</span></td>
                    <td>
                      <div class="sparkbar" data-color="#389af0" data-height="20">40,80,-90,80,61,-73,68</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">ODN94992</a></td>
                    <td>Onida AC</td>
                    <td><span class="label bg-yellow">Pending</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">40,80,-90,80,61,-73,68</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">ODN98952</a></td>
                    <td>iPhone 7 Plus</td>
                     <td><span class="label bg-green">Delivered</span></td>
                    <td>
                      <div class="sparkbar" data-color="#41b613" data-height="20">60,50,90,-40,91,-53,83</div>
                    </td>
                  </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-default pull-right">Xem toàn bộ đơn đặt hàng</a>
            </div>
            <!-- /.box-footer -->
          </div>
        </div>

     <div class="col-xl-6">
          <!-- PRODUCT LIST -->
        <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Sản phẩm mới thêm</h3>

          <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <ul class="products-list product-list-in-box">
          <li class="item">
            <div class="product-img">
            <img src="<?php echo base_url(); ?>includeadmin/images/default-50x50.gif" alt="Product Image">
            </div>
            <div class="product-info">
            <a href="javascript:void(0)" class="product-title">iphone 7plus
              <span class="label label-warning pull-right" style="font-size: 16px">250.000 ₫</span></a>
            <span class="product-description">
                12MP Wide-angle and telephoto cameras.
              </span>
            </div>
          </li>
          <!-- /.item -->
          <li class="item">
            <div class="product-img">
            <img src="<?php echo base_url(); ?>includeadmin/images/default-50x50.gif" alt="Product Image">
            </div>
            <div class="product-info">
            <a href="javascript:void(0)" class="product-title">Apple Tv
              <span class="label label-info pull-right">$400</span></a>
            <span class="product-description">
                Library | For You | Browse | Radio
              </span>
            </div>
          </li>
          <!-- /.item -->
          <li class="item">
            <div class="product-img">
            <img src="<?php echo base_url(); ?>includeadmin/images/default-50x50.gif" alt="Product Image">
            </div>
            <div class="product-info">
            <a href="javascript:void(0)" class="product-title">MacBook Air<span
              class="label label-danger pull-right">$450</span></a>
            <span class="product-description">
                Make big things happen. All day long.
              </span>
            </div>
          </li>
          <!-- /.item -->
          <li class="item">
            <div class="product-img">
            <img src="<?php echo base_url(); ?>includeadmin/images/default-50x50.gif" alt="Product Image">
            </div>
            <div class="product-info">
            <a href="javascript:void(0)" class="product-title">iPad Pro
              <span class="label label-success pull-right">$289</span></a>
            <span class="product-description">
                Anything you can do, you can do better.
              </span>
            </div>
          </li>
          <!-- /.item -->
          </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
          <a href="javascript:void(0)" class="uppercase">Xem toàn bộ sản phẩm</a>
        </div>
        <!-- /.box-footer -->
        </div>
     </div>

      </div>

  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

