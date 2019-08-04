<footer id="footer" class="footer color-bg">
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Liên hệ</h4>
          </div>
          <!-- /.module-heading -->

          <div class="module-body">
            <ul class="toggle-footer" style="">
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body">
                  <p><?php echo $address[0]['value'] ?></p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body">
                  <p><?php foreach ($sdt as $key => $sdt_item) {
                        echo $sdt_item['value'] . '&nbsp;&nbsp;';
                      } ?></p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body"> <span><a href="#"><?php echo $email[0]['value'] ?></a></span> </div>
              </li>
            </ul>
          </div>
          <!-- /.module-body -->
        </div>
        <!-- /.col -->

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Cửa hàng Thành Công</h4>
          </div>
          <div class="text" style="color: #666; font-size: 13px">
            Cửa hàng Gỗ ghép Thành Công hoạt động trong các lĩnh vực sản xuất, thương mại và xuất nhập khẩu các sản phẩm gỗ nguyên liệu như: <br> Gỗ ghép các loại, Gỗ xẻ sấy, Gỗ ghép/Veneer, MDF/Veneer, HDF/Veneer, MFC, Okal, Ván sàn.
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Hướng dẫn và chính sách</h4>
          </div>
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a title="Your Account" href="#">Hướng dẫn mua hàng</a></li>
              <li><a title="Information" href="#">Chính sách đổi trả</a></li>
              <li><a title="Addresses" href="#">Chính sách vận chuyển</a></li>
              <li><a title="Addresses" href="#">Chính sách bảo mật</a></li>
              <li class="last"><a title="Orders History" href="#">Câu hỏi thường gặp</a></li>
            </ul>
          </div>
        </div>
        <!-- /.col -->

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Kết nối với chúng tôi</h4>
          </div>
          <!-- /.module-heading -->

          <div class="module-body">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          </div>
          <!-- /.module-body -->
        </div>
      </div>
    </div>
  </div>
</footer>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5d341d7c9b94cd38bbe87a13/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<!--End of Tawk.to Script-->



<script src="<?php echo base_url() ?>includehome/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>includehome/js/bootstrap-hover-dropdown.min.js"></script>
<script src="<?php echo base_url() ?>includehome/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>includehome/js/echo.min.js"></script>
<script src="<?php echo base_url() ?>includehome/js/jquery.easing-1.3.min.js"></script>
<script src="<?php echo base_url() ?>includehome/js/bootstrap-slider.min.js"></script>
<script src="<?php echo base_url() ?>includehome/js/jquery.rateit.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>includehome/js/lightbox.min.js"></script>
<script src="<?php echo base_url() ?>includehome/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url() ?>includehome/js/wow.min.js"></script>
<script src="<?php echo base_url() ?>includehome/js/scripts.js"></script>
</body>
</html>
