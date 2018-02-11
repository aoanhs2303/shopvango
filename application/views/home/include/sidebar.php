      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Danh mục sản phẩm</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              <?php 
              $faicon = ['align-center', 'align-left', 'align-right', 'arrows-alt', 'cube', 'industry', 'square', 'th-large', 'th-list'];
              foreach ($danhmuc as $key => $dm) { if(empty($faicon[$key])) $faicon[$key] = 'cube' ?>
              <li class="dropdown menu-item"> 
                <a href="<?php echo base_url() ?>Home/danhmuc/<?php echo $dm['id'] ?>" >
                  <i class="icon fa fa-<?php echo $faicon[$key] ?>" aria-hidden="true"></i>
                  <?php echo $dm['name']; ?>
                </a>
              </li>
              <?php } ?>
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
                            <?php $img = json_decode($sh['image'])[0] ?>
                            <div class="image"> <a href="<?php echo base_url() ?>Home/sanpham/<?php echo $sh['id'] ?>"> <img src="<?php echo $img ?>" alt="<?php echo $img ?>"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="<?php echo base_url() ?>Home/sanpham/<?php echo $sh['id'] ?>"><?php echo $sh['name'] ?></a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> <?php echo number_format($sh['price']) ?> ₫  </span> </div>
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
              <a class="item" title="<?php echo $tag['name'] ?>" href="category.html"><?php echo $tag['name'] ?></a> 
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
        <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
          <div id="advertisement" class="advertisement">
            <div class="item">
              <div class="avatar"><img src="<?php echo base_url() ?>includehome/images/testimonials/member1.png" alt="Image"></div>
              <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
              <div class="clients_author">John Doe <span>Abc Company</span> </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            
            <div class="item">
              <div class="avatar"><img src="<?php echo base_url() ?>includehome/images/testimonials/member3.png" alt="Image"></div>
              <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
              <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
            </div>
            <!-- /.item -->
            
            <div class="item">
              <div class="avatar"><img src="<?php echo base_url() ?>includehome/images/testimonials/member2.png" alt="Image"></div>
              <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
              <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
      </div>
      <!-- /.sidemenu-holder --> 
      <!-- ============================================== SIDEBAR : END ============================================== --> 