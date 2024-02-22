<nav class="main-header navbar navbar-expand navbar-white navbar-light text-sm">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="" class="nav-link">Trang chủ</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="https://ctuet.edu.vn" class="nav-link">Liên hệ</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto" style="margin-right: 15px">
        <div class="user-panel mt-1 d-flex" style="margin-right: 4px">
            <div class="info">
                <a id="loadname" href="#" class="d-block"></a>

            </div>
        </div>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" style="padding:0px">
                <div class="user-panel" style="padding:2px">
                    <!-- <img  class="img-circle" alt="User Image" id = "loaduser_Img" src = '/images/profile/start.png' > -->
                    <i class="fa-solid fa-user fa-xl"></i>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a id='doimatkhau' onclick="userChangePass_load()" class="dropdown-item">
                    <i class="fas fa-key mr-2"></i>Đổi mật khẩu
                </a>
                <!-- <div class="dropdown-divider"></div>
                <a href="/login" onclick = "userLogout()" class="dropdown-item">
                    <i class="fa-solid fa-right-to-bracket mr-2"></i>Đăng xuất
                </a>
        </li> -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                    <i class="fa-solid fa-right-to-bracket mr-2"></i>Đăng xuất
                </a>
    </ul>
</nav>