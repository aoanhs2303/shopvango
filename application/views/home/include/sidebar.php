      <?php require_once('vn_to_str.php') ?>
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
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

              <li class="dropdown menu-item">
                <a href="<?php echo base_url() . 'san-go-25' ?>.html">
                  SÀN GỖ
                </a>
              </li>

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
      </div>
      <!-- ============================================== SIDEBAR : END ============================================== -->