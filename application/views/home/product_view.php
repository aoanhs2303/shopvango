<?php require_once('include/vn_to_str.php') ?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" style="margin-top: 15px" id="top-banner-and-menu" ng-controller="HomeCtrl">
  <div class="container">
    <div class="row">

      <?php echo $sidebar ?>
      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
        <!-- ========================================== SECTION – HERO ========================================= -->
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <?php foreach ($slideanh as $value) { ?>
              <a href="<?php echo $value['link'] ?>">
                <div class="item" style="background-image: url(<?php echo $value['image'] ?>);">
                </div>
              </a>
            <?php } ?>

          </div>
          <!-- /.owl-carousel -->
        </div>

        <!-- ========================================= SECTION – HERO : END ========================================= -->

        <!-- ============================================== INFO BOXES ============================================== -->
        <div class="info-boxes wow fadeInUp">
          <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">Địa chỉ</h4>
                    </div>
                  </div>
                  <h6 class="text"><?php echo $address[0]['value'] ?></h6>
                </div>
              </div>
              <!-- .col -->

              <div class="hidden-md col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">Số điện thoại</h4>
                    </div>
                  </div>
                  <h6 class="text">
                    <?php foreach ($sdt as $key => $sdt_item) {
                      if ($key == 0) {
                        echo $sdt_item['value'] . ' - ';
                      } else {
                        echo $sdt_item['value'];
                      }
                    } ?>
                  </h6>
                </div>
              </div>
              <!-- .col -->

              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">Nhận cắt ván</h4>
                    </div>
                  </div>
                  <h6 class="text"><a style="color: rgba(255,255,255,0.8);" href="<?php echo base_url() ?>dich-vu.html">Theo quy cách & Trang trí thi công trần - vách ngăn </a></h6>
                </div>
              </div>
              <!-- .col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.info-boxes-inner -->

        </div>
        <!-- /.info-boxes -->
        <!-- ============================================== INFO BOXES : END ============================================== -->
        <!-- ============================================== SCROLL TABS ============================================== -->
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">Ván ép</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1" style="margin-right: 0px">
              <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">Tất cả</a></li>
              <?php foreach ($category_van as $key => $van) { ?>
                <li>
                  <a data-transition-type="backSlide" href="#van-<?php echo $key; ?>" data-toggle="tab">
                    <?php echo $van['name'] ?>
                  </a>
                </li>
              <?php } ?>
            </ul>
            <!-- /.nav-tabs -->
            <div id="chonvanep">Chọn danh mục</div>
          </div>
          <div class="tab-content outer-top-xs">
            <div class="tab-pane tab-pane-van in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <?php foreach ($vanep as $key => $ve) { ?>
                    <?php foreach ($ve as $key => $all_ve) { ?>
                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <?php
                              $img = json_decode($all_ve['image']);
                              $img = $img[0];
                              ?>
                              <div class="image"> <a href="<?php echo base_url() . vn_to_str($all_ve['name']) . '-' . $all_ve['id'] ?>.chn"><img src="<?php echo $img ?>" alt="<?php echo $img ?>"></a> </div>
                              <div class="tag sale"><span><?php echo $all_ve['thick'] ?></span></div>
                            </div>
                            <div class="product-info text-left">
                              <h3 class="name"><a href="<?php echo base_url() . vn_to_str($all_ve['name']) . '-' . $all_ve['id'] ?>.chn"><?php echo $all_ve['name'] ?></a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <!--<div class="product-price"> <span class="price"> <?php echo number_format($all_ve['price']) ?> ₫  </span></div>-->
                              <div class="product-price text-danger"><b>Giá Liên hệ</b></div>
                            </div>
                            <div class="cart clearfix animate-effect">
                              <div class="btn-group">
                                <button class="add_cart btn btn-warning" style="background-color: #fdd922; color: #444;" data-productid="<?php echo $all_ve['id'] ?>" data-productname="<?php echo $all_ve['name'] ?>" data-price="<?php echo $all_ve['price'] ?>" data-productimg="<?php echo $img ?>" data-quantity="1" data-size="<?php echo $all_ve['size'] ?>">
                                  Thêm <i class="fa fa-shopping-cart"></i>
                                </button>
                                <a href="<?php echo base_url() . vn_to_str($all_ve['name']) . '-' . $all_ve['id'] ?>.chn" data-toggle="tooltip" title="Xem chi tiết" class="btn btn-info"><i class="fa fa-search"></i></a>
                              </div>
                              <!-- /.action -->
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  <?php } ?>
                </div>
              </div>
              <!-- /.product-slider -->
            </div>
            <!-- /.tab-pane -->

            <?php foreach ($vanep as $key => $ve) { ?>
              <div class="tab-pane tab-pane-van " id="van-<?php echo $key ?>">
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                    <?php foreach ($ve as $key => $thongtinve) { ?>
                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <?php
                              $img = json_decode($thongtinve['image']);
                              $img = $img[0];
                              ?>
                              <div class="image"> <a href="<?php echo base_url() . vn_to_str($thongtinve['name']) . '-' . $thongtinve['id'] ?>.chn"><img src="<?php echo $img ?>" alt=""></a> </div>
                              <!-- /.image -->
                              <div class="tag sale"><span><?php echo $thongtinve['thick'] ?></span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name"><a href="<?php echo base_url() . vn_to_str($thongtinve['name']) . '-' . $thongtinve['id'] ?>.chn"><?php echo $thongtinve['name'] ?></a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <!--<div class="product-price"> <span class="price"> <?php echo number_format($thongtinve['price']) ?> ₫  </span></div>-->
                              <div class="product-price text-danger"><b>Giá Liên hệ</b></div>
                              <!-- /.product-price -->

                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="btn-group">
                                <button class="add_cart btn btn-warning" style="background-color: #fdd922; color: #444;" data-productid="<?php echo $thongtinve['id'] ?>" data-productname="<?php echo $thongtinve['name'] ?>" data-price="<?php echo $thongtinve['price'] ?>" data-productimg="<?php echo $img ?>" data-quantity="1" data-size="<?php echo $thongtinve['size'] ?>">
                                  Thêm <i class="fa fa-shopping-cart"></i>
                                </button>
                                <a href="<?php echo base_url() . vn_to_str($thongtinve['name']) . '-' . $thongtinve['id'] ?>.chn" data-toggle="tooltip" title="Xem chi tiết" class="btn btn-info"><i class="fa fa-search"></i></a>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                    <?php } ?>

                    <!-- /.item -->
                  </div>
                  <!-- /.home-owl-carousel -->
                </div>
                <!-- /.product-slider -->
              </div>
              <!-- /.tab-pane -->
            <?php } ?>

          </div>
          <!-- /.tab-content -->
        </div>

        <!-- /***TẤM LÓT SÀN***/ -->

        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">Tấm lót sàn</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#all_lot" data-toggle="tab">Tất cả</a></li>
              <?php foreach ($category_lot as $key => $lot) { ?>
                <li>
                  <a data-transition-type="backSlide" href="#lot-<?php echo $key ?>" data-toggle="tab"><?php echo $lot['name'] ?>
                  </a>
                </li>
              <?php } ?>
            </ul>
            <div id="chontamlot">Chọn danh mục</div>
            <!-- /.nav-tabs -->
          </div>
          <div class="tab-content outer-top-xs">
            <div class="tab-pane tab-pane-lot in active" id="all_lot">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                  <?php foreach ($tamlot as $tam_lot) { ?>
                    <?php foreach ($tam_lot as $tam_lot_sp) { ?>
                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <?php $img = json_decode($tam_lot_sp['image']);
                              $img = $img[0]; ?>
                              <div class="image"> <a href="<?php echo base_url() . vn_to_str($tam_lot_sp['name']) . '-' . $tam_lot_sp['id'] ?>.chn"><img src="<?php echo $img ?>" alt=""></a> </div>
                              <!-- /.image -->

                              <div class="tag sale"><span><?php echo $tam_lot_sp['thick'] ?></span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name"><a href="<?php echo base_url() . vn_to_str($tam_lot_sp['name']) . '-' . $tam_lot_sp['id'] ?>.chn"><?php echo $tam_lot_sp['name'] ?></a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <!--<div class="product-price"> <span class="price"> <?php echo number_format($tam_lot_sp['price']) ?> ₫  </span></div>-->
                              <div class="product-price text-danger"><b>Giá Liên hệ</b></div>
                              <!-- /.product-price -->

                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="btn-group">
                                <button class="add_cart btn btn-warning" style="background-color: #fdd922; color: #444;" data-productid="<?php echo $tam_lot_sp['id'] ?>" data-productname="<?php echo $tam_lot_sp['name'] ?>" data-price="<?php echo $tam_lot_sp['price'] ?>" data-productimg="<?php echo $img ?>" data-quantity="1" data-size="<?php echo $tam_lot_sp['size'] ?>">
                                  Thêm <i class="fa fa-shopping-cart"></i>
                                </button>
                                <a href="<?php echo base_url() . vn_to_str($tam_lot_sp['name']) . '-' . $tam_lot_sp['id'] ?>.chn" data-toggle="tooltip" title="Xem chi tiết" class="btn btn-info"><i class="fa fa-search"></i></a>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->

                        </div>
                        <!-- /.products -->
                      </div>
                    <?php } ?>
                  <?php } ?>

                  <!-- /.item -->
                </div>
                <!-- /.home-owl-carousel -->
              </div>
              <!-- /.product-slider -->
            </div>
            <!-- /.tab-pane -->

            <?php foreach ($tamlot as $key => $tl) { ?>
              <div class="tab-pane tab-pane-lot" id="lot-<?php echo $key ?>">
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    <?php foreach ($tl as $tam_lot_item) { ?>
                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <?php $img = json_decode($tam_lot_sp['image']);
                              $img = $img[0]; ?>
                              <div class="image"> <a href="<?php echo base_url() . vn_to_str($tam_lot_item['name']) . '-' . $tam_lot_item['id'] ?>.chn"><img src="<?php echo $img ?>" alt=""></a> </div>
                              <!-- /.image -->

                              <div class="tag sale"><span><?php echo $tam_lot_item['thick'] ?></span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name"><a href="<?php echo base_url() . vn_to_str($tam_lot_item['name']) . '-' . $tam_lot_item['id'] ?>.chn"><?php echo $tam_lot_item['name'] ?></a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <!--<div class="product-price"> <span class="price"> <?php echo number_format($tam_lot_item['price']) ?> ₫  </span></div>-->
                              <div class="product-price text-danger"><b>Giá Liên hệ</b></div>
                              <!-- /.product-price -->

                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="btn-group">
                                <button class="add_cart btn btn-warning" style="background-color: #fdd922; color: #444;" data-productid="<?php echo $tam_lot_item['id'] ?>" data-productname="<?php echo $tam_lot_item['name'] ?>" data-price="<?php echo $tam_lot_item['price'] ?>" data-productimg="<?php echo $img ?>" data-quantity="1" data-size="<?php echo $tam_lot_item['size'] ?>">
                                  Thêm <i class="fa fa-shopping-cart"></i>
                                </button>
                                <a href="<?php echo base_url() . vn_to_str($tam_lot_item['name']) . '-' . $tam_lot_item['id'] ?>.chn" data-toggle="tooltip" title="Xem chi tiết" class="btn btn-info"><i class="fa fa-search"></i></a>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->

                        </div>
                        <!-- /.products -->
                      </div>
                    <?php } ?>
                  </div>
                  <!-- /.home-owl-carousel -->
                </div>
                <!-- /.product-slider -->
              </div>
            <?php } ?>

            <!-- /.tab-pane -->

          </div>
          <!-- /.tab-content -->
        </div>

        <!-- /.scroll-tabs -->
        <!-- ============================================== SCROLL TABS : END ============================================== -->
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
            <?php foreach ($banner as $value) { ?>
              <div class="col-md-6 col-sm-6">
                <div class="wide-banner cnt-strip">
                  <a href="<?php echo $value['link'] ?>">
                    <div class="image"> <img class="img-responsive" src="<?php echo $value['image'] ?>" alt=""> </div>
                  </a>
                </div>
                <!-- /.wide-banner -->
              </div>
            <?php } ?>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.wide-banners -->

        <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->

        <!-- ============================================== BEST SELLER ============================================== -->

        <div class="best-deal wow fadeInUp outer-bottom-xs">
          <h3 class="section-title">Sản phẩm bán chạy</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
              <?php foreach ($hot as $key => $hot_items) { ?>
                <div class="item">
                  <div class="products best-product">
                    <?php foreach ($hot_items as $hot_item) { ?>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <?php $img = json_decode($hot_item['image']);
                                $img = $img[0]; ?>
                                <div class="image"> <a href="<?php echo base_url() . vn_to_str($hot_item['name']) . '-' . $hot_item['id'] ?>.chn"> <img src="<?php echo $img ?>" alt="<?php echo $img ?>"> </a> </div>
                              </div>
                            </div>
                            <!-- /.col -->
                            <div class="col2 col-xs-7">
                              <div class="product-info">
                                <h3 class="name"><a href="<?php echo base_url() . vn_to_str($hot_item['name']) . '-' . $hot_item['id'] ?>.chn"><?php echo $hot_item['name'] ?></a></h3>
                                <div class="rating rateit-small"></div>
                                <!--<div class="product-price"> <span class="price"> <?php echo number_format($hot_item['price']) ?> ₫  </span> </div>-->
                                <div class="product-price text-danger"><b>Giá Liên hệ</b></div>
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
              <?php } ?>
            </div>
          </div>
          <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!-- ============================================== BEST SELLER : END ============================================== -->

        <!-- ============================================== BLOG SLIDER ============================================== -->
        <section class="section latest-blog outer-bottom-vs wow fadeInUp">
          <h3 class="section-title">Tin tức - Dịch vụ - Khuyến mãi</h3>
          <div class="blog-slider-container outer-top-xs">
            <div class="owl-carousel blog-slider custom-carousel">
              <?php foreach ($dichvu as $value) { ?>
                <div class="item">
                  <div class="blog-post">
                    <div class="blog-post-image">
                      <div class="image"> <a href="<?php echo base_url() ?>dichvu/<?php echo vn_to_str($value['name']) . '-' . $value['id'] ?>.html">
                          <img style="height: 200px;" src="<?php echo $value['image'] ?>" alt=""></a> </div>
                    </div>
                    <!-- /.blog-post-image -->

                    <div class="blog-post-info text-left">
                      <h3 class="name"><a href="<?php echo base_url() ?>dichvu/<?php echo vn_to_str($value['name']) . '-' . $value['id'] ?>.html"><?php echo $value['name'] ?></a></h3>
                      <span class="info">Thành Công &nbsp;|&nbsp; <?php echo date('d/m/Y', $value['datetime']) ?> </span>
                      <p class="text"><?php echo $value['summary'] ?></p>
                      <a href="<?php echo base_url() ?>dichvu/<?php echo vn_to_str($value['name']) . '-' . $value['id'] ?>.html" class="lnk btn btn-primary">Chi tiết</a>
                    </div>
                    <!-- /.blog-post-info -->

                  </div>
                  <!-- /.blog-post -->
                </div>
                <!-- /.item -->
              <?php } ?>
            </div>
            <!-- /.owl-carousel -->
          </div>
          <!-- /.blog-slider-container -->
        </section>
        <!-- /.section -->
        <!-- ============================================== BLOG SLIDER : END ============================================== -->


      </div>
      <!-- /.homebanner-holder -->
      <!-- ============================================== CONTENT : END ============================================== -->
    </div>
    <!-- /.row -->
    <div id="test_c">

    </div>
  </div>
  <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
<!-- ============================================================= FOOTER ============================================================= -->

<script>
  $(document).ready(function() {
    $('.add_cart').click(function() {
      product_id = $(this).data('productid');
      product_name = $(this).data('productname');
      product_price = $(this).data('price');
      product_quantity = $(this).data('quantity');
      product_img = $(this).data('productimg');
      product_size = $(this).data('size');

      $.ajax({
        url: "<?php echo base_url() ?>cart/add",
        type: 'POST',
        data: {
          product_id: product_id,
          product_name: product_name,
          product_price: product_price,
          product_quantity: product_quantity,
          product_img: product_img,
          product_size: product_size
        },
        success: function(data) {
          $('#show_cart').html(data);
        }
      })
      $.notify("Thêm vào giỏ hàng thành công !", {
        style: 'bootstrap',
        className: 'success',
        autoHide: true,
        autoHideDelay: 2000
      });
    });

    $('#show_cart').load("<?php echo base_url(); ?>cart/load");

    $(document).on('click', '.delete_cart', function() {
      var row_id = $(this).attr("id");
      $.ajax({
        url: "<?php echo base_url(); ?>cart/remove",
        method: "POST",
        data: {
          row_id: row_id
        },
        success: function(data) {
          $('#show_cart').html(data);
        }
      });
    });
  });


  app.controller('HomeCtrl', function($scope, $http, $rootScope) {
    $scope.appDomain = "http://vangoviet.com/";
    $http({
      url: $scope.appDomain + 'api/getCategoryVan',
      method: "GET"
    }).then(function(res) {
      var categoryVan = res.data
      var mobileSelect1 = new MobileSelect({
        trigger: '#chonvanep',
        title: 'Chọn danh mục sản phẩm',
        ensureBtnText: 'Chọn',
        cancelBtnText: 'Hủy',
        wheels: [{data : categoryVan}],
        keyMap: {id:'id', value:'name'},
        position: [2],
        transitionEnd: function(indexArr, data) {
          //console.log(data);
        },
        callback: function(indexArr, data) {
          $('.tab-pane-van').removeClass('active');
          $('#van-' + indexArr).addClass('active');
        }
      });
    });
    

    $http({
      url: $scope.appDomain + 'api/getCategoryTamLot',
      method: "GET"
    }).then(function(res) {
      var categoryVan = res.data
      var mobileSelect1 = new MobileSelect({
        trigger: '#chontamlot',
        title: 'Chọn danh mục sản phẩm',
        ensureBtnText: 'Chọn',
        cancelBtnText: 'Hủy',
        wheels: [{data : categoryVan}],
        keyMap: {id:'id', value:'name'},
        position: [2],
        transitionEnd: function(indexArr, data) {
          //console.log(data);
        },
        callback: function(indexArr, data) {
          $('.tab-pane-lot').removeClass('active');
          $('#lot-' + indexArr).addClass('active');
        }
      });
    });
  });
    
    
</script>