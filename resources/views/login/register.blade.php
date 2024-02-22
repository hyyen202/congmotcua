
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/user/css/loading.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('user.head')
    <title>{{ $title }}</title>

       <!-- Toastr -->
       {{-- <link rel="stylesheet" href="/template/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
       <link rel="stylesheet" href="/template/admin/plugins/toastr/toastr.min.css"> --}}

</head>
<body class="hold-transition login-page">
    <div class="login-box">
    <div class="login-logo">
        {{-- <a href="#"><b>Đăng nhập</a> --}}
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
        <p class="login-box-msg"><strong>HỆ THỐNG QUẢN LÝ XÉT TUYỂN</strong></p>

        <form action="" method="">
            {{-- @if ($errors->has('email_register'))
                <div class="input-group mb-3">
                    <sub style="color: red">
                        {{ $errors->first('email_register') }}
                    </sub>
                </div>
            @endif --}}

            <div class="input-group mb-3">
                <input type="text" name = 'email_register' id = 'email_register' class="form-control validate_register" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <sup>
                    <p id = "v_email_register" class="error"></p>
                </sup>
            </div>



            <div class="input-group mb-3">
                <input type="text" name = 'phone_register' id = 'phone_register' class="form-control validate_register" placeholder="Số điện thoại">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-phone"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <sup>
                    <p id = "v_phone_register" class="error"></p>
                </sup>
            </div>

            <div class="input-group mb-3">
                <input type="text" name = 'cmnd_register'   id = 'cmnd_register' class="form-control validate_register" placeholder="Chứng minh nhân dân/Thẻ căn cước">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-id-card"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <sup>
                    <p id = "v_cmnd_register" class="error"></p>
                </sup>
            </div>


            <div class="col-md-12">
                <p style="color: rgb(12, 12, 232)" id = 'info_register'></p>
            </div>

            <div class="input-group mb-3">
                <button type="button"  id="showinfo1" onclick = "showinfo()" class="btn btn-primary btn-block"><i class="fa fa-registered"></i> Đăng ký</button>
            </div>

            <div class="col-12 col-md-12">
                <p class="mb-0">
                    <a href="/" class="text-center">Trở về trang đăng nhập</a>
                </p>
            </div>

            @csrf
        </form>
    </div>
</div>

<div class = "modal" id="modal_loadding_reg">
    <div style="text-align:center; background-color: rgba(0,0,0,0);height: 100%;">
        <div class="loader"></div>
    </div>
</div>
<!-- /.login-box -->
</html>
<script src="/template/admin/plugins/jquery/jquery.min.js"></script>
<script src="/template/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="/template/admin/plugins/toastr/toastr.min.js"></script>
<script src="/user/js/login/control.js"></script>
