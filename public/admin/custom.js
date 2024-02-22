$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    list_accounts();
});

function account_email() {
    $.ajax({
        type: "get",
        url: "qltk/email",
        dataType: "json",
        success: function (res) {
            $("#account_email").select2({
                data: res,
            });
        },
    });
}

function Clear_accounts() {
    $("#account_email").val("");
    $("#account_name").val("");
    $("#account_pass").val("");
    $("#error_pass").empty();
    $("#error_email").empty();
    $("#error_name").empty();
}
function Add_accounts() {
    var id_manhinh = $("#btt_submit_account").attr("data-id");
    var id_chucnang = $("#btt_submit_account").attr("btt_id_add");
    alert(id_chucnang);
    $.ajax({
        type: "post",
        url: "qltk/Add_accounts",
        data: {
            email: $("#account_email").val(),
            name: $("#account_name").val(),
            pass: $("#account_pass").val(),
            id_manhinh: id_manhinh,
            id_chucnang: id_chucnang,
        },
        success: function (res) {
            $("#error_pass").empty();
            $("#error_email").empty();
            $("#error_name").empty();
            if (res == 1) {
                list_accounts();
                toastr.success("Thêm thành công");
            } else if (res == 0) {
                toastr.warning("Cập nhật không thành công, liên hệ admin");
            } else if (res == 2) {
                toastr.warning("Không có quyền truy cập chức năng");
            } else {
                if (res.pass) {
                    $("#error_pass").text(res.pass[0]);
                    if (res.name) {
                        $("#error_name").text(res.name[0]);
                        if (res.email) {
                            $("#error_email").text(res.email[0]);
                        }
                    } else {
                        if (res.email) {
                            $("#error_email").text(res.email[0]);
                        }
                    }
                } else if (res.name) {
                    $("#error_name").text(res.name[0]);
                    if (res.email) {
                        $("#error_email").text(res.email[0]);
                    }
                } else if (res.email) {
                    $("#error_email").text(res.email[0]);
                } else {
                    $("#error_pass").text(res.pass[0]);
                    $("#error_email").text(res.email[0]);
                    $("#error_name").text(res.name[0]);
                }
            }
        },
    });
}

function delete_accounts(id) {
    var id_manhinh = $("#btt_submit_account").attr("data-id");
    var id_chucnang = $("#btt_chucnang_dlt").attr("id_delete");
    $.ajax({
        type: "post",
        url: "qltk/delete_accounts/" + id,
        data: {
            id_manhinh: id_manhinh,
            id_chucnang: id_chucnang,
        },
        success: function (res) {
            if (res == 1) {
                list_accounts();
                return toastr.success("Xóa thành công");
            } else if (res == 2) {
                return toastr.warning("Không có quyền truy cập chức năng");
            } else if (res == 4) {
                return toastr.warning(
                    "Không thể xóa quyền của người dùng này!!Liên hệ admin"
                );
            } else if (res == 3) {
                return toastr.warning("Không thể tự hủy");
            } else {
                return toastr.warning("Xóa không thành công!!Liên hệ admin");
            }
        },
    });
}

function edit_accounts(id) {
    $("#Update_button").attr("data-id", id);
    $("#Refresh_update_button").attr("data-id", id);
    var id_manhinh = $("#btt_submit_account").attr("data-id");
    var id_chucnang = $("#btt_chucnang_edit").attr("id_edit");
    $.ajax({
        type: "get",
        url: "qltk/edit_accounts/" + id,
        dataType: "json",
        data: {
            id_manhinh: id_manhinh,
            id_chucnang: id_chucnang,
        },
        success: function (res) {
            if (res == 2) {
                return toastr.warning("Không có quyền truy cập chức năng này");
            } else {
                $("#modal_accounts").show();
                var accounts_Data = res[0];
                $("#update_accounts_name").val(accounts_Data.name);
                $("#update_accounts_email").val(accounts_Data.email);
            }
        },
    });
}

function update_accounts() {
    var id = $("#Update_button").data("id");
    var update_accounts_name = $("#update_accounts_name").val();
    var update_accounts_email = $("#update_accounts_email").val();
    $.ajax({
        type: "post",
        url: "qltk/update_accounts",
        data: {
            id: id,
            update_accounts_name: update_accounts_name,
            update_accounts_email: update_accounts_email,
        },
        success: function (res) {
            $("#error_email_update").empty();
            $("#error_name_update").empty();
            if (res == 1) {
                list_accounts();
                $("#modal_accounts").hide();
                return toastr.success("Cập nhật thành công");
            } else if (res == 0) {
                return toastr.warning(
                    "Cập nhật không thành công,liên hệ admin"
                );
            } else {
                if (res.update_accounts_email) {
                    $("#error_email_update").text(res.update_accounts_email[0]);
                    if (res.update_accounts_name) {
                        $("#error_name_update").text(
                            res.update_accounts_name[0]
                        );
                    }
                } else if (res.update_accounts_name) {
                    $("#error_name_update").text(res.update_accounts_name[0]);
                    if (res.update_accounts_email) {
                        $("#error_email_update").text(
                            res.update_accounts_email[0]
                        );
                    }
                } else {
                    $("#error_name_update").text(res.update_accounts_name[0]);
                    $("#error_email_update").text(res.update_accounts_email[0]);
                }
            }
        },
    });
}

function modal_close_accounts() {
    $("#modal_accounts").hide();
}

function modal_cancel_accounts() {
    $("#modal_accounts").hide();
} //
function modal_refresh_accounts() {
    var id = $("#Refresh_update_button").data("id");
    $("#error_email_update").empty();
    $("#error_name_update").empty();
    edit_accounts(id);
}
//

function list_accounts() {
    $("#list_accounts_tmp").empty();
    $("#list_accounts_tmp").append(
        '<table class="table table-bordered table-hover table-striped dataTable no-footer dtr-inline" id="list_accounts"></table>'
    );
    var id_manhinh = $("#btt_submit_account").attr("data-id");
    var table = $("#list_accounts").DataTable({
        ajax: {
            type: "get",
            url: "qltk/list_accounts",
        },
        // dom: 'frtip',
        columns: [
            { title: "Email", data: "email" },
            { title: "Name", data: "name" },
            {
                title: "Chức năng",
                data: "id",
                render: function (data) {
                    var html =
                        '<i style ="color: #0000FF;"  id="btt_chucnang_edit" id_edit="2" data-id="' +
                        id_manhinh +
                        '" class="fa-regular fa-pen-to-square" onclick = "edit_accounts(' +
                        data +
                        ')">&nbsp&nbsp</i><i class="fa-solid fa-key" style="color: black;" id="btt_chucnang_edit" data-id="' +
                        id_manhinh +
                        '" id_edit="2" onclick = "change_pass(' +
                        data +
                        ')">&nbsp&nbsp</i><i style ="color: blue" class="fa-solid fa-gears" id="btt_chucnang_role" data-id="' +
                        id_manhinh +
                        '" id_role="6" onclick = "loadUser_Menus_Roles(' +
                        data +
                        ')">&nbsp&nbsp</i><i style ="color: red;" class="fa-regular fa-trash-can"  id="btt_chucnang_dlt" data-id="' +
                        id_manhinh +
                        '" id_delete="4" onclick = delete_accounts(' +
                        data +
                        ")></i>";
                    return html;
                },
            },
        ],
        columnDefs: [
            {
                targets: 2,
                className: "text-center",
            },
        ],
        scrollY: 450,
        language: {
            emptyTable: "There are no accounts to display",
            info: " _START_ / _END_ trên _TOTAL_",
            paginate: {
                first: "Trang đầu",
                last: "Trang cuối",
                next: "Trang sau",
                previous: "Trang trước",
            },
            search: "Tìm kiếm:",
            loadingRecords: "Đang tìm kiếm ... ",
            lengthMenu: "Hiện thị _MENU_",
            infoEmpty: "",
        },
        retrieve: true,
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: false,
        info: true,
        autoWidth: true,
        responsive: true,
        select: true,
    });
}
// Change pass
function change_pass(id) {
    $("#change_button").attr("data-id", id);
    $("#Refresh_change_button").attr("data-id", id);
    var id_manhinh = $("#btt_submit_account").attr("data-id");
    var id_chucnang = $("#btt_chucnang_edit").attr("id_edit");
    $.ajax({
        type: "get",
        url: "qltk/change_pass/" + id,
        dataType: "json",
        data: {
            id_manhinh: id_manhinh,
            id_chucnang: id_chucnang,
        },
        success: function (res) {
            if (res == 2) {
                return toastr.warning("Không có quyền truy cập chức năng này");
            } else {
                $("#modal_change_pass").show();
            }
        },
    });
}
function update_change(id) {
    var id = $("#change_button").data("id");
    var change_pass = $("#change_pass").val();
    var change_pass1 = $("#change_pass1").val();
    $.ajax({
        type: "post",
        url: "qltk/update_change",
        data: {
            id: id,
            change_pass: change_pass,
            change_pass1: change_pass1,
        },
        success: function (res) {
            $("#error_change_pass1").empty();
            $("#error_change_pass").empty();
            if (res == 1) {
                list_accounts();
                $("#modal_change_pass").hide();
                return toastr.success("Cập nhật thành công");
            } else if (res == 0) {
                return toastr.warning(
                    "Cập nhật không thành công,liên hệ admin"
                );
            } else if (res == 3) return toastr.warning("Mật khẩu không khớp");
            else {
                if (res.change_pass) {
                    $("#error_change_pass").text(res.change_pass[0]);
                    if (res.change_pass1) {
                        $("#error_change_pass1").text(res.change_pass1[0]);
                    }
                } else if (res.change_pass1) {
                    $("#error_change_pass1").text(res.change_pass1[0]);
                } else {
                    $("#error_change_pass").text(res.change_pass[0]);
                    $("#error_change_pass1").text(res.change_pass1[0]);
                }
            }
        },
    });
}

function modal_close_change() {
    $("#modal_change_pass").hide();
}

function modal_cancel_change() {
    $("#modal_change_pass").hide();
} //
function modal_refresh_change() {
    $("#error_change_pass").empty();
    $("#error_change_pass1").empty();
    $("#change_pass").val("");
    $("#change_pass1").val("");
}
// Phân quyền user
// đóng model phân quyền user
function modal_close_phan_quyen_user() {
    $("#modal_phan_quyen").hide();
}

//
function loadUser_Menus_Roles(id) {
    $("#remove_loadUser_Menus_Roles").empty();
    var id_manhinh = $("#btt_submit_account").attr("data-id");
    var id_chucnang = $("#btt_chucnang_role").attr("id_role");
    $.ajax({
        type: "get",
        url: "qltk/loadUser_Menus_Roles/" + id,
        data: {
            id: id,
            id_manhinh: id_manhinh,
            id_chucnang: id_chucnang,
        },
        success: function (data) {
            if (data == 2) {
                return toastr.warning("Không có quyền truy cập chức năng");
            } else {
                $("#modal_phan_quyen").show();
                var html = "";
                html +=
                    '<table class="table table-bordered table-hover table-striped" style = "width: 100%" id = "loadUser_Menus_Roles">';
                html += "<thead>";
                html += "<tr>";
                // html += '<th>ID</th>'
                html += "<th>Tên chức năng</th>";
                for (let i = 0; i < data.head.length; i++) {
                    html +=
                        "<th>" + data.head[i]["danhmuc_chucnang_ten"] + "</th>";
                }
                html += "</tr>";
                html += "</thead>";
                html += "<tbody>";
                if (data.body.length > 0) {
                    for (let j = 0; j < data.body.length; j++) {
                        html += "<tr>";
                        html += "<td>" + data.body[j]["name"] + "</td>";
                        for (let i = 0; i < data.head.length; i++) {
                            if (
                                data.body[j][
                                    data.head[i]["danhmuc_chucnang_id"]
                                ] == undefined ||
                                data.body[j][
                                    data.head[i]["danhmuc_chucnang_id"]
                                ] == 0
                            ) {
                                data.body[j][
                                    data.head[i]["danhmuc_chucnang_id"]
                                ] == 0;
                                var checked = "";
                                hasrole = 0;
                            } else {
                                var checked = "checked";
                                hasrole = 1;
                            }
                            html +=
                                "<td  style = 'text-align:center'><input hasrole = '" +
                                hasrole +
                                "' id_chucnang = '" +
                                data.head[i]["id"] +
                                "' class = 'checkquyen" +
                                data.body[j]["IDMN"] +
                                "' id='phanquyen" +
                                data.id_user +
                                "_" +
                                data.body[j]["IDMN"] +
                                "_" +
                                data.head[i]["id"] +
                                "' type = 'checkbox' id_user = " +
                                data.id_user +
                                " style = 'height: 20px;' " +
                                checked +
                                " onclick = capnhatquyen(" +
                                data.id_user +
                                "," +
                                data.body[j]["IDMN"] +
                                "," +
                                data.head[i]["id"] +
                                ")></td>";
                        }
                        html += "</tr>";
                    }
                }

                html += "</tbody>";
                html += "</table>";
                $("#remove_loadUser_Menus_Roles").html(html);
                $("#loadUser_Menus_Roles").DataTable({
                    scrollY: "200px",
                    paging: true,
                    lengthChange: false,
                    searching: true,
                    ordering: false,
                    info: true,
                    autoWidth: true,
                    responsive: true,
                });
            }
        },
    });
}

function capnhatquyen(id_user, id_manhinh, id_chucnang) {
    var quyen1 = document.getElementsByClassName("checkquyen" + id_manhinh);
    var list_quyen = [];
    var list_hasrole = [];

    for (let i = 0; i < quyen1.length; i++) {
        list_hasrole[i] = $(quyen1[i]).attr("hasrole");
        if ($(quyen1[i]).prop("checked") == true) {
            list_quyen[i] = $(quyen1[i]).attr("id_chucnang");
        } else {
            list_quyen[i] = 0;
        }
    }
    $.ajax({
        type: "post",
        url: "qltk/capnhatquyen",
        data: {
            id_user: id_user,
            id_manhinh: id_manhinh,
            id_chucnang: id_chucnang,
            quyen: list_quyen,
            hasrole: list_hasrole,
        },
        success: function (res) {
            if (res == 1) {
                loadUser_Menus_Roles(id_user);
                return toastr.success("Cập nhật quyền thành công.");
            } else if (res == 0) {
                loadUser_Menus_Roles(id_user);
                return toastr.warning("Màn hình không có chức năng.");
            } else {
                loadUser_Menus_Roles(id_user);
                return toastr.warning("Cập nhật quyền không thành công.");
            }
        },
    });
}
