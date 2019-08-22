  <!-- ============================================== NAVBAR ============================================== -->

  <?php
  $url = $_SERVER['REQUEST_URI'];
  $path = explode("/", $url)[2];

  ?>
  <?php require_once('vn_to_str.php') ?>
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li <?php if ($path == '') echo "class='active'" ?>> <a href="<?php echo base_url() ?>">Trang Chủ</a> </li>
                <!-- <li class="yamm mega-menu"> <a href="<?php echo base_url() ?>gioi-thieu.html">Giới thiệu</a> -->
                </li>
                <li class="dropdown mega-menu">
                  <a href="<?php echo base_url() ?>san-pham.html" data-hover="dropdown" class="dropdown-toggle">Sản phẩm <span class="menu-label hot-menu hidden-xs">hot</span> </a>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-3 col-menu">
                            <h2 class="title">Ván ép</h2>
                            <ul class="links">
                              <?php foreach ($category_van as $key => $van) { ?>
                                <li>
                                  <a href="<?php echo base_url() . vn_to_str($van['name']) . '-' . $van['id'] ?>.html">
                                    <?php echo $van['name'] ?>
                                  </a>
                                </li>
                              <?php } ?>
                            </ul>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-3 col-menu">
                            <h2 class="title">Tấm lót sàn</h2>
                            <ul class="links">
                              <?php foreach ($category_lot as $key => $lot) { ?>
                                <li>
                                  <a href="<?php echo base_url() . vn_to_str($lot['name']) . '-' . $lot['id'] ?>.html">
                                    <?php echo $lot['name'] ?>
                                  </a>
                                </li>
                              <?php } ?>
                            </ul>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-3 col-menu">
                            <h2 class="title">Sản phẩm khác</h2>
                            <ul class="links">
                              <?php foreach ($category_khac as $key => $khac) { ?>
                                <li>
                                  <a href="<?php echo base_url() . vn_to_str($khac['name']) . '-' . $khac['id'] ?>.html">
                                    <?php echo $khac['name'] ?>
                                  </a>
                                </li>
                              <?php } ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <!-- /.yamm-content -->
                    </li>
                  </ul>
                </li>
                <li <?php if ($path == 'dich-vu.html') echo "class='active'" ?>> <a href="<?php echo base_url() ?>dich-vu.html">Dịch vụ<span class="menu-label new-menu hidden-xs">new</span> </a> </li>
                <li <?php if ($path == 'tin-tuc.html') echo "class='active'" ?>> <a href="<?php echo base_url() ?>tin-tuc.html">Tin tức</a> </li>
                <li <?php if ($path == 'catalogue.html') echo "class='active'" ?>> <a href="<?php echo base_url() ?>catalogue.html">catalogue</a>
                <li <?php if ($path == 'thu-vien-3d.html') echo "class='active'" ?>> <a href="<?php echo base_url() ?>thu-vien-3d.html">Thư viện 3D</a>
                <li <?php if ($path == 'huong-dan-mua-hang.html') echo "class='active'" ?>> <a href="<?php echo base_url(); ?>huong-dan-mua-hang.html">Hướng dẫn mua hàng</a> </li>
                <li <?php if ($path == 'lien-he.html') echo "class='active'" ?>> <a href="<?php echo base_url(); ?>lien-he.html">Liên hệ</a> </li>
                <li <?php if ($path == 'cart') echo "class='active'" ?>> <a href="<?php echo base_url() ?>cart">Mua ngay</a> </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer -->
          </div>
          <!-- /.navbar-collapse -->

        </div>
        <!-- /.nav-bg-class -->
      </div>
      <!-- /.navbar-default -->
    </div>
    <!-- /.container-class -->

  </div>
  <!-- /.header-nav -->
  <!-- ============================================== NAVBAR : END ============================================== -->

  </header>

  