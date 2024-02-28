@extends('layouts.app')
@section('content')

<section id="banner">
    <div class="content">
        <div id="pageAjax">
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    // Hàm để tải nội dung từ server sử dụng Ajax
    function loadContent(url) {
        $.ajax({
            url: url,
            type: 'GET',
            success: function (data) {
                $("#pageAjax").html(data);
            },
            error: function (error) {
                console.error('Lỗi khi tải nội dung:', error);
            }
        });
    }

    // Hàm xử lý khi URL thay đổi
    function handleUrlChange() {
        // Tải nội dung dựa trên URL mới
        loadContent(window.location.pathname);
    }

    $(document).ready(function () {
        // Tải nội dung ban đầu dựa trên URL hiện tại
        loadContent('/main');

        // Sử dụng sự kiện popstate để xử lý quay lại/điều hướng tiếp theo trong lịch sử trình duyệt
        $(window).on('popstate', handleUrlChange);

        $(document).on('click', 'a', function (e) {
            // Kiểm tra nếu đường dẫn không phải là /contact và /login thì sử dụng Ajax
            if ($(this).attr('href') !== '/contact' && $(this).attr('href') !== '/logout') {
                e.preventDefault();
                var url = $(this).attr('href');

                // Thay đổi URL mà không làm tải lại toàn bộ trang
                history.pushState({}, '', url);

                // Tải nội dung dựa trên liên kết được click
                loadContent(url);
            }
        });
    });
</script>


@endsection
