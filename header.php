<?php
function __autoload($class_name) {
    require_once('admin/cls/class.' . strtolower($class_name) . '.php');
}
$session = new SessionManager();
$users = new Users();
require_once('admin/inc/functions.inc.php');
require_once('admin/inc/config.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CÔNG TY TƯ VẤN VÀ GIÁO DỤC QUỐC TẾ ANH QUỐC</title>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
    <link href="js/dropdown-menu/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="js/audioplayer/audioplayer.css" rel="stylesheet" type="text/css"><!-- Audioplayer -->
    <link href="style.css" rel="stylesheet" type="text/css"><!-- theme styles -->
</head>
  <body role="document">
    <!-- device test, don't remove. javascript needed! -->
    <?php if($users->isLoggedIn() && $users->is_admin()): ?>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="admin">ADMIN</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="admin/khoahoc.html?url=<?php echo $_SERVER['REQUEST_URI']; ?>">Khóa học</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin/tesol.html?url=<?php echo $_SERVER['REQUEST_URI']; ?>">TESOL</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin/tintuc.html?url=<?php echo $_SERVER['REQUEST_URI']; ?>">Tin tức</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin/gochoctap.html?url=<?php echo $_SERVER['REQUEST_URI']; ?>">Góc học tập</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin/banner.html?url=<?php echo $_SERVER['REQUEST_URI']; ?>">Banner</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin/doitac.html?url=<?php echo $_SERVER['REQUEST_URI']; ?>">Đối tác</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin/tuyendung.html?url=<?php echo $_SERVER['REQUEST_URI']; ?>">Tuyển dụng</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item" style="padding-top:0px;"><a class="nav-link" href="admin/logout.html?url=<?php echo $_SERVER['REQUEST_URI']; ?>"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
                </ul>
          </div>
    </nav>
    <?php endif; ?>
    <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
    <!-- device test end -->
    <div id="k-head" class="container" <?php if($users->isLoggedIn() && $users->is_admin()): ?> style="margin-top:55px;" <?php endif; ?>><!-- container + head wrapper -->
    	<div class="row"><!-- row -->
        	<div class="col-lg-12">
        		<div id="k-site-logo" class="pull-left"><!-- site logo -->
                    <h1 class="k-logo">
                        <a href="index.html" title="Home Page">
                            <img src="img/site-logo.png" alt="Site Logo" class="img-responsive" />
                        </a>
                    </h1>
                    <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"></span></a><!-- alternative menu button -->
            	</div><!-- site logo end -->
            	<nav id="k-menu" class="k-main-navig"><!-- main navig -->
                    <ul id="drop-down-left" class="k-dropdown-menu">
                        <li><a href="gioi-thieu.html" title="">Giới thiệu</a></li>
                        <li><a href="khoahoc.html" title="">Khóa học</a></li>
                        <li><a href="tesol.html" title="">TESOL</a></li>
                        <li><a href="tintuc.html" title="">Tin tức</a></li>
                        <li><a href="gochoctap.html" title="">Góc học tập</a></li>
                        <li>
                            <a href="tuyendung.html" class="" title="">Tuyển dụng</a>
                            <!--<ul class="sub-menu">
                                <li><a href="giao-vien.html">Giáo viên</a></li>
                                <li><a href="foreign-teacher.html">Foreign Teacher</a></li>
                                <li><a href="tro-giang.html">Trợ giảng</a></li>
                            </ul>-->
                        </li>
                        <li><a href="lien-he.html" title="">Liên hệ</a></li>
                    </ul>
            	</nav><!-- main navig end -->
            </div>
        </div><!-- row end -->
    </div><!-- container + head wrapper end -->
    <div id="k-body"><!-- content wrapper -->
    	<div class="container"><!-- container -->
        	<div class="row"><!-- row -->
                <div id="k-top-search" class="col-lg-12 clearfix"><!-- top search -->
                    <form action="#" id="top-searchform" method="get" role="search">
                        <div class="input-group">
                            <input type="text" name="s" id="sitesearch" class="form-control" autocomplete="off" placeholder="Type in keyword(s) then hit Enter on keyboard" />
                        </div>
                    </form>
                    <div id="bt-toggle-search" class="search-icon text-center"><i class="s-open fa fa-search"></i><i class="s-close fa fa-times"></i></div><!-- toggle search button -->
                </div><!-- top search end -->
            	<div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->
                	<ol class="breadcrumb">
                    </ol>
                </div><!-- breadcrumbs end -->
            </div><!-- row end -->
