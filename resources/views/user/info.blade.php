
        <div class="row row-cols-1 row-cols-sm-2 pad" style="line-height: 1rem;">
            <!-- Thông tin cá nhân -->
            <div class="col-md-6 pad">
                <div class="row gutters-sm">
                    <!-- Thông tin chi tiết -->
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-body">

                                <!-- Các thông tin chi tiết -->
                                <div class="row">
                                    <div class="col-4 pad">
                                    <h6 class="text-secondary">Tên</h6>
                                    </div>
                                    <div class="col-8 ">
                                       <h6 class="text-secondary"> Hong Yen Nguyen</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 pad">
                                        <h6 class="text-secondary">Email</h6>
                                    </div>
                                    <div class="col-8 ">
                                       <h6 class="text-secondary"> admin@email.com</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 pad">
                                        <h6 class="text-secondary">Ngày sinh</h6>
                                    </div>
                                    <div class="col-8 ">
                                       <h6 class="text-secondary">01-01-2005</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 pad">
                                        <h6 class="text-secondary">Giới tính</h6>
                                    </div>
                                    <div class="col-8 ">
                                       <h6 class="text-secondary">Nữ</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 pad">
                                        <h6 class="text-secondary">SDT</h6>
                                    </div>
                                    <div class="col-8 ">
                                       <h6 class="text-secondary">0867499319</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 pad">
                                        <h6 class="text-secondary">Quê quán</h6>
                                    </div>
                                    <div class="col-8 ">
                                       <h6 class="text-secondary">Ba Trinh, Kế Sách, Sóc Trăng</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 pad">
                                        <h6 class="text-secondary">Địa chỉ</h6>
                                    </div>
                                    <div class="col-8 ">
                                       <h6 class="text-secondary">Mậu Thân, Xuân Khánh, Ninh Kiều, Cần Thơ</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 pad">
                                        <h6 class="text-secondary">Nghành</h6>
                                    </div>
                                    <div class="col-8 ">
                                       <h6 class="text-secondary">Công nghệ thông tin</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 pad">
                                        <h6 class="text-secondary">Khóa</h6>
                                    </div>
                                    <div class="col-8 ">
                                       <h6 class="text-secondary">2021-2025</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4 pad">
                                        <h6 class="text-secondary">Bậc đào tạo</h6>
                                    </div>
                                    <div class="col-8 ">
                                       <h6 class="text-secondary">Đại học chính quy</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide -->
            <div class="col-md-6 ">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 pad">
                                    <h6 class="text-secondary">Lớp</h6>
                                </div>
                                <div class="col-8 ">
                                    <h6 class="text-secondary">CNTT0121</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 pad">
                                    <h6 class="text-secondary">MSSV</h6>
                                </div>
                                <div class="col-8 ">
                                    <h6 class="text-secondary">2101198</h6>
                                </div>
                            </div>
                                       
                            <div class="row">
                                <div class="col-4 pad">
                                    <h6 class="text-secondary">Trạng thái</h6>
                                </div>
                                <div class="col-8 ">
                                    <h6 class="text-secondary">Đang học</h6>
                                </div>
                            </div>
                                        
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pop ">
                     {{-- Slide Card --}}
                     @include('user.card')
                </div>
                
                
            </div>
            <div class="col-sm-12 mt-3 ">
                * Nếu bị sai thông tin, sinh viên vui lòng liên hệ Phòng Đào Tạo để được hỗ trợ
           </div>
            
        </div>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        

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
        .text-secondary{
            font-size:0.8rem;
        }
    </style>
    <script>
        $(document).ready(function () {
            // Xem thêm button click event
            $('#readMoreBtn').click(function () {
                // Toggle the visibility of the hidden content
                $('#additionalContent').toggle();
    
                // Change button text based on visibility
                var buttonText = $(this).text() === 'Xem thêm' ? 'Ẩn đi' : 'Xem thêm';
                $(this).text(buttonText);
            });
        });
    </script>