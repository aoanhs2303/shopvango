  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active"> <a href="<?php echo base_url() ?>Home">Home</a> </li>
                <li class="dropdown yamm mega-menu"> <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Giới thiệu</a>
                </li>
                <li class="dropdown mega-menu"> 
                <a href="category.html"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm <span class="menu-label hot-menu hidden-xs">hot</span> </a>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-3 col-menu">
                            <h2 class="title">Ván ép</h2>
                            <ul class="links">
                            <?php foreach ($category_van as $key => $van) { ?>
                            <li>
                              <a href="" >
                                <?php echo $van['name'] ?> 
                              </a>
                            </li>
                            <?php } ?>
                            </ul>
                          </div>
                          <!-- /.col -->
                          
                          <div class="col-xs-12 col-sm-12 col-md-3 col-menu">
                            <h2 class="title">Tấm lót sàn</h2>
                            <ul class="links">
                              <?php foreach ($category_lot as $key => $lot) { ?>
                              <li>
                                <a href="" >
                                  <?php echo $lot['name'] ?> 
                                </a>
                              </li>
                              <?php } ?>
                            </ul>
                          </div>
                          <!-- /.col -->

                          <div class="col-xs-12 col-sm-12 col-md-3 col-menu">
                            <h2 class="title">Sản phẩm khác</h2>
                            <ul class="links">
                              <?php foreach ($category_khac as $key => $khac) { ?>
                              <li>
                                <a href="" >
                                  <?php echo $khac['name'] ?> 
                                </a>
                              </li>
                              <?php } ?>
                            </ul>
                          </div>
                          <!-- /.col -->

                        </div>
                        <!-- /.row --> 
                      </div>
                      <!-- /.yamm-content --> </li>
                  </ul>
                </li>
                <li class="dropdown hidden-sm"> <a href="category.html">Dịch vụ<span class="menu-label new-menu hidden-xs">new</span> </a> </li>
                <li class="dropdown hidden-sm"> <a href="category.html">Tin tức</a> </li>
                <li class="dropdown"> <a href="contact.html">Liên hệ</a> </li>
                <li class="dropdown"> <a href="contact.html">Hướng dẫn mua hàng</a> </li>
                <li class="dropdown  navbar-right special-menu"> <a href="#">Mua ngay</a> </li>
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