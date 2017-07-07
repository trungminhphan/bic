<?php
require_once('header.php');
$khoahoc = new KhoaHoc();$tintuc = new TinTuc();
$khoahocmoi = $khoahoc->get_khoahocmoi();
$tintucmoi = $tintuc->get_tintucmoi();
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
                <!--<li data-target="#carousel-featured" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-featured" data-slide-to="1"></li>
                <li data-target="#carousel-featured" data-slide-to="2"></li>
                <li data-target="#carousel-featured" data-slide-to="3"></li>
                <li data-target="#carousel-featured" data-slide-to="4"></li>-->
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
                <!--<div class="item">
                    <img src="img/slide-2.jpg" alt="Image slide 2" />
                    <div class="k-carousel-caption pos-2-3-left scheme-light">
                    	<div class="caption-content">
                            <h3 class="caption-title">Giới thiệu BIC</h3>
                            <p>
                            	"BIC (British International Center) là trung tâm hàng đầu về đào tạo các khoá kỹ năng chuyên nghiệp quốc tế trong các lĩnh vực nghề nghiệp. Góp phần nâng cao vị thế cạnh tranh của nguồn nhân lực Việt Nam ngang tầm với nguồn nhân lực ở các nước trong khu vực về thu nhập, ngoại ngữ và các kiến thức chuyên môn khác. "
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="item">
                    <img src="img/slide-1.jpg" alt="Image slide 1" />
                    <div class="k-carousel-caption pos-2-3-right scheme-dark">
                    	<div class="caption-content">
                            <h3 class="caption-title">Giới thiệu BIC</h3>
                            <p>
                            	"BIC (British International Center) là trung tâm hàng đầu về đào tạo các khoá kỹ năng chuyên nghiệp quốc tế trong các lĩnh vực nghề nghiệp. Góp phần nâng cao vị thế cạnh tranh của nguồn nhân lực Việt Nam ngang tầm với nguồn nhân lực ở các nước trong khu vực về thu nhập, ngoại ngữ và các kiến thức chuyên môn khác. "
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/slide-4.jpg" alt="Image slide 4" />
                    <div class="k-carousel-caption pos-2-3-left scheme-light">
                    	<div class="caption-content">
                            <h3 class="caption-title">Giới thiệu BIC</h3>
                            <p>
                            	"BIC (British International Center) là trung tâm hàng đầu về đào tạo các khoá kỹ năng chuyên nghiệp quốc tế trong các lĩnh vực nghề nghiệp. Góp phần nâng cao vị thế cạnh tranh của nguồn nhân lực Việt Nam ngang tầm với nguồn nhân lực ở các nước trong khu vực về thu nhập, ngoại ngữ và các kiến thức chuyên môn khác. "
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="item">
                    <img src="img/slide-5.jpg" alt="Image slide 5" />
                    <div class="k-carousel-caption pos-2-3-right scheme-dark">
                    	<div class="caption-content">
                            <h3 class="caption-title title-giant">Giới thiệu BIC</h3>
                            <p>
                            	"BIC (British International Center) là trung tâm hàng đầu về đào tạo các khoá kỹ năng chuyên nghiệp quốc tế trong các lĩnh vực nghề nghiệp. Góp phần nâng cao vị thế cạnh tranh của nguồn nhân lực Việt Nam ngang tầm với nguồn nhân lực ở các nước trong khu vực về thu nhập, ngoại ngữ và các kiến thức chuyên môn khác. "
                            </p>
                        </div>
                    </div>
                </div>-->
            </div><!-- Wrapper for slides end -->
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-featured" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="right carousel-control" href="#carousel-featured" data-slide="next"><i class="fa fa-chevron-right"></i></a>
            <!-- Controls end -->
        </div><!-- featured posts slider wrapper end -->
    </div><!-- featured posts slider end -->
</div><!-- row end -->
<?php endif; ?>

<div class="row gutter k-equal-height"><!-- row -->
    <?php
    if($khoahocmoi){
        foreach($khoahocmoi as $kh) {
        if($kh['hinhanh'][0]['aliasname']){
            $thumb = $target_images . 'thumb_360x150/' .$kh['hinhanh'][0]['aliasname'];
            if(!file_exists($thumb)){
                $file = $target_images .$kh['hinhanh'][0]['aliasname'];
                resize_image($file , null, 360, 150, false , $thumb , false , false ,100 );
            }
        } else {
            $thumb = 'img/news-1.jpg';
        }
        echo '<div class="col-lg-4 col-md-4 col-sm-12">
                <h6>'.$kh['tieude'].'</h6>
                <p><a href="chitietkhoahoc.html?id='.$kh['_id'].'"><img src="'.$thumb.'" alt="'.$kh['tieude'].'" title="'.$kh['tieude'].'" class="aligncenter" /></a></p>
                <p><a href="chitietkhoahoc.html?id='.$kh['_id'].'" style="background:#d96140;" class="btn btn-warning" title="button"><i class="fa fa-leaf"></i> &nbsp; Xem chi tiết</a></p>
            </div>';
        }
    } ?>
</div>
<div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:20px;">
    <h1 class="page-title">Tin tức HOT</h1><!-- category title -->
</div>
<div class="row gutter k-equal-height"><!-- row -->
    <?php
    if($tintucmoi){
        foreach($tintucmoi as $tt) {
        if($tt['hinhanh'][0]['aliasname']){
            $thumb = $target_images . 'thumb_360x150/' .$tt['hinhanh'][0]['aliasname'];
            if(!file_exists($thumb)){
                $file = $target_images .$tt['hinhanh'][0]['aliasname'];
                resize_image($file , null, 360, 150, false , $thumb , false , false ,100 );
            }
        } else {
            $thumb = 'img/news-1.jpg';
        }
        echo '<div class="news-mini-wrap col-lg-4 col-md-4 col-sm-12"><!-- news mini-wrap -->
                <figure class="news-featured-image">    
                    <a href="chitiettintuc.html?id='.$tt['_id'].'">
                    <img src="'.$thumb.'" alt="'.$tt['tieude'].'" class="img-responsive" />
                    </a>
                </figure>
                <div class="page-title-meta">
                    <h1 class="page-title"><a href="chitiettintuc.html?id='.$tt['_id'].'" title="'.$tt['tieude'].'">'.$tt['tieude'].'</a></h1>
                </div>
                <div class="news-summary">
                    '.$tt['mota'].'
                </div>
            </div>';
        }
    } ?>
</div><!-- row end -->
<?php if($dt): ?>
<div class="col-lg-12 col-md-12" style="margin-top:20px;">
    <h1 class="page-title">Đối tác BIC</h1><!-- category title -->
</div>
<div class="row gutter k-equal-height">
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
<div class="row gutter k-equal-height"><!-- row -->
    <div class="alert" style="background:#d96140;color:#fff;padding:20px;">
        <p style="font-size:20px;font-weight:bold;">VIDEO GIỚI THIỆU BIC</p>
        <p>BIC (British International Center) là trung tâm hàng đầu về đào tạo các khoá kỹ năng chuyên nghiệp quốc tế trong các lĩnh vực nghề nghiệp như chương trình TESOL, một chứng chỉ chuyên nghiệp cho những ai mong muốn được đến với nghề nghiệp giáo viên dạy tiếng Anh, mang đẳng cấp quốc tế hay ICFE (International Certificate in Financial English, một chứng chỉ do đại học Cambridge cấp dành cho những ai đang làm việc trong lĩnh vực tài chính, kế toán, kiểm toán hay ngân hàng đang muốn cải thiện vốn tiếng anh hiện có hay những bạn sinh viên chuyên ngành đang chuẩn bị cho mình vốn tiếng Anh chuyên ngành làm nền tảng tham gia các khóa học chuyên ngành quốc tế như ACCA, CFA..; chương trình anh văn thương mại (Business English) liên kết với Madison (Hoa Kỳ) để lấy chứng chỉ Mini-MBA...</p>
        <p class="text-right">
            <a href="#modal-video" data-toggle="modal" class="btn btn-warning" title="button"><i class="fa fa-camera"></i> &nbsp; Xem Video</a>
        </p>
    </div>
</div>

<div class="modal fade" id="modal-video">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" style="color:#000">VIDEO GIỚI THIỆU BIC</h4>
            </div>
            <div class="modal-body">
                <div style="text-align: center;">
                    <iframe data-autoplay="false" width="600" height="400" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/sQHlUWYjemk?loop=0&playlist=null&showinfo=1&theme=dark&autohide=0&controls=1&start="></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-sm btn-white" data-dismiss="modal">Đóng</a>
            </div>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>