<?php require_once('header.php'); ?>
        	<div class="row gutter"><!-- row -->
            	<div class="col-lg-12 col-md-12">                    
            		<h1 style="padding:0px;margin: 0px;">Đăng ký nhận tư vấn!</h1>
                        <form id="contactform" method="POST" action="#">
                            <div class="row"><!-- starts row -->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label for="contactName"><span class="required">*</span> Họ và tên học viên</label>
                                    <input type="text" required="true" size="30" value="" name="hotenhocvien" id="hotenhocvien" class="form-control requiredField" />
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                	<label for="contactName"><span class="required">*</span> Họ và tên phụ huynh</label>
                                    <input type="text" required="true" size="30" value="" name="hotenphuhuynh" id="hotenphuhuynh" class="form-control requiredField" />
                                </div>
                            </div><!-- ends row -->
                            <div class="row"><!-- starts row -->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                	<label for="email"><span class="required">*</span> E-mail</label>
                                    <input type="text" required="true" size="30" value="" name="email" id="email" class="form-control requiredField" />
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label for="contactPhone">Điện thoại</label>
                                    <input type="text" required="true" size="30" value="" name="dienthoai" id="dienthoai" class="form-control" />
                                </div>
                            </div><!-- ends row -->
                            
                            <div class="row"><!-- starts row -->
                                <div class="form-group col-lg-12">
                                    <label for="contactSubject">* Địa chỉ</label>
                                    <input type="text" required="true" size="30" value="" name="diachi" id="diachi" class="form-control" />
                                </div>
                            </div><!-- ends row -->
                            
                            <div class="row"><!-- starts row -->
                                <div class="form-group clearfix col-lg-12">
                                    <label for="comments"><span class="required">*</span> Nhu cầu học</label>
                                    <textarea required="true" rows="5" cols="45" name="noidung" id="noidung" class="form-control requiredField mezage"></textarea>
                                </div>
                
                                <div class="form-group clearfix col-lg-12 text-right remove-margin-bottom">
                                    <input type="submit" value="Đăng ký" id="submit" name="submit" class="btn btn-primary" />
                                </div>
                            </div><!-- ends row -->
                        </form>
                    <h1 class="page-title">Thông tin liên hệ</h1>
                    <div class="news-body">
                        <p>
                         BIC (British International Center) là trung tâm hàng đầu về đào tạo các khoá kỹ năng chuyên nghiệp quốc tế trong các lĩnh vực nghề nghiệp. Góp phần nâng cao vị thế cạnh tranh của nguồn nhân lực Việt Nam ngang tầm với nguồn nhân lực ở các nước trong khu vực về thu nhập, ngoại ngữ và các kiến thức chuyên môn khác. 
                        </p>
                        <div id="k-contact-map" class="clearfix"><!-- map -->
	                         <iframe src="http://maps.google.com/maps?output=embed&q=40 Trân Minh Quyền &t=m&hl=English" style="width:100%;height:450px;border:0px;"></iframe>
	                        </div>
                    	</div>
                    </div>
                </div>
            </div><!-- row end -->               

<?php require_once('footer.php'); ?>