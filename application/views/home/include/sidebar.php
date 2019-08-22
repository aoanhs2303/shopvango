      <?php require_once('vn_to_str.php') ?>
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Danh mục sản phẩm</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-object-ungroup"></i>VÁN GỖ</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-lg-3">
                        <ul>
                          <?php
                          $faicon = array('align-center', 'align-left', 'align-right', 'arrows-alt', 'cube', 'industry', 'square', 'th-large', 'th-list');
                          foreach ($danhmuc as $key => $dm) {
                            if (empty($faicon[$key])) $faicon[$key] = 'cube';
                            if ($dm['main'] == '1') { ?>
                              <li class="dropdown menu-item">
                                <a href="<?php echo base_url() . vn_to_str($dm['name']) . '-' . $dm['id'] ?>.html">
                                  <?php echo $dm['name']; ?>
                                </a>
                              </li>
                            <?php }
                          } ?>
                        </ul>
                      </div>
                      <div class="dropdown-banner-holder col-xs-12 col-sm-12 col-lg-9"> <a href="#"><img alt="" style="background-size: cover;" src="http://vangoviet.com/files/danhmuclon/vango.jpg" /></a> </div>
                    </div>
                  </li>
                </ul>
              </li>

              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-first-order"></i>CÁC LOẠI BỀ MẶT</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-lg-3">
                        <ul>
                          <?php
                          $faicon = array('align-center', 'align-left', 'align-right', 'arrows-alt', 'cube', 'industry', 'square', 'th-large', 'th-list');
                          foreach ($danhmuc as $key => $dm) {
                            if (empty($faicon[$key])) $faicon[$key] = 'cube';
                            if ($dm['main'] == '2') { ?>
                              <li class="dropdown menu-item">
                                <a href="<?php echo base_url() . vn_to_str($dm['name']) . '-' . $dm['id'] ?>.html">
                                  <?php echo $dm['name']; ?>
                                </a>
                              </li>
                            <?php }
                          } ?>
                        </ul>
                      </div>
                      <div class="dropdown-banner-holder col-xs-12 col-sm-12 col-lg-9"> <a href="#"><img style="background-size: cover;" alt="" src="http://vangoviet.com/files/danhmuclon/bemat.jpg" /></a> </div>
                    </div>
                  </li>
                </ul>
              </li>

              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-cubes"></i>SẢN PHẨM PHỤ</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-lg-3">
                        <ul>
                          <?php
                          $faicon = array('align-center', 'align-left', 'align-right', 'arrows-alt', 'cube', 'industry', 'square', 'th-large', 'th-list');
                          foreach ($danhmuc as $key => $dm) {
                            if (empty($faicon[$key])) $faicon[$key] = 'cube';
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
                      <div class="dropdown-banner-holder col-xs-12 col-sm-12 col-lg-9"> <a href="#"><img style="background-size: cover;"  alt="" src="http://vangoviet.com/files/danhmuclon/khac.jpg" /></a> </div>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
            <!-- /.nav -->
          </nav>
          <!-- /.megamenu-horizontal -->
        </div>

        <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
          <h3 class="section-title">FACEBOOK</h3>
          <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          </div>
          <!-- /.sidebar-widget -->
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
                              <!-- /.image -->

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
                        <!-- /.product-micro-row -->
                      </div>
                      <!-- /.product-micro -->

                    </div>
                  <?php } ?>

                </div>
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->

        <div class="sidebar-widget product-tag wow fadeInUp">
          <h3 class="section-title">Danh mục HOT</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="tag-list">
              <?php foreach ($danhmuc as $tag) { ?>
                <a class="item" title="<?php echo $tag['name'] ?>" href="<?php echo base_url() . vn_to_str($tag['name']) . '-' . $tag['id'] ?>.html"><?php echo $tag['name'] ?></a>
              <?php } ?>
              <!-- /.tag-list -->
            </div>
          </div>
          <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->

        <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
          <h3 class="section-title">Đăng ký</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <p>Để nhận được thông tin sản phẩm và khuyến mãi</p>
            <form>
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail1">Địa chỉ Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập Email của bạn">
              </div>
              <button class="btn btn-primary">Đăng ký</button>
            </form>
          </div>
          <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!-- ============================================== NEWSLETTER: END ============================================== -->

        <!-- ============================================== Testimonials============================================== -->


      </div>
      <!-- /.sidemenu-holder -->
      <!-- ============================================== SIDEBAR : END ============================================== -->
