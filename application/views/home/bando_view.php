<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content">
  <div class="container" style="margin-top: 15px">
    <div class="row">
      <div class="blog-pagem contact-page">
        <div class="row" style="background-color: #FFF; padding: 10px">
          <h1 class="section-title" style="font-size: 26px; text-align: center; padding-bottom: 20x">THÔNG TIN LIÊN HỆ</h1>
          <div class="col-md-6">
            <div class="blog-post wow fadeInUp">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7838.937787802296!2d106.59780882544179!3d10.77535421530539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752c6bbbb16f2d%3A0x8bbf14f7387c95aa!2zMjE3IEzDqiBWxINuIFF14bubaSwgQsOsbmggSMawbmcgSMOyYSBBLCBCw6xuaCBUw6JuLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1519629065919" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              <span class="date-time"><b>Ngày đăng: 26/2/2018</b></span>
            </div>
            <!-- COL-9 -->
          </div>
          <div class="col-md-6 contact-info">
            <div class="contact-title">
              <h4 style="font-size: 16px;">
                <img style="margin-top: -5px;height: 40px;padding-right: 20px;" src="<?php echo base_url() ?>includehome/images/logoxxx.png" alt="logo">
                <b>CÔNG TY TNHH VÁN GỖ THÀNH CÔNG</b></h4>
            </div>
            <div class="clearfix address">
              <span class="contact-i"><i class="fa fa-map-marker"></i></span>
              <span style="margin-top: 5px;" class="contact-span">217 Lê Văn Quới, Phường Bình Trị Đông, Quận Tân Bình, TP. Hồ Chí Minh</span>
            </div>
            <div class="clearfix phone-no">
              <span class="contact-i"><i class="fa fa-phone"></i></span>
              <span style="margin-top: 5px;" class="contact-span">0938 690 689 - 0914 412 807 - 01218 687 569</span>
            </div>
            <div class="clearfix email">
              <span class="contact-i"><i class="fa fa-envelope"></i></span>
              <span style="margin-top: 5px;" class="contact-span"><a href="#">vangobachviet@gmail.com</a></span>
            </div>
            <br>
            <div class="contact-form">
              <div class="col-md-4 ">
                <form class="register-form" role="form">
                  <div class="form-group">
                    <label class="info-title" for="exampleInputName">HỌ VÀ TÊN <span>*</span></label>
                    <input type="text" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="">
                  </div>
                </form>
              </div>
              <div class="col-md-4">
                <form class="register-form" role="form">
                  <div class="form-group">
                    <label class="info-title" for="exampleInputEmail1">EMAIL <span>*</span></label>
                    <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="">
                  </div>
                </form>
              </div>
              <div class="col-md-4">
                <form class="register-form" role="form">
                  <div class="form-group">
                    <label class="info-title" for="exampleInputTitle">SĐT <span>*</span></label>
                    <input type="text" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="">
                  </div>
                </form>
              </div>
              <div class="col-md-12">
                <form class="register-form" role="form">
                  <div class="form-group">
                    <label class="info-title" for="exampleInputComments">LỜI NHẮN <span>*</span></label>
                    <textarea class="form-control unicase-form-control" id="exampleInputComments"></textarea>
                  </div>
                </form>
              </div>
              <div class="col-md-12 outer-bottom-small m-t-10">
                <button type="submit" style="background: #333" class="btn-upper btn btn-primary checkout-page-button">GỬI LỜI NHẮN</button>
              </div>
            </div>


          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- ============================================================= FOOTER ============================================================= -->

  <script>
    $(document).ready(function() {
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
  </script>