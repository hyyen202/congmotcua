$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
});
function login() {
    var email = $("#email_login").val();
    var pass = $("#password_login").val();
    $("#thongbaomk").empty();
    $("#thongbaoemail").empty();
    $.ajax({
        type: "post",
        url: "dangnhap",
        data: {
            email: email,
            pass: pass,
        },
        success: function (res) {
            if (res == 1) {
                window.location.href = "http://congmotcua.ctuet.edu.vn:8080/";
            } else {
                toastr.warning("Đăng nhập không thành công");

                //
                if (res.pass) {
                    $("#thongbaomk").text(res.pass[0]);
                    if (res.email) {
                        $("#thongbaoemail").text(res.email[0]);
                    }
                } else if (res.email) {
                    $("#thongbaoemail").text(res.email[0]);
                    if (res.pass) {
                        $("#thongbaomk").text(res.pass[0]);
                    }
                } else {
                    $("#thongbaomk").text(res.pass[0]);
                    $("#thongbaoemail").text(res.email[0]);
                }
            }
        },
    });
}

function loginbygoogle() {
    $.ajax({
        type: "get",
        url: "auth/google",
        success: function (res) {},
    });
}
