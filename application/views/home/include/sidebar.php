      <?php require_once('vn_to_str.php') ?>
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs" style="z-index:10000">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Danh mục sản phẩm</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              <?php
              foreach ($danhmuc as $key => $dm) {
                if ($dm['main'] == '1') { ?>
              <li class="dropdown menu-item">

                <a href="<?php echo base_url() . vn_to_str($dm['name']) . '-' . $dm['id'] ?>.html">
                  <?php echo $dm['name']; ?>
                </a>
              </li>
              <?php }
              } ?>

              <?php
              foreach ($danhmuc as $key => $dm) {
                if (empty($faicon2[$key])) $faicon2[$key] = 'cube';
                if ($dm['main'] == '2') { ?>
              <li class="dropdown menu-item">
                <a href="<?php echo base_url() . vn_to_str($dm['name']) . '-' . $dm['id'] ?>.html">
                  BỀ MẶT <?php echo $dm['name']; ?>
                </a>
              </li>
              <?php }
              } ?>

              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">SẢN PHẨM PHỤ</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-lg-3">
                        <ul>
                          <?php
                          foreach ($danhmuc as $key => $dm) {
                            if ($dm['main'] == '#') { ?>
                          <li class="dropdown menu-item">
                            <a href="<?php echo base_url() . vn_to_str($dm['name']) . '-' . $dm['id'] ?>.html">
                              <?php echo $dm['name']; ?>
                            </a>
                          </li>
                          <?php }
                          } ?>
                        </ul>
                      </div>
                      <div class="dropdown-banner-holder col-xs-12 col-sm-12 col-lg-9"> <a href="#"><img style="background-size: cover; height: 220px" alt="" src="http://vangoviet.com/files/danhmuclon/khac.jpg" /></a> </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <!-- /.nav -->
          </nav>
          <!-- /.megamenu-horizontal -->
        </div>

        <div class="sidebar-widget outer-bottom-small wow fadeInUp">
          <h3 class="section-title">Sản phẩm HOT</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products special-product">
                  <?php foreach ($side_hot as $sh) { ?>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <?php $img = json_decode($sh['image']);
                              $img = $img[0]; ?>
                            <div class="image"> <a href="<?php echo base_url() . vn_to_str($sh['name']) . '-' . $sh['id'] ?>.chn"> <img src="<?php echo $img ?>" alt="<?php echo $img ?>"> </a> </div>
                          </div>
                          <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="<?php echo base_url() . vn_to_str($sh['name']) . '-' . $sh['id'] ?>.chn"><?php echo $sh['name'] ?></a></h3>
                            <div class="rating rateit-small"></div>
                            <!--<div class="product-price"> <span class="price"> <?php echo number_format($sh['price']) ?> ₫  </span> </div>-->
                            <div class="product-price text-danger"><b>Giá Liên hệ</b></div>
                            <!-- /.product-price -->

                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================== SIDEBAR : END ============================================== -->