<?php
require_once('header.php');
$tuyendung = new tuyendung();
$tuyendungmoi = $tuyendung->get_all_list();

?>
<div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:20px;">
    <h1 class="page-title">THÔNG TIN TUYỂN DỤNG</h1><!-- category title -->
</div>
<div class="row gutter k-equal-height"><!-- row -->
    <?php
    if($tuyendungmoi){
        foreach($tuyendungmoi as $kh) {
        if(isset($kh['hinhanh'][0]['aliasname']) && $kh['hinhanh'][0]['aliasname']){
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
                <p><a href="chitiettuyendung.html?id='.$kh['_id'].'"><img src="'.$thumb.'" alt="'.$kh['tieude'].'" title="'.$kh['tieude'].'" class="aligncenter" /></a></p>
                <p><a href="chitiettuyendung.html?id='.$kh['_id'].'" style="background:#d96140;" class="btn btn-warning" title="button"><i class="fa fa-leaf"></i> &nbsp; Xem chi tiết</a></p>
            </div>';
        }
    } ?>
</div>
<?php require_once('footer.php'); ?>