
<!-- ============================================== HEADER : END ============================================== -->


<div class="body-content">
	<div class="container" style="margin-top: 15px">
		<div class="row">
			<div class="blog-pagem">
				<?php echo $sidebar ?>


				<div class="col-md-9">
<?php foreach ($dichvu as $value) { ?>
	<div class="blog-post wow fadeInUp" 
			style="background-color: white; padding: 10px; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.19);">
		<h1 class="section-title" style="font-size: 30px; padding: 10px"><a href="blog-details.html"><?php echo $value['name'] ?></a></h1>
		<a href="<?php echo base_url() ?>Home/dichvu_chitiet/<?php echo $value['id'] ?>"><img class="img-responsive img-fluid" style="width: 100%; padding: 10px 20px" src="<?php echo $value['image'] ?>" alt=""></a>
		<span class="date-time"><b><?php echo date('d/m/Y',$value['datetime']) ?></b></span>
		<p><?php echo $value['summary'] . ' [...]' ?></p>
		<a href="<?php echo base_url() ?>Home/dichvu_chitiet/<?php echo $value['id'] ?>" class="btn btn-upper btn-primary read-more">Chi tiết</a>
	</div>
	<br>
<?php } ?>


<!-- <div class="clearfix blog-pagination filters-container  wow fadeInUp" style="padding:0px; background:none; box-shadow:none; margin-top:15px; border:none">				
	<div class="text-right">
        <div class="pagination-container">
			<ul class="list-inline list-unstyled">
				<li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
				<li><a href="#">1</a></li>	
				<li class="active"><a href="#">2</a></li>	
				<li><a href="#">3</a></li>	
				<li><a href="#">4</a></li>	
				<li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
			</ul>
		</div>
	</div>
</div> -->

</div>

			</div>
		</div>

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div>
</div>
<!-- ============================================================= FOOTER ============================================================= -->
