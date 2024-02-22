<!doctype html>
<html lang="en">

<head>
    <title>Cổng thông tin một cửa CTUET</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="admin/css/style.css">
    {{-- \ --}}
    {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link rel="stylesheet" href="/template/admin/plugins/toastr/toastr.min.css"> -->
    @include('header')

</head>

<body class="img js-fullheight" style="background-image: url(admin/img_background/bg.jpg);">
    <section class="ftco-section">
        <div style="height:1px" class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h1 class="heading-section">CTUT - Can Tho University of Technology</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h2 style="color: #FFF;" class="mb-4 text-center">LOGIN</h2>
                        <form  class="signin-form">
                            <div class="form-group">
                                <input style="background-color: transparent;" type="text" id= "email_login" mane="email_login" class="form-control"
                                    placeholder="Email" >
                            </div>
                            {{-- thông báo --}}
                            <div style="font-size: 13px; color : #FFF;text-align: right;" class="form-group">
                                <span id = "thongbaoemail"></span>
                            </div>
                            {{--  --}}
                            <div class="form-group">
                                <input style="background-color: transparent;" id="password_login" mane="password_login" type="password" class="form-control"
                                    placeholder="Password">
                                <span toggle="#password_login"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            {{-- thông báo --}}
                            <div style="font-size: 13px; color : #FFF;text-align: right;" class="form-group">
                                <span id = "thongbaomk"></span>
                            </div>
                            {{--  --}}
                            <div class="form-group">
                                <button type="button" onclick="login()" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            {{-- <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                            </div> --}}
                        </form>
                        <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                        <div class="social d-flex text-center">
                            <a class="px-2 py-2 mr-md-1 rounded " onclick="window.location='{{ route('loginbygoogle') }}'" class="btn btn-primary btn-block"><span
                                    class="ion-logo-facebook mr-2"></span> Google Account</a>
                            {{-- <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="admin/js/jquery.min.js"></script>
    <script src="admin/js/popper.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/main.js"></script>
    {{--  --}}
    <script src="/template/admin/plugins/jquery/jquery.min.js"></script>
    <script src="/template/admin/plugins/toastr/toastr.min.js"></script>
    <script src="login.js"></script>

</body>

</html>
