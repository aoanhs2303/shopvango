
<!-- ============================================== HEADER : END ============================================== -->

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th class="cart-romove item">Xóa</th>
					<th class="cart-description item">Hình ảnh</th>
					<th class="cart-product-name item">Tên Sản Phẩm</th>
					<th></th>
					<th class="cart-qty item">Số Lượng</th>
					<th class="cart-sub-total item">Giá</th>
					<th class="cart-total last-item">Số Lượng x Giá</th>
				</tr>
			</thead><!-- /thead -->
			<tfoot>
				<tr>
					<td colspan="7">
						<div class="shopping-cart-btn">
							<span class="">
								<a href="#" class="btn btn-upper btn-primary outer-left-xs">Tiếp tục mua hàng</a>
								<button class="scrolldh btn btn-upper btn-primary pull-right outer-right-xs">Đặt hàng</button>
							</span>
						</div><!-- /.shopping-cart-btn -->
					</td>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
					<td class="cart-image">
						<a class="entry-thumbnail" href="detail.html">
						    <img src=<?php echo base_url() ?>includehome/images/products/p1.jpg" alt="">
						</a>
					</td>
					<td class="cart-product-name-info">
						<h4 class='cart-product-description'><a href="detail.html">Ván MDF</a></h4>
						<div class="cart-product-info">
						<span class="product-color">Kích thước:<span>100x200</span></span>
						</div>
					</td>
					<td class="cart-product-edit"><a href="#" class="product-edit"></a></td>
					<td class="cart-product-quantity">
						<div class="quant-input">
				                <div class="arrows">
				                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
				                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
				                </div>
				                <input type="text" value="2">
			              </div>
		            </td>
					<td class="cart-product-sub-total"><span class="cart-sub-total-price">150.000 ₫</span></td>
					<td class="cart-product-grand-total"><span class="cart-grand-total-price">300.000 ₫</span></td>
				</tr>
				<tr>
					<td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
					<td class="cart-image">
						<a class="entry-thumbnail" href="detail.html">
						    <img src=<?php echo base_url() ?>includehome/images/products/p2.jpg" alt="">
						</a>
					</td>
					<td class="cart-product-name-info">
						<h4 class='cart-product-description'><a href="detail.html">Tám lót sàn</a></h4>
						<div class="cart-product-info">
						<span class="product-color">Kích thước:<span>200x300</span></span>
						</div>
					</td>
					<td class="cart-product-edit"><a href="#" class="product-edit"></a></td>
					<td class="cart-product-quantity">
						<div class="cart-quantity">
							<div class="quant-input">
				                <div class="arrows">
				                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
				                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
				                </div>
				                <input type="text" value="1">
			              </div>
			            </div>
		            </td>
					<td class="cart-product-sub-total"><span class="cart-sub-total-price">250.000 ₫</span></td>
					<td class="cart-product-grand-total"><span class="cart-grand-total-price">250.000 ₫</span></td>
				</tr>
				<div class="cart-grand-total pull-right" style="font-size: 18px">
					<span style="font-weight: bold; font-size: 30px">Tổng cộng: </span> <span class="inner-left-md badge" style="background-color: #fdd922; font-size: 30px; padding: 5px; border-radius: 5px; color: #444">670.000 ₫</span>
				</div>
			</tbody><!-- /tbody -->
		</table><!-- /table -->
	</div>
</div><!-- /.shopping-cart-table -->				
<div class="col-md-6 col-sm-12 estimate-ship-tax">
	<table class="table">
		<thead>
			<tr>
				<th>
					<span class="estimate-title">Địa chỉ giao hàng</span>
					<p>Nhập địa chỉ của bạn..</p>
				</th>
			</tr>
		</thead><!-- /thead -->
		<tbody>
				<tr>
					<td>
						<div class="form-group">
							<label class="info-title control-label">Tỉnh / Thành phố <span>*</span></label>
							<select class="form-control unicase-form-control selectpicker">
								<option>--Chọn tỉnh thành--</option>
								<option>Tp.HCM</option>
								<option>Hà Nội</option>
								<option>Đà Nẵng</option>
								<option>Huế</option>
								<option>Cần Thơ</option>
							</select>
						</div>
						<div class="form-group">
							<label class="info-title control-label">Quận / Huyện <span>*</span></label>
							<select class="form-control unicase-form-control selectpicker">
								<option>--Chọn Quận / Huyện--</option>
								<option>Quận 1</option>
								<option>Quận 10</option>
								<option>Quận Tân Bình</option>
								<option>Quận Thủ Đức</option>
								<option>Quận Bình Thạnh</option>
							</select>
						</div>
						<div class="form-group">
							<label class="info-title control-label">Phường / Xã <span>*</span></label>
							<select class="form-control unicase-form-control selectpicker">
								<option>--Chọn Phường / Xã--</option>
								<option>Phường 1</option>
								<option>Phường 2</option>
								<option>Phường 3</option>
								<option>Phường 4</option>
								<option>Phường 5</option>
							</select>
						</div>
						<div class="form-group">
							<label class="info-title control-label">Địa chỉ chi tiết</label>
							<br>
							<textarea class="form-control" name="" id="" rows="4"></textarea>
						</div>
					</td>
				</tr>
		</tbody>
	</table>
</div><!-- /.estimate-ship-tax -->

<div class="col-md-6 col-sm-12 estimate-ship-tax">
	<table class="table">
		<thead>
			<tr>
				<th>
					<span class="estimate-title">Thông tin cá nhân</span>
					<p>Nhập thông tin cá nhân của bạn..</p>
				</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td>
						<div class="form-group">
							<label class="info-title control-label">Tên <span>*</span></label>
							<input type="text" class="form-control" placeholder="Nhập tên">
						</div>
						<div class="form-group">
							<label class="info-title control-label">Số điện thoại <span>*</span></label>
							<input type="text" class="form-control" placeholder="Nhập số điện thoại">
						</div>
						<div class="form-group">
							<label class="info-title control-label">Email <span>*</span></label>
							<input type="mail" class="form-control" placeholder="Nhập Email">
						</div>
<!-- 
						<div class="clearfix pull-right">
							<button type="submit" class="btn-upper btn btn-primary">APPLY COUPON</button>
						</div> -->
						<div class="cart-checkout-btn pull-right">
							<button type="submit" class="btn btn-primary checkout-btn" style="font-size: 30px; font-weight: bold; padding: 20px;">ĐẶT HÀNG</button>
						</div>
					</td>


				</tr>
		</tbody><!-- /tbody -->
	</table><!-- /table -->
</div><!-- /.estimate-ship-tax -->

</div><!-- /.shopping-cart -->
		</div> <!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->

<!-- ============================================================= FOOTER ============================================================= -->
