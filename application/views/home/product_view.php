<?php require_once('include/vn_to_str.php') ?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-vs" style="margin-top: 15px" id="top-banner-and-menu" ng-controller="HomeCtrl">
  <div class="container">
    <div class="row">

      <?php echo $sidebar ?>
      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
        
        <!-- /.info-boxes -->
        <!-- ============================================== INFO BOXES : END ============================================== -->
        <style>
          .skew-menu {
            text-align: center;
          }

          .skew-menu ul {
            display: inline-block;
            margin: 0;
            padding: 0;
            list-style: none;
            transform: skew(-25deg);
          }

          .skew-menu ul li {
            background: #fac463;
            float: left;
            border-right: 1px solid #eee;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            text-transform: uppercase;
            color: #333;
            font-weight: bolder;
            transition: all 0.3s linear;
          }

          .skew-menu ul li:first-child {
            border-radius: 7px 0 0 7px;
          }

          .skew-menu ul li:last-child {
            border-right: none;
            border-radius: 0 7px 7px 0;
          }

          .skew-menu ul li:hover {
            background: #eee;
          }

          .skew-menu ul li a {
            display: block;
            padding: 1em 2em;
            color: inherit;
            text-decoration: none;
            transform: skew(25deg);
          }
        </style>
        <div id="product-tabs-slider" style="margin-top: 0px" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <nav class="skew-menu">
            <h2 style="font-weight: bold; margin-top: 0px">CÁC LOẠI VÁN GỖ</h2>
              <ul>
                <li><a class="menu-van-1">VÁN MDF</a></li>
                <li><a class="menu-van-2">VÁN MFC</a></li>
                <li><a class="menu-van-3">GỖ GHÉP</a></li>
                <li><a class="menu-van-4">GỖ HDF</a></li>
                <li><a class="menu-van-5">VÁN OKAL</a></li>
                <li><a class="menu-van-6">SMARTBOARD</a></li>
              </ul>
            </nav>
          </div>
          <style>
            .blog-card {
              display: flex;
              flex-direction: column;
              margin: 1rem auto;
              box-shadow: 4px 3px 7px 3px rgba(0, 0, 0, 0.3);
              margin-bottom: 1.6%;
              background: #fff;
              line-height: 1.4;
              font-family: 'Montserrat', sans-serif;
              border-radius: 5px;
              overflow: hidden;
              z-index: 0;
            }

            .blog-card a {
              color: inherit;
            }

            .blog-card a:hover {
              color: #5ad67d;
            }

            .blog-card:hover .photo {
              -webkit-transform: scale(1.3) rotate(3deg);
              transform: scale(1.3) rotate(3deg);
            }

            .blog-card .meta {
              position: relative;
              z-index: 0;
              height: 200px;
            }

            .blog-card .photo {
              position: absolute;
              top: 0;
              right: 0;
              bottom: 0;
              left: 0;
              background-size: cover;
              background-position: center;
              transition: -webkit-transform .2s;
              transition: transform .2s;
              transition: transform .2s, -webkit-transform .2s;
            }

            .blog-card .details,
            .blog-card .details ul {
              margin: auto;
              padding: 0;
              list-style: none;
            }

            .blog-card .details {
              position: absolute;
              top: 0;
              bottom: 0;
              left: -100%;
              margin: auto;
              transition: left .2s;
              background: rgba(0, 0, 0, 0.6);
              color: #fff;
              padding: 10px;
              width: 100%;
              font-size: .9rem;
            }

            .blog-card .details a {
              -webkit-text-decoration: dotted underline;
              text-decoration: dotted underline;
            }

            .blog-card .details ul li {
              display: inline-block;
            }

            .blog-card .details .author:before {
              font-family: 'Open Sans', sans-serif;;
              margin-right: 10px;
              content: "\f007";
            }

            .blog-card .details .date:before {
              font-family: 'Open Sans', sans-serif;;
              margin-right: 10px;
              content: "\f133";
            }

            .blog-card .details .tags ul:before {
              font-family: 'Open Sans', sans-serif;;
              content: "\f02b";
              margin-right: 10px;
            }

            .blog-card .details .tags li {
              margin-right: 2px;
            }

            .blog-card .details .tags li:first-child {
              margin-left: -4px;
            }

            .blog-card .description {
              padding: 1rem;
              background: #fff;
              position: relative;
              z-index: 1;
            }

            .blog-card .description h1,
            .blog-card .description h2 {
              font-family: 'Montserrat', sans-serif;
              font-weight: bold;
              text-transform: uppercase
            }

            .blog-card .description h1 {
              line-height: 1;
              margin: 0;
              font-size: 20px;
            }

            .blog-card .description h2 {
              font-size: 12px;
              font-weight: 300;
              text-transform: uppercase;
              color: #a2a2a2;
              margin-top: 5px;
            }

            .blog-card .description .read-more {
              text-align: right;
            }

            .blog-card .description .read-more a {
              color: #222;
              display: inline-block;
              position: relative;
              font-weight: bold;
            }

            .blog-card .description .read-more a:after {
              content: "\f061";
              font-family: FontAwesome;
              margin-left: -10px;
              opacity: 0;
              vertical-align: middle;
              transition: margin .3s, opacity .3s;
            }

            .blog-card .description .read-more a:hover:after {
              margin-left: 5px;
              opacity: 1;
            }

            .blog-card p {
              position: relative;
              margin: 1rem 0 0;
            }

            .blog-card p:first-of-type {
              margin-top: 1.25rem;
            }

            .blog-card p:first-of-type:before {
              content: "";
              position: absolute;
              height: 5px;
              background: #fac463;
              width: 35px;
              top: -0.75rem;
              border-radius: 3px;
            }

            .blog-card:hover .details {
              left: 0%;
            }

            @media (min-width: 640px) {
              .blog-card {
                flex-direction: row;
                max-width: 95%;
              }

              .blog-card .meta {
                flex-basis: 40%;
                height: auto;
              }

              .blog-card .description {
                flex-basis: 60%;
              }

              .blog-card .description:before {
                -webkit-transform: skewX(-3deg);
                transform: skewX(-3deg);
                content: "";
                background: #fff;
                width: 30px;
                position: absolute;
                left: -10px;
                top: 0;
                bottom: 0;
                z-index: -1;
              }

              .blog-card.alt {
                flex-direction: row-reverse;
              }

              .blog-card.alt .description:before {
                left: inherit;
                right: -10px;
                -webkit-transform: skew(3deg);
                transform: skew(3deg);
              }

              .blog-card.alt .details {
                padding-left: 25px;
              }
            }
          </style>
          <div class="blog-card p-van-1">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/v1.jpg)"></div>
            </div>
            <div class="description">
              <h1>VÁN GỖ MDF</h1>
              <p>MDF (MEDIUM DENSITY FIBERBOARD) là loại ván đã qua quá trình ép gỗ thành sợi với tỉ lệ keo UF nhất định, tùy theo yêu cầu chất lượng, nguyên liệu gỗ, độ dày. </p>
              <p> MDF thuộc loại gỗ nhân tạo có độ bền cơ lý cao, kích thước lớn, phù hợp với công nghệ sản xuất đồ mộc nội thất trong vùng khí hậu nhiệt đới như Việt Nam nên được sử dụng rộng rãi trong nhiều lĩnh vực sản xuất trang trí nội thất, xây dựng. Có 2 loại chính là ván mdf thường và mdf chịu nước (MDF chống ẩm).</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'mdf-2.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>

          <div class="blog-card alt p-van-2">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/v2.jpg)"></div>
            </div>
            <div class="description">
              <h1>VÁN GỖ MFC</h1>
              <p> Ván MFC (melamine faced chipboard) là loại ván okal (ván dăm) phủ lên bề mặt lớp melamine. Cùng với ván MDF, MFC được sử dụng làm nội thất nhiều nhất nhất hiện nay. Nguồn gỗ chính để sản xuất ván MFC là cây gỗ trồng, được thu hoạch ngắn ngày.</p>
              <p>Cây gỗ mang về nhà máy, sau đó băm nhỏ thành dăm gỗ và cũng kết hợp với keo, ép tạo độ dày. Sau khi ra thành phẩm theo độ dày (thường 2,5 đến 25mm), kích thướt (thường 1220×2440 mm hoặc 1830×2440 mm) ván được đêm đi hoàn thiện bề mặt bằng lớp melamine tạo vân gỗ rất đa dạng và phong phú.</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'mfc-1.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>

          <div class="blog-card p-van-3">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/v3.jpg)"></div>
            </div>
            <div class="description">
              <h1>GỖ GHÉP</h1>
              <p>Gỗ ghép được sản xuất từ nguyên liệu chính là cây thông trong nước. Những thanh gỗ nhỏ đã qua xử lý hấp sấy, trên dây chuyền công nghệ tiên tiến, thiết bị hiện đại, gỗ được cưa, bào, phay, ghép, ép, chà và sơn phủ trang trí.</p>
              <p> Nội thất bằng gỗ vẫn luôn được ưa chuộng ở mọi thời đại. Ngày nay, gỗ tự nhiên đã không còn đủ để đáp ứng được nhu cầu người sử dụng bởi sự khai thác quá mức. Do đó, gỗ tự nhiên ghép thanh xuất hiện dường như đã giải được bài toán khó cho các kiến trúc sư.</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'go-ghep-6.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>
          
          <div class="blog-card alt p-van-4">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/v4.jpg)"></div>
            </div>
            <div class="description">
              <h1>TẤM GỖ HDF</h1>
              <p> HDF là từ viết tắt của từ High Density Fiberboard (tấm gỗ HDF hay còn gọi là tấm ván ép HDF)</p>
              <p>Gỗ công nghiệp HDF được tạo thành bởi 80-85% chất liệu là gỗ tự nhiên, còn lại là các phụ gia làm tăng độ cứng và kết dính cho gỗ. Hầu hết đều sử dụng lại lõi HDF đạt tiêu chuẩn E1, đây là tiêu chuẩn đảm bảo lõi gỗ có đủ độ cứng, bền, và có nguồn gốc tự nhiên, không có hại cho sức khoẻ. Lõi gỗ có thể là màu xanh hoặc màu trắng tuỳ thuộc vào nguồn nguyên liệu đầu vào. màu của lõi gỗ không ảnh hưởng gì tới chất lượng của lõi gỗ.</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'go-hdf-4.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>

          <div class="blog-card p-van-5">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/v5.jpg)"></div>
            </div>
            <div class="description">
              <h1>VÁN GỖ OKAL</h1>
              <p>Okal (particle board) hay còn goi là ván dăm, nguyên liệu chính để sản xuất từ gỗ rừng trồng qua quá trình xay thành gỗ dăm ép trộn với keo. Ván okal có hai loại thường và chống ẩm có độ dày từ 8mm đến 25mm, kích thướt tiêu chuẩn 1220 x 2440 mm.</p>
              <p> Okal là loại ván phổ biến nhất trên thị trường có thể gia công phủ melamine, veneer, sơn, phủ pu. Ván được dùng sản xuất nội thất văn phòng, quầy tủ, hộc tủ, ngăn tủ, tủ bếp…</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'okal-3.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>

          <div class="blog-card alt p-van-6">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/v6.jpg)"></div>
            </div>
            <div class="description">
              <h1>TẤM SMARTBOARD</h1>
              <p> Tấm Smartboard SCG là lựa chọn thích hợp cho tường vách ngăn, và sàn trong nhà hoặc ngoài trời, đặc biệt phù hợp với những công trình cần nâng cấp, mở rộng hoặc sửa chữa lại.</p>
              <p> Khả năng chịu lực cao và độ bền lâu: chống lại hơi ẩm hay thời tiết khắc nghiệt như nắng nóng, mưa nhiều, là giải pháp cho ứng dụng làm sàn hoặc vách ngăn tường bao ngoài trời.</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'tam-smartboard-7.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>

          <br>
        </div>

        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <nav class="skew-menu">
              <h2 style="font-weight: bold; margin-top: 0px">CÁC LOẠI BỀ MẶT</h2>
              <ul>
                <li><a class="menu-tam-1">PHỦ MELAMINE</a></li>
                <li><a class="menu-tam-2">PHỦ LAMINATE</a></li>
                <li><a class="menu-tam-3">PHỦ ACRYLIC</a></li>
                <li><a class="menu-tam-4">SƠN</a></li>
                <li><a class="menu-tam-5">DÁN VENEER</a></li>
              </ul>
            </nav>
          </div>
          <div class="blog-card p-tam-1">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/t1.jpg)"></div>
            </div>
            <div class="description">
              <h1>BỀ MĂT PHỦ MELAMINE</h1>
              <p>Melamine rất phù hợp giá tiền nên được áp dụng làm cho các văn phòng, công sở như bàn, tủ, hộc văn phòng làm việc, các hệ tủ áo, giường..</p>
              <p> Là bề mặt nhựa tổng hợp Melamine có độ dày rất mỏng ước chừng 0.4 - 1 rem, được phủ lên cốt gỗ, thông thường là cốt gỗ Ván dăm (Okal) hoặc Ván mịn (MDF). Sau khi hoàn thiện các tấm gỗ Melamine có độ dày thông thường là 18mm và 25mm. Có các kích thước phổ thông là 1220 x 2440 hoặc 1830 x 2440mm. Gỗ MFC có ưu điểm nổi bật đó là có nhiều màu sắc, màu sắc trong gỗ MFC rất tươi, đều màu, sáng màu, có thể ứng dụng rộng dãi trong các văn phòng, gia đình và khách sạn.</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'phu-melamine-13.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>

          <div class="blog-card alt p-tam-2">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/t2.jpg)"></div>
            </div>
            <div class="description">
              <h1>BỀ MĂT PHỦ LAMINATE</h1>
              <p>Laminate có nhiều ưu điểm nổi trội hơn MFC, và bền hơn MFC vì có độ dày nhiều hơn, các màu sắc của Laminate cùng nhiều như của MFC.</p>
              <p>Bề mặt laminate là bề mặt nhựa tổng hợp, có độ dày nhiều hơn Melamine rất nhiều, độ dày của laminate là 0.5-1mm tùy từng loại ( có thể phần biệt laminate và Melamine qua độ dày), tuy nhiên laminate thông thường vẫn sử dụng có độ dày là 0.7 hoặc 0.8mm. Cũng như MFC, Laminate chủ yếu được phủ lên các cốt gỗ Ván dán (Okal), Ván mịn (MDF). Ngoài ra Laminate còn có thể dán vào gỗ uốn cong theo công nghệ postforming, ứng dụng cho làm các loại mặt bàn, mặt ghế, tủ, hộc.</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'phu-laminate-16.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>

          <div class="blog-card p-tam-3">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/t3.jpg)"></div>
            </div>
            <div class="description">
              <h1>BỀ MĂT PHỦ ACRYLIC</h1>
              <p>Trong ngành gỗ, tấm Acrylic là một loại bề mặt trang trí và thường được ép lên các tấm vật liệu gỗ công nghiệp để ứng dụng trong sản xuất đồ nội thất. Acrylic – có tên khoa học là PMMA (Polymethyl  Methacrylate) và là một loại nhựa có nguồn gốc từ tinh chế dầu mỏ.</p>
              <p> Acrylic có bề mặt sáng, hiện đại. Màu sắc phong phú. Có khả năng chống tia cực tím. Khó biến dạng dưới tác động vật lý.</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'phu-acrylic-17.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>
          
          <div class="blog-card alt p-tam-4">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/t4.jpg)"></div>
            </div>
            <div class="description">
              <h1>BỀ MĂT PHỦ SƠN</h1>
              <p> Bề mặt sơn bệt là bề mặt đặc biệt được dùng sơn PU sơn trực tiếp lên cốt gỗ MDF, sau khi đươc sơn lót, trà nhám và sơn màu, với các màu sắc khác nhau như màu xanh, đỏ, trắng, tím, vàng... bề mặt sơn bệt được áp dụng cho rất nhiều công trình như showroom, phòng trẻ con, con gái, triển lãm...</p>
              <p>Sản phẩm bề mặt sơn đang được ưa chuộng.</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'son-18.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>

          <div class="blog-card p-tam-5">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/t5.jpg)"></div>
            </div>
            <div class="description">
              <h1>BỀ MẶT PHỦ VENEER</h1>
              <p>Bề mặt phủ veneer được làm từ veneer lạng, dày 0.5mm dán lên cốt gỗ, thông thường là cốt gỗ MDF, Cốt gỗ ván dăm, ván dán hoặc Finger, sau khi dán xong lớp veneer lạng lên các đội thợ sẽ tiến hành xẻ gỗ và sơn phủ PU để làm ra các vật liệu như Giường, Tủ, bàn, ốp vách, vách ngăn...</p>
              <p>Veneer lạng được ứng dụng làm nhiều các sản phẩm như ốp, vách, các loại bàn, tủ, giường</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'dan-veneer-19.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>

          <br>
        </div>

        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <nav class="skew-menu">
              <h2 style="font-weight: bold; margin-top: 0px">CÁC SẨM PHẨM KHÁC</h2>
              <ul>
                <li><a class="menu-khac-1">CHỈ NHỰA</a></li>
                <li><a class="menu-khac-2">TẤM POLYCARBONTAE</a></li>
                <li><a class="menu-khac-3">PIMA</a></li>
                <li><a class="menu-khac-4">ALU</a></li>
                <li><a class="menu-khac-5">TRẦN THẠCH CAO</a></li>
                <li><a class="menu-khac-6">VÁN PHỦ PHIM</a></li>
              </ul>
            </nav>
          </div>
          <div class="blog-card p-khac-1">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/k1.jpg)"></div>
            </div>
            <div class="description">
              <h1>CHỈ NHỰA DÁN CẠNH</h1>
              <p>Những tấm ván gỗ MFC hay Laminate để trở thành những ứng dụng nội thất hoàn hảo cần đến các chỉ nhựa để dán vào mép của cạnh ván. Là chuyên gia mang đến các giải pháp gỗ nội thất, An Cường cung cấp chỉ nhựa với đa dạng kích thước khác nhau với độ dày mỏng từ 0.45mm cho đến 2mm và chiều rộng từ 15mm đến 55mm. </p>
              <p>Chỉ nhựa tại đây là sản phẩm tuyệt đối không bay màu và đạt chất lượng tốt nhất hiện nay trên thị trường. Kho tàng chỉ nhựa của An Cường đa dạng với đủ loại màu sắc, với gần 700 màu chỉ sẽ mang đến các giải pháp chỉ đồng màu với Tấm Laminate, ván MFC hay các loại tương phản dạng Multiplex như: đen bóng, trắng bóng, sọc bạc, nhôm, 3D, Arcylic v.v.</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'chi-nhua-dc-12.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>

          <div class="blog-card alt p-khac-2">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/k2.jpg)"></div>
            </div>
            <div class="description">
              <h1>TẤM LẤY ÁNH SÁNG POLYCARBONTAE</h1>
              <p>Cũng giống như tấm nhựa lấy sáng, tấm lợp thông minh cũng có chức năng giống như vậy, mục đích dùng để lấy sáng ở những nơi công cộng, nhà để xe, bể bơi và một số vị trí khác như mái hiên, sản phẩm có thể thay thế một số cách lấy sáng thông thường nhưng có chi phí rẻ hơn nhiều, quá trình gia công cũng như sản xuất nhanh hơn và bền đẹp hơn.</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'tam-polycarbontae-20.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>

          <div class="blog-card p-khac-3">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/k3.jpg)"></div>
            </div>
            <div class="description">
              <h1>TẤM NHỰA PIMA</h1>
              <p>Sản phẩm tấm ván nhựa Pima được sản xuất, tích hợp những công nghệ hiện đại, nắm bắt xu hướng phát triển của ngành công nghiệp thế giới và nhu cầu của khách hàng Công ty đã tạo ra sản phẩm có độ bền cao hơn rất nhiều so với sản phẩm cùng loại và thay thế hoàn toàn ván gỗ công nghiệp MDF, MFC... tấm ván nhựa Pima có những tính nẵng vượt trội sau</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'pima-21.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>
          
          <div class="blog-card alt p-khac-4">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/k4.jpg)"></div>
            </div>
            <div class="description">
              <h1>TẤM ALU</h1>
              <p>Tấm Alu là tên gọi ngắn gọn và nhiều người thường dùng cho dễ hiểu nhưng thực chất tên gọi đầy đủ là Aluminium composite panel. Được dịch sang tiếng Việt với tên gọi đầy đủ là tấm ốp hợp kim nhôm nhựa.</p>
              <p>Tấm alu thường được sử dụng để trang trí nội và ngoại thất trong các công trình xây dựng, nhằm giảm nhiệt, chống cháy và cách âm cho không gian. Tấm alu dùng để ốp bề mặt, có nhiều hoa văn, nhiều màu sắc để bạn lựa chọn, dễ vệ sinh và có thể cách nhiệt tốt.</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'alu-22.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>

          <div class="blog-card p-khac-5">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/k5.jpg)"></div>
            </div>
            <div class="description">
              <h1>TRẦN THẠCH CAO</h1>
              <p>Được sản xuất theo quy trình công nghệ hiện đại với công thức tiên tiến từ Châu Âu, phù hợp với các tiêu chuẩn trong nước và quốc tế.</p>
              <p>Ứng dụng rộng rãi cho tường vách ngăn, trần nội thất cho mọi công trình. Sử dụng cho tường, vách ngăn (với tấm có độ dày >= 12.5mm) và trần nội thất (với tấm có độ dày 9mm) trong mọi công trình dân dụng, trung tâm thương mại,... .</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'tran-thach-cao-23.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>
          
          <div class="blog-card alt p-khac-6">
            <div class="meta">
              <div class="photo" style="background-image: url(http://vangoviet.com/files/sp/k6.jpg)"></div>
            </div>
            <div class="description">
              <h1>VÁN ÉP PHỦ PHIM</h1>
              <p>Ván ép phủ phim hay còn gọi là ván khuôn gỗ phủ phim là loại vật liệu được tạo nên từ các lớp gỗ được cắt mỏng và liên kết với nhau bằng keo dán đặc chủng chịu nước Phenolic, Melamine,… theo phương pháp ép nóng ở nhiệt độ cao. Bề mặt ván ép cốp pha được được phủ bên ngoài lớp phim Dynea, Stora Enso có khả năng chống nước giúp tạo độ láng, giảm trầy xuớc và bảo vệ ván trong quá trình sử dụng.</p>
              <p class="read-more">
                <a href="<?php echo base_url() . 'van-phu-phim-24.html' ?>">Xem chi tiết</a>
              </p>
            </div>
          </div>
          <br>
        </div>

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

    $(".menu-van-1").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-van-1").offset().top},
        'slow');
    });

    $(".menu-van-2").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-van-2").offset().top},
        'slow');
    });

    $(".menu-van-3").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-van-3").offset().top},
        'slow');
    });
    
    $(".menu-van-4").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-van-4").offset().top},
        'slow');
    });

    $(".menu-van-5").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-van-5").offset().top},
        'slow');
    });

    $(".menu-van-6").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-van-6").offset().top},
        'slow');
    });

    //TAM LOT

    $(".menu-tam-1").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-tam-1").offset().top},
        'slow');
    });

    $(".menu-tam-2").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-tam-2").offset().top},
        'slow');
    });

    $(".menu-tam-3").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-tam-3").offset().top},
        'slow');
    });

    $(".menu-tam-4").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-tam-4").offset().top},
        'slow');
    });

    $(".menu-tam-5").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-tam-5").offset().top},
        'slow');
    });

    // KHAC

    $(".menu-khac-1").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-khac-1").offset().top},
        'slow');
    });

    $(".menu-khac-2").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-khac-2").offset().top},
        'slow');
    });

    $(".menu-khac-3").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-khac-3").offset().top},
        'slow');
    });

    $(".menu-khac-4").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-khac-4").offset().top},
        'slow');
    });

    $(".menu-khac-5").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-khac-5").offset().top},
        'slow');
    });

    $(".menu-khac-6").click(function() {
    $('html,body').animate({
        scrollTop: $(".p-khac-6").offset().top},
        'slow');
    });

    
    var sidebar = new StickySidebar('.side-menu', {
        containerSelector: '.body-content',
        innerWrapperSelector: '.side-menu',
        topSpacing: 5,
        bottomSpacing: 20
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
        wheels: [{
          data: categoryVan
        }],
        keyMap: {
          id: 'id',
          value: 'name'
        },
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
        wheels: [{
          data: categoryVan
        }],
        keyMap: {
          id: 'id',
          value: 'name'
        },
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