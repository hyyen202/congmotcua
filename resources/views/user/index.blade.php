@extends('layouts.app')

@section('content')
<section id="banner" style="padding: 5px 0;">
    <div class="content">
        <div id="pageAjax" class="justify-content-center row">
            <div class="col-md-4 mt">
                <h3 class="text-center title">KIỂM TRA TÌNH TRẠNG GIẤY TỜ<br /></h3>
                <form method="post" action="#">
                    <div class="row gtr-uniform">
                        <!-- Break -->
                        <div class="col-12 ">
                            <select name="demo-category" id="demo-category">
                                <option value="">- Loại giấy tờ -</option>
                                <option value="1">Nghĩa vụ quân sự</option>
                                <option value="2">Bảng điểm tạm thời</option>
                                <option value="3">Giấy vay vốn</option>
                                <option value="4">Bản sao bằng tốt nghiệp</option>
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
                                        <img class="form-xac-nhan pop" src="https://sv.ump.edu.vn/Media/2_SVYDS/Images/cap-giay-xac-nhan-sv2ac8b754-8-e.PNG" data-image="https://sv.ump.edu.vn/Media/2_SVYDS/Images/cap-giay-xac-nhan-sv2ac8b754-8-e.PNG" class="d-block w-100" alt="...">
                                    </div>
                                    <!-- Add more carousel items with unique images and data-image attribute -->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-7 row mt">
                <div class="col-sm-12 pad">
                    @include('register.index')
                    @include('user.info')
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- Hiển thị zoom -->
    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin sinh viên</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    {{-- Slide Card --}}
                    @include('user.card')

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<style>
    
       /* layouts.main */
   /* test checkout-bar */
   .checkout-process-bar {
    padding: 16px;
    position: relative;
    border-radius: 16px 0;
    width: 100%;
    }
    .checkout-process-bar:before {
    content: "";
    position: absolute;
    width: 40px;
    height: 10px;
    top: 21px;
    left: 16px;
    z-index: 10;
    background-color: white;
    }

    .checkout-process-bar ul:before {
    position: absolute;
    height: 4px;
    background-color: #e7e8e9;
    content: "";
    width: 100%;
    top: 10px;
    }

    .checkout-process-bar ul li.active:before {
    width: 13px;
    height: 15px;
    top: 3px;
    border: 2px solid white;
    z-index: 14;
    background-color: #221f20;
    }

    .checkout-process-bar ul li.active:after {
    content: "";
        width: 800%;
        background-color: #221f20;
        height: 4px;
        top: 10px;
        position: absolute;
        right: 50%;
    }



    .checkout-process-bar ul li:before {
    content: "";
    position: absolute;
    top: 3px;
    left: 50%;
    transform: translateX(-50%);
    width: 12px;
    height: 12px;
    border-radius: 24px;
    z-index: 12;
    border: 2px solid #e7e8e9;
    background-color: white;
    }

    .checkout-process-bar ul {
    width: 100%;
    display: flex;
    justify-content: space-between;
    position: relative;
    overflow: hidden;
    grid-gap: 12px;
    /* flex-direction: column; */
    }

    .checkout-process-bar ul li {
    position: relative;
    padding-top: 30px;
    /* width: 96px; */
    text-align: center;
    font-size: 12px;
    line-height: 16px;
    color: #221f20;
    }

    .image-container {
    max-width: 300px; 
    margin: auto; 
    justify-content: center;
    align-items: center;
    
    }

    .image-container img {
    width: 100%; 
    height: 20rem; 
    display: block; 
    }
    /* form xac nhan */
    .form-xac-nhan{
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .row{
        --bs-gutter-x: 0;
    }
    
</style>