$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        type: "get",
        url: "/sidebar",
        success: function (res) {
            $("#loadsidebar").html(res);
        },
    });
    $.ajax({
        type: "get",
        url: "loadname",
        success: function (res) {
            if(res == 1){
                return toastr.warnning("Hiện tại bạn chưa có quyền xem!!!.")
            }else{
                $('#loadname').html(res);
            }
        }
    });

    //
});

function loadpage(idmn) {
    $.ajax({    
        type: "post",
        url: "loadpage/" + idmn,
        success: function (res) {
            $("#loadpage").load(res[0].link ,function(){
                $("#btt_submit_account").attr("data-id", idmn);
                $("#btt_chucnang").attr("data-id", idmn);
            });
            
        },
    });
}
// $(document).ready(function loadpage(id){
//     $.ajax({
//         type: "post",
//         url: "/loadpage/"+id,
//         success: function (res) {
//             $('#loadpage').load(res[0].link)
//         }
//     });
// });

// $(document).ready(function loadpage(id){
//     $(document).on("click", "a", function(e){
//         e.preventDefault();
//       $.ajax({
//         type: "post",
//         url: "/loadpage/" + id,
//         success: function (res) {
//           $("#loadpage").load(res[0].link);
//         }
//       });
//     });
//   });
