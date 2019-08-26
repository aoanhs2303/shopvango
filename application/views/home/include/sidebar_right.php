<!-- ============================================== SIDEBAR ============================================== -->
<style>
    .sidebar-module-container .search-area .search-button:after {
        content: "\f002";
        font-family: fontawesome;
        font-size: 13px;
        position: absolute;
        top: 14px;
        right: 30px;
        background-color: #fff;
        padding-left: 10px;
    }
</style>
<?php require_once('vn_to_str.php') ?>
<div class="col-xs-12 col-sm-12 col-md-3 sidebar" ng-controller="SidebarCtrl">
    <div class="sidebar-module-container">
        <div class="search-area outer-bottom-small">
            <form id="formtintuc" action="<?php echo base_url() . 'Home/searchtintuc' ?>">
                <div class="control-group">
                    <input placeholder="Tìm kiếm tin tức ..." name="title" class="search-field" style="font-size: 12px;
                    color: #9e9e9e;
                    padding: 14px;
                    border: 1px solid #e1e1e1;
                    width: 100%;
                    position: relative;">
                    <a href="javascript:;" onclick="document.getElementById('formtintuc').submit()" class="search-button"></a>
                </div>
            </form>
        </div>
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
                                            </div>
                                            <!-- /.product-image -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col col-xs-7">
                                            <div class="product-info">
                                                <h3 class="name"><a href="<?php echo base_url() ?>Home/sanpham/<?php echo $sh['id'] ?>"><?php echo $sh['name'] ?></a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="product-price"> <span class="price"> <?php echo number_format($sh['price']) ?> ₫ </span> </div>
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

    <!-- ============================================== NEWSLETTER: END ============================================== -->

    <!-- ============================================== Testimonials============================================== -->


</div>
<!-- /.sidemenu-holder -->
<!-- ============================================== SIDEBAR : END ============================================== -->
<script>
    var app = angular.module('myApp', [])
    app.controller('SidebarCtrl', function($scope, $http, $rootScope) {


    })
</script>