@extends('layouts.app')
@section('content')
    <section id="banner">
        <div class="content">
            <div class="table-responsive">
                 <table class=" text-center table table_listing table-striped table-bordered">
                     <thead>
                        <tr>
                                    <td width ="5%";>STT</td>
                                    <td>Loại giấy tờ</td>
                                    <td width ="20%">Ngày đăng ký</td>
                                    <td>Hình thức</td>
                                    <td>Tình trạng</td>
                        </tr>
                    </thead>
                     <tbody>
                     <tr>
                                    <td>1</td>
                                    <td>NVQS</td>
                                    <td>19/11/2003</td>
                                    <td>Online</td>
                                    <td>Chưa nhận</td>
                                </tr>
                     </tbody>
                </table>
            </div>
        <!--Silde-->
            <div class="col-8 offset-2 ">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://media.truongcaodangduocsaigon.vn/resize/1200x627/files/tvcu971989/2023/05/26/vidu-xac-nhan-hoc-sinh-sinh-vien-175036.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://it.hcmiu.edu.vn/wp-content/uploads/2021/12/Screenshot_1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="arrow" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
            
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" ></span>
                    </button>
                </div>
            </div>
            <style>
                .carousel-control-prev, .carousel-control-next{
                    top:50%;
                    box-shadow: none;
                }
            </style>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@endsection