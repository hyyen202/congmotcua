<div class="col-md-4 mt">
    <h3 class="text-center title">KIỂM TRA TÌNH TRẠNG GIẤY TỜ<br /></h3>
    <form method="post" action="#">
        <div class="row gtr-uniform">
            <!-- Break -->
            <div class="col-12 ">
                <select name="demo-category" id="demo-category">
                    <option value="">- Loại giấy tờ -</option>
                    <option value="1">Nghĩa vụ quân sự</option>
                    <option value="1">Bảng điểm tạm thời</option>
                    <option value="1">Giấy vay vốn</option>
                    <option value="1">Bản sao bằng tốt nghiệp</option>
                </select>
            </div>
            
            <div class="checkout-process-bar">
                <ul>
                    <li class="active"><span>Đăng ký thành công </span><br><span>Ngày 19/01/2021</span></li>
                    <li class="active"><span>Chờ xét duyệt</span><br><span>Ngày 19/01/2021</span></li>
                    <li class="active"><span>Đã xét duyệt</span><br><span>Ngày 19/01/2021</span></li>
                    <li class="active"><span>Đã nhận</span><br><span>Ngày 19/01/2021</span></li>
                </ul>
            </div>
            
            <div class="col d-flex justify-content-center">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item image-container active">
                            <img class="form-xac-nhan" src="https://sv.ump.edu.vn/Media/2_SVYDS/Images/cap-giay-xac-nhan-sv2ac8b754-8-e.PNG" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="col-md-7 row">
    <div class="col-sm-12 mt1">
            @include('register.index')
            @include('user.info')
    </div>
    
</div>