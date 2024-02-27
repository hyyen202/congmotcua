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
    </div>
    
</section>

@endsection
