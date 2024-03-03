@extends('layouts.app')

@section('content')
<section id="banner">
    <div class="content">
        <div id="pageAjax">

            <div class="row row-cols-1 row-cols-sm-2">
                 <!-- Ảnh đại diện -->
                 <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Avatar" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>Hong Yen Nguyen</h4>
                                    <span class="text-secondary d-block mb-3">admin@email.com</span>
                                    <span class="text-secondary d-block mb-3">CNTT0121</span>
                                    <span class="text-muted font-size-sm d-block mb-3">Khóa 2021-2025</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Thông tin cá nhân -->
                <div class="col size-form">
                    
                    <div class="row gutters-sm">
                           
                        <!-- Thông tin chi tiết -->
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <!-- Các thông tin chi tiết -->
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="lbl-info">MSSV</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            2101198
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="lbl-info">Lớp</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            CNTT0121
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="lbl-info">Ngành</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            Công nghệ thông tin
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="lbl-info">SĐT</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                        0867499318
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="lbl-info">Địa chỉ</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            Mậu Thân, Xuân Khánh, Ninh Kiều, Cần Thơ
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="lbl-info">Trạng thái</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            Còn học
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="col">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://www.uit.edu.vn/sites/vi/files/uploads/images/thumbs/202308/the-sinh-vien.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Thẻ sinh viên<p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://xdcs.cdnchinhphu.vn/thumb_w/650/446259493575335936/2023/3/25/cccd-16797554773811866991223-0-7-708-1140-crop-1679755486458365624028.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>CCCD/CMND</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


@endsection
<!-- Bootstrap JS và các phụ thuộc -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.carousel-control-prev, .carousel-control-next{
    top:50%;
    box-shadow: none;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);}
    /* Ngắn lại chiều cao của các thẻ row */
 /* Ngắn lại chiều cao của các thẻ row */
 .row {
    line-height: 0; /* Điều chỉnh giá trị tùy theo nhu cầu */
}

/* Thêm điều kiện cho màn hình lớn hơn 768px */
@media (min-width: 768px) {
    .row {
        line-height: 1.8; /* Điều chỉnh giá trị tùy theo nhu cầu */
    }
}
h6{
    font-size:0.9rem;
}
.size-form{
    width:60%;
}
</style>