@extends('layouts.app')
@section('content')

<section id="banner">
    <div class="content">
        <h2 class=" text-center title">ĐĂNG KÝ NHẬN GIẤY XÁC NHẬN<br /></h2>

        <form method="post" action="#">
            <div class="row gtr-uniform">
                <!-- First Selection -->
                <div class="col-5">
                    <select name="register-type-category" id="register-type-category">
                        <option value="">- Chọn loại giấy -</option>
                        <option value="1">Manufacturing</option>
                        <option value="1">Shipping</option>
                        <option value="1">Administration</option>
                        <option value="1">Human Resources</option>
                    </select>
                </div>
                <!-- Second Selection -->
                <div class="col-5">
                    <select name="type-category" id="type-category">
                        <option value="">- Hình thức nhận -</option>
                        <option value="1">Trực tuyến</option>
                        <option value="1">Trực tiếp</option>
                    </select>
                </div>
                <!-- Submit Button -->
                <div class="col-2">
                    <ul class="actions">
                        <li><input type="submit" class="button big" value="Gửi"/></li>
                    </ul>
                </div>
            </div>
        </form>
        <!-- Infor area -->
        <div class="container">
            <h2 class=" text-center title">THÔNG TIN SINH VIÊN<br /></h2>
            @include('user.infor')
        </div>
        <span> * Nếu bị sai thông tin, sinh viên vui lòng liên hệ Phòng Đào Tạo để được hỗ trợ</span>
        <div class="progress flex-column doc" style="width: 4px; height: 10rem; position: relative;">
            <div class="progress-bar" role="progressbar" style="height: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="label" style="top: 15%; position: absolute; left: 100%;">Label 1</div>
          
            <div class="progress-bar bg-success" role="progressbar" style="height: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="label" style="top: 30%; position: absolute; left: 100%;">Label 2</div>
          
            <div class="progress-bar bg-info" role="progressbar" style="height: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="label" style="top: 50%; position: absolute; left: 100%;">Label 3</div>
          </div>
          
          
        
    </div>
    
</section>

@endsection
