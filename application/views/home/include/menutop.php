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
                </li>
                <li <?php if ($path == 'san-pham.html') echo "class='dropdown mega-menu active'"; else echo "class='dropdown mega-menu'" ?>>
                  <a href="<?php echo base_url() ?>san-pham.html" data-hover="dropdown" class="dropdown-toggle">Sản phẩm</a>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                            <h2 class="title">VÁN GỖ</h2>
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
                          <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                            <h2 class="title">BỀ MẶT</h2>
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
                          <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                            <h2 class="title">SÀN GỖ</h2>
                            <ul class="links">
                              <li>
                                <a href="<?php echo base_url() . 'san-go-25' ?>.html">
                                  CÁC LOẠI SẢN GỖ
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                            <h2 class="title">SẢN PHẨM KHÁC</h2>
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
                          <div class="col-xs-12 col-sm-12 col-md-4 Title Hidden">
                            <div class="menu-widget">
                              <h2 class="title" style="display: none;">Banner Container</h2>
                              <ul class="links depth-1" role="menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a><img class="img-responsive" src="<?php echo base_url() ?>files/sanpham/MFC.jpg" alt="Banner Image"></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.yamm-content -->
                    </li>
                  </ul>
                </li>
                <li <?php if ($path == 'dich-vu.html') echo "class='active'" ?>> <a href="<?php echo base_url() ?>dich-vu.html">Dịch vụ</a> </li>
                <li <?php if ($path == 'catalogue.html') echo "class='active'" ?>> <a href="<?php echo base_url() ?>catalogue.html">catalogue</a>
                <li <?php if ($path == 'thu-vien-3d.html') echo "class='active'" ?>> <a href="<?php echo base_url() ?>thu-vien-3d.html">Thư viện hình</a>
                <li <?php if ($path == 'tin-tuc.html') echo "class='active'" ?>> <a href="<?php echo base_url() ?>tin-tuc.html">Tin tức</a> </li>
                <li <?php if ($path == 'lien-he.html') echo "class='active'" ?>> <a href="<?php echo base_url(); ?>lien-he.html">Liên hệ</a> </li>
                <li <?php if ($path == 'cart') echo "class='active'" ?>> <a href="<?php echo base_url() ?>cart">Mua ngay</a> </li>
                <li> <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
                
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