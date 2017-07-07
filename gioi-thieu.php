<?php require_once('header.php');
$doitac = new DoiTac(); $dt = $doitac->get_one();
$banners = new Banner(); $banner = $banners->get_one();
?>
<?php if($banner): ?>
<div class="row no-gutter fullwidth"><!-- row -->
    <div class="col-lg-12 clearfix"><!-- featured posts slider -->
        <div id="carousel-featured" class="carousel slide" data-interval="4000" data-ride="carousel"><!-- featured posts slider wrapper; auto-slide -->
            <ol class="carousel-indicators"><!-- Indicators -->
            <?php
            foreach($banner['banner'] as $k => $b){
                echo '<li data-target="#carousel-featured" data-slide-to="'.$k.'" '.($k==0 ? 'class="active"' : '').'></li>';
            }
            ?>
            </ol><!-- Indicators end -->

            <div class="carousel-inner"><!-- Wrapper for slides -->
            <?php
            foreach($banner['banner'] as $k => $b){
                echo '<div class="item '.($k == 0 ? 'active' : '').'">
                    <img src="'.$target_banner . $b['aliasname'].'" alt="'.$b['mota'].'" />
                    <div class="k-carousel-caption pos-2-3-right scheme-dark">
                        <div class="caption-content">
                            <p>'.$b['mota'].'</p>
                            '.($b['link'] ? '<a href="http://'.$b['link'].'" class="btn btn-sm btn-danger" title="'.$b['mota'].'">Xem chi tiết</a>' : '').'
                        </div>
                    </div>
                </div>';
            }
            ?>                
            </div><!-- Wrapper for slides end -->
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-featured" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="right carousel-control" href="#carousel-featured" data-slide="next"><i class="fa fa-chevron-right"></i></a>
            <!-- Controls end -->
        </div><!-- featured posts slider wrapper end -->
    </div><!-- featured posts slider end -->
</div><!-- row end -->
<?php endif; ?>
<?php if($dt): ?>
<div class="col-lg-12 col-md-12" style="margin-top:20px;">
    <h1 class="page-title">Đối tác BIC</h1><!-- category title -->
</div>
<div class="row gutter k-equal-height"><!-- row -->
<?php
foreach($dt['banner'] as $t){
    if($t['aliasname']){
        $thumb = $target_banner . 'thumb_360x150/' .$t['aliasname'];
        $file = $target_banner . $t['aliasname'];
        if(!file_exists($thumb)){
            resize_image($file , null, 360, 150, false , $thumb , false , false ,100 );
        }
    } else {
        $thumb = 'img/news-1.jpg';
    }
    if($t['link']){
        echo '<div class="col-lg-3 col-md-3 col-sm-12">
            <figure class="gallery-photo-thumb">
                <a href="http://'.$t['link'].'" title="'.($t['mota'] ? $t['mota'] : 'Đối tác BIC').'" data-fancybox-group="gallery-bssb" target="_blank"><img src="'.$thumb.'" alt="'.($t['mota'] ? $t['mota'] : 'Đối tác BIC').'" /></a>
            </figure>
          </div>';
    } else {
        echo '<div class="col-lg-3 col-md-3 col-sm-12">
            <figure class="gallery-photo-thumb">
                <a href="'.$file.'" title="'.($t['mota'] ? $t['mota'] : 'Đối tác BIC').'" data-fancybox-group="gallery-bssb" class="fancybox"><img src="'.$thumb.'" alt="'.($t['mota'] ? $t['mota'] : 'Đối tác BIC').'" /></a>
            </figure>
          </div>';
    }
}
?>
</div>
<?php endif; ?>
<div class="col-lg-12 col-md-12" style="margin-top:20px;">
    <h1 class="page-title">Giá trị cốt lõi</h1>
</div>
<div class="row gutter k-equal-height">
    <div class="col-lg-4 col-md-4 col-sm-12">
    	<div class="alert alert-success" style="min-height: 300px;">
    		<h3 style="margin:10px;"><i class="custom-button-icon fa fa-check-square-o"></i> CHẤT LƯỢNG</h3>
			<p style="text-align: justify;"> Chất lượng đào tạo là ưu tiên hàng đầu tại BICKhông ngừng cập nhật và áp dụng các phương pháp giảng dạy tiên tiến trên thế giới để nâng cao hiệu quả dạy và học. Chuẩn hóa tài liệu giảng dạy theo sát nhu cầu thực tế và đáp ứng yêu cầu gắt gao của các kỳ thi quốc tế.Nâng cao tính ứng dụng trong các chương trình giảng dạy, tính ứng dụng trong việc dạy và học.</p>
		</div>
   	</div>
   	<div class="col-lg-4 col-md-4 col-sm-12">
    	<div class="alert alert-danger" style="min-height: 300px;">
    		<h3 style="margin:10px;"><i class="custom-button-icon fa  fa-play-circle-o"></i> CHUYÊN NGHIỆP</h3>
			<p style="text-align: justify;">Đội ngũ giảng viên trong và ngoài nước nhiều kinh nghiệm thực tế.Nhân viên được đào tạo chuyên nghiệp về tác phong và chuyên môn</p>
		</div>

   	</div>
   	<div class="col-lg-4 col-md-4 col-sm-12">
    	<div class="alert alert-warning" style="min-height: 300px;">
    		<h3 style="margin:10px;"><i class="custom-button-icon fa  fa-leaf"></i> HIỆU QUẢ</h3>
			<p style="text-align: justify;">Kết hợp các giá trị cốt lõi về chất lượng, chuyên nghiệp để cam kết hiệu quả đào tạo thực tiển nhất cho từng chương trình giảng dạy và từng học viên tham gia học tập tại BIC cũng như cam kết tạo việc làm ổn định và không ngừng nâng cao thu nhập cho học viên BIC.</p>
		</div>

   	</div>
</div>


<?php require_once('footer.php'); ?>