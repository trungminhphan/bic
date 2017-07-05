<?php
require_once('header.php');
$tintuc = new TinTuc();
$tintucmoi = $tintuc->get_all_list();
?>
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
                $file = $target_images .$kh['hinhanh'][0]['aliasname'];
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
<?php require_once('footer.php'); ?>