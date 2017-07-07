<?php
require_once('header.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
$tuyendung = new tuyendung();
$tuyendung->id = $id; $kh = $tuyendung->get_one();
?>
<div class="row"><!-- row -->
    <div class="col-lg-12 col-md-12"><!-- doc body wrapper -->
        <div class="col-padded"><!-- inner custom column -->
            <h1 class="page-title"><?php echo $kh['tieude']; ?></h1>
            <div class="news-body">
            	<?php echo $kh['mota']; ?>
            </div>
            <div class="news-body">
            	<?php echo $kh['noidung']; ?>
            </div>
        </div>
    </div>
</div>


<?php require_once('footer.php'); ?>