<!doctype html>
<html lang="en">

<head>
    <title>Cổng thông tin một cửa CTUET</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('header')
</head>

<body>
    <div class="container">
        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-12 col-md-9 col-lg-6 col-xl-5 d-flex align-items-center justify-content-center text-center">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/b/ba/Logo_ctuet.png" class="img-fluid" alt="CTUET Logo">
                      <div class="text-logo big-logo">
                        <span class="d-block text-lg mb-3">Cổng thông tin sinh viên</span>
                        <span class="d-block text-md ctuet mb-3">TRƯỜNG ĐẠI HỌC KỸ THUẬT - CÔNG NGHỆ CẦN THƠ</span>                        
                      </div>
                  </div>

                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form>
                            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                                <button type="button" class="btn btn-primary btn-floating rounded-circle mx-1">
                                    <i class="fa fa-google" aria-hidden="true"></i>
                                </button>
                            </div>

                            <div class="divider d-flex align-items-center my-4">
                                <p class="text-center fw-bold mx-3 mb-0">Or</p>
                            </div>

                            <div class="form-group form-outline mb-4">
                                <label class="form-label" for="email_login">Email address</label>
                                <input type="email" id="email_login" class="form-control form-control-lg"
                                    placeholder="Enter a valid email address" />
                            </div>
                            <div class="form-group" style="font-size: 13px; color: #FFF; text-align: right;">
                                <span id="thongbaoemail"></span>
                            </div>

                            <div class="form-group form-outline mb-3">
                                <label class="form-label" for="password_login">Password</label>
                                <input type="password" id="password_login" class="form-control form-control-lg"
                                    placeholder="Enter password" />
                            </div>
                            <div class="form-group" style="font-size: 13px; color: #FFF; text-align: right;">
                                <span id="thongbaomk"></span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <button type="button" class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem;" onclick="login()">Sign
                                        in</button>
                                    <p class="small fw-bold mt-2 pt-1 mb-0">Sign in with
                                        <a class="px-2 py-2 mr-md-1 rounded "
                                            onclick="window.location='{{ route('loginbygoogle') }}'"
                                            class="ion-logo-facebook mr-2"></span>Google Account</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="admin/js/jquery.min.js"></script>
    <script src="admin/js/popper.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/main.js"></script>
    <script src="/template/admin/plugins/jquery/jquery.min.js"></script>
    <script src="/template/admin/plugins/toastr/toastr.min.js"></script>
    <script src="login.js"></script>
</body>

</html>
