
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CỔNG THÔNG TIN MỘT CỬA</title>
    @include('header')
</head>
<body class="sidebar-mini">
    <div class="wrapper">
        <!-- Preloader -->
        <!-- {{-- @include('admin.preloader') --}} -->
        <!-- /.preloader -->
<div class="tieude">{{Auth::guard('loginbygoogle')->user()->name}}</div>
        <!-- Navbar -->
         @include('navbar')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        @include('sidebar')
        <!-- /.sidebar -->
        @yield('sidebar1')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 1302.12px;">
            <section class="content">
                <div class="container-fluid">
                    @include('contentheader')
                    <div class="row">
                        <div class="col-md-12">
                                <div id="loadpage"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div> 
         @include('footer')
    </div>
</body>
</html>
