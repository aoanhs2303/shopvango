<div class="body-content">
    <div class="container" style="margin-top: 15px">
        <div class="row">
            <div class="blog-pagem">
                <div class="col-md-9 blog-page">
                    <?php
                    if (isset($tukhoa)) {
                        ?>
                        <div id="hero">
                            <h1 class="section-title" style="font-size: 20px"><span class="text-primary">Kết quả tìm kiếm từ khóa</span> "<?php echo $tukhoa ?>"</h1>
                        </div>
                    <?php } ?>
                    <?php foreach ($dichvu as $value) { ?>
                        <div class="blog-post wow fadeInUp" style="background-color: white; padding: 10px; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.19);">
                            <a href="<?php echo base_url() ?>tintuc/<?php echo vn_to_str($value['name']) . '-' . $value['id'] ?>.html">
                                <img style="width: 100%" class="img-responsive" src="<?php echo $value['image'] ?>" alt="">
                            </a>
                            <h1><a href="blog-details.html"><?php echo $value['name'] ?></a></h1>
                            <span class="date-time"><b><?php echo date('d/m/Y', $value['datetime']) ?></b></span>
                            <p><?php echo $value['summary'] . ' [...]' ?></p>
                            <a href="<?php echo base_url() ?>tintuc/<?php echo vn_to_str($value['name']) . '-' . $value['id'] ?>.html" class="btn btn-upper btn-primary read-more">Chi tiết</a>
                        </div>
                        <br>
                    <?php } ?>
                    <div class="clearfix blog-pagination filters-container  wow fadeInUp" style="padding:0px; background:none; box-shadow:none; margin-top:15px; border:none">
                        <div class="text-right">
                            <div class="pagination-container">
                                <ul class="list-inline list-unstyled">
                                    <li class="prev"><a href="http://localhost/shop3tr/Home/tintuc/<?php echo $curPage - 1 <= 0 ? 1 : $curPage - 1 ?>"><i class="fa fa-angle-left"></i></a></li>
                                    <?php for ($i = 1; $i <= $totalPage; $i++) { ?>
                                        <li <?php if ($i == $curPage) echo "class='active'" ?>><a href="http://localhost/shop3tr/Home/tintuc/<?php echo $i ?>"><?php echo $i ?></a></li>
                                    <?php } ?>
                                    <li class="next"><a href="http://localhost/shop3tr/Home/tintuc/<?php echo $curPage + 1 >= $totalPage ? $totalPage : $curPage + 1 ?>"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo $sidebar ?>
            </div>
        </div>
    </div>
</div>