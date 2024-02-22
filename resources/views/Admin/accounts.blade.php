<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-3 col-lg-3" >
            <div class="card card-navy card-outline" style="min-height:600px" >
                <div>
                    <div class="card-header" style="padding: 0;margin-left: 10px;font-weight: bold;">Add New Accounts</div>
                    <div class="card-body" style="padding-top: 3px; padding-bottom:0px">
                        <div class="col-md-12 col-12">
                            <div class="form-group row" style="margin-bottom: 3px">
                                <label for="id_user_check" class="col-sm-4 col-form-label" style="padding-bottom: 0px">Email:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id='account_email' style="height:28px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12" id ="error_email" style="font-size: 13px; color : red;text-align: right;"></div>
                        <div class="col-md-12 col-12">
                            <div class="form-group row" style="margin-bottom: 3px">
                                <label for="id_user_check" class="col-sm-4 col-form-label" style="padding-bottom: 0px">Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id='account_name' style="height:28px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12" id ="error_name" style="font-size: 13px; color : red;text-align: right;"></div>
                        <div class="col-md-12 col-12">
                            <div class="form-group row" style="margin-bottom: 3px">
                                <label for="nsx_chucoso" class="col-sm-4 col-form-label" style="padding-bottom: 0px">Password:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id='account_pass' style="height:28px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12" id ="error_pass" style="font-size: 13px; color : red;text-align: right;"></div>
                    </div>
                </div>
                <div class="card-header" style="padding: 0;margin-left: 10px;font-weight: bold;"></div>
                <div class="card-body" style="padding-top: 3px; padding-bottom:0px">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <button type="button" id="" onclick="Clear_accounts()" class="btn btn-block btn-primary btn-xs"><i class="fa-solid fa-rotate"></i>&nbsp;&nbsp;&nbsp;Clear</button>
                        </div>
                        <div class="col-md-6 col-6">
                            <button type="button"  id="btt_submit_account" btt_id_add="3" data-id="" onclick="Add_accounts()" class="btn btn-block btn-primary btn-xs"><i class="fa-solid fa-floppy-disk"></i>&nbsp;&nbsp;&nbsp;Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-9 col-lg-9">
            <div class="card card-navy card-outline" style="min-height:600px">
                <div>
                    <div class="card-header" style="padding: 0;margin-left: 10px;margin-top: 3px;font-weight: bold;">List Accounts</div>
                    <div class="card-body" style="padding-bottom: 0px;padding-top: 3px" id="list_accounts_tmp">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal_accounts">
    <div style="vertical-align:middle;background-color: rgba(0,0,0,0.5);height: 100%;">
        <div class="row"> 
            <div class="col-md-2 col-12">
            </div>
            <div class="col-md-8 col-12">
            <div class="card card-navy card-outline" style="width:70%; height:auto; padding: 2px; background-color:#fff; margin-top: 20%;margin-left: 20%;">
                    <div class="card-header" style="padding: 0;margin-left: 10px;margin-top: 3px;font-weight: bold;">
                        <div class="row">
                            <div class="col-md-11 col-lg-11 col-11">
                                <span class="">Update Accounts</span>
                            </div>
                            <div class="col-md-1 col-lg-1 col-1">
                                <span class="float-right" style="margin-right: 10px"><i onclick="modal_close_accounts()" id='modal_number_go_wish_start_end_close' class="fas fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="padding-bottom: 0px;padding-top: 3px">
                        <form id="editnsx">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-12"><div class="form-group row" style="margin-bottom: 3px">
                                        <label for="name" class="col-sm-2 col-form-label" style="padding-bottom: 0px">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="update_accounts_name" id='update_accounts_name' value="" class="validate form-control" style="height:28px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12" id ="error_name_update" style="font-size: 13px; color : red;text-align: right;"></div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group row" style="margin-bottom: 3px">
                                        <label for="link" class="col-sm-2 col-form-label" style="padding-bottom: 0px">Email:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="update_accounts_email" id='update_accounts_email' value="" class="form-control validate" style="height:28px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12" id ="error_email_update" style="font-size: 13px; color : red;text-align: right;"></div>
                                <div class="col-md-12 col-12">
                                    <div class="card-header" style="padding: 0;margin-left: 10px;font-weight: bold;"></div>
                                    <div class="card-body" style="padding-top: 3px; padding-bottom:0px">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                            </div>
                                            <div class="col-md-2 col-6">
                                                <button type="button" onclick="update_accounts()" id="Update_button" data-id="" class="btn btn-block btn-primary btn-xs"><i class="fa-solid fa-floppy-disk"></i>&nbsp;&nbsp;&nbsp;Cập nhật</button>
                                            </div>
                                            <div class="col-md-2 col-6">
                                                <button type="button" onclick="modal_refresh_accounts()" id='Refresh_update_button' data-id="" class="btn btn-block btn-primary btn-xs"><i class="fa-solid fa-rotate"></i>&nbsp;&nbsp;&nbsp;Làm mới</button>
                                            </div>
                                            <div class="col-md-2 col-6">
                                                <button type="button" id='destroyEditMenu' onclick="modal_cancel_accounts()" class="btn btn-block btn-primary btn-xs"><i class="fa-regular fa-circle-xmark"></i>&nbsp;&nbsp;&nbsp;Hủy</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-12">
            </div>
        </div>
    </div>
</div>

<!--Change pass  -->
<div class="modal" id="modal_change_pass">
    <div style="vertical-align:middle;background-color: rgba(0,0,0,0.5);height: 100%;">
        <div class="row"> 
            <div class="col-md-2 col-12">
            </div>
            <div class="col-md-8 col-12">
            <div class="card card-navy card-outline" style="width:70%; height:auto; padding: 2px; background-color:#fff; margin-top: 20%;margin-left: 20%;">
                    <div class="card-header" style="padding: 0;margin-left: 10px;margin-top: 3px;font-weight: bold;">
                        <div class="row">
                            <div class="col-md-11 col-lg-11 col-11">
                                <span class="">Change Password</span>
                            </div>
                            <div class="col-md-1 col-lg-1 col-1">
                                <span class="float-right" style="margin-right: 10px"><i onclick="modal_close_change()" id='modal_number_go_wish_start_end_close' class="fas fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="padding-bottom: 0px;padding-top: 3px">
                        <form id="editnsx">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-12"><div class="form-group row" style="margin-bottom: 3px">
                                        <label for="name" class="col-sm-2 col-form-label" style="padding-bottom: 0px">New password</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="change_pass" id='change_pass' value="" class="validate form-control" style="height:28px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12" id ="error_change_pass" style="font-size: 13px; color : red;text-align: right;"></div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group row" style="margin-bottom: 3px">
                                        <label for="link" class="col-sm-2 col-form-label" style="padding-bottom: 0px">New password again:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="change_pass1" id='change_pass1' value="" class="form-control validate" style="height:28px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12" id ="error_change_pass1" style="font-size: 13px; color : red;text-align: right;"></div>
                                <div class="col-md-12 col-12">
                                    <div class="card-header" style="padding: 0;margin-left: 10px;font-weight: bold;"></div>
                                    <div class="card-body" style="padding-top: 3px; padding-bottom:0px">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                            </div>
                                            <div class="col-md-2 col-6">
                                                <button type="button" onclick="update_change()" id="change_button" data-id="" class="btn btn-block btn-primary btn-xs"><i class="fa-solid fa-floppy-disk"></i>&nbsp;&nbsp;&nbsp;Cập nhật</button>
                                            </div>
                                            <div class="col-md-2 col-6">
                                                <button type="button" onclick="modal_refresh_change()" id='Refresh_change_button' data-id="" class="btn btn-block btn-primary btn-xs"><i class="fa-solid fa-rotate"></i>&nbsp;&nbsp;&nbsp;Làm mới</button>
                                            </div>
                                            <div class="col-md-2 col-6">
                                                <button type="button" id='destroyEditMenu' onclick="modal_cancel_change()" class="btn btn-block btn-primary btn-xs"><i class="fa-regular fa-circle-xmark"></i>&nbsp;&nbsp;&nbsp;Hủy</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-12">
            </div>
        </div>
    </div>
</div>
<!-- phân quyền người dùng  -->
<div class="modal" id="modal_phan_quyen">
    <div style="vertical-align:middle;background-color: rgba(0,0,0,0.5);height: 100%;">
        <div class="row"> 
            <div class="col-md-2 col-12">
            </div>
            <div class="col-md-8 col-12">
                <div class="card card-navy card-outline" style="width:70%; height:auto; padding: 2px; background-color:#fff; margin-top: 20%;margin-left: 20%;">
                    <div class="card-header" style="padding: 0;margin-left: 10px;margin-top: 3px;font-weight: bold;">
                        <div class="row">
                            <div class="col-md-11 col-lg-11 col-11">
                                <span class="">Phân quyền cho người dùng</span>
                            </div>
                            <div class="col-md-1 col-lg-1 col-1">
                                <span class="float-right" style="margin-right: 10px"><i onclick="modal_close_phan_quyen_user()" id='modal_number_go_wish_start_end_close' class="fas fa-times"></i></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-12">
                                <div class="card-body" style="padding-bottom: 0px;padding-top: 3px" id="remove_loadUser_Menus_Roles">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    
                </div>
                
            </div>
            <div class="col-md-2 col-12">
            </div>
        </div>
</div>
<!--  -->
</html>
<script src="/admin/custom.js"></script>
<script src="/template/admin/plugins/jquery/jquery.min.js"></script>
<script src="/template/admin/plugins/select2/js/select2.full.min.js"></script>
<script src="/template/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/template/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/template/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/template/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/template/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/template/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<!-- Summernote -->
{{-- <script src="/template/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/template/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/template/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script> --}}