<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card card-navy card-outline" style = "min-height:600px">
                <div class="card-header" style="padding: 0;margin-left: 10px;font-weight: bold;">Đổi mật khẩu

                </div>

                <div class="card-body" style=" padding: 3px" >


                    <div class="row">
                        {{-- mật khẩu cũ--}}
                        <div class="col-md-6">
                            <div class="input-group input-group-sm mb-3 col-md-12">
                                <div class="input-group-prepend">
                                    <span style = "background-color: inherit;color: black;font-weight: bold;border: none;" class="input-group-text">Mật khẩu cũ:</span>
                                </div>
                                <input type="password" name = "user_passwordreset_old" id = 'user_passwordreset_old' value="{{old('user_passwordreset_old')}}" class="validate_changepass form-control">
                            </div>
                            <div class="col-md-12">
                                <sup>
                                    <p class="error" id="v_user_passwordreset_old" ></p>
                                </sup>
                            </div>
                        </div>

                        <div class="col-md-6">
                        </div>

                        {{-- Mật khẩu mới --}}
                        <div class="col-md-6">
                            <div class="input-group input-group-sm mb-3 col-md-12">
                                <div class="input-group-prepend">
                                    <span style = "background-color: inherit;color: black;font-weight: bold;border: none;" class="input-group-text">Mật khẩu mới:</span>
                                </div>
                                <input type="password" name = "user_passwordreset" id = 'user_passwordreset' value="{{old('user_passwordreset')}}" class="form-control validate_changepass">
                            </div>
                                <div class="col-md-12">
                                <sup>
                                    <p id = "v_user_passwordreset" class="error"></p>
                                </sup>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                        {{-- Nhập lại mật khẩu mới --}}
                        <div class="col-md-6">
                            <div class="input-group input-group-sm mb-3 col-md-12">
                                <div class="input-group-prepend">
                                    <span style = "background-color: inherit;color: black;font-weight: bold;border: none;" class="input-group-text">Nhập lại mật khẩu mới:</span>
                                </div>
                                <input type="password" id="user_passwordreset_confirm" name="user_passwordreset_confirm" class="validate_changepass form-control" value="{{old('user_passwordreset')}}">
                            </div>
                            <div class="col-md-12">
                                <sup>
                                    <p id='v_user_passwordreset_confirm' class="error"></p>
                                </sup>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <div class="input-group input-group-sm mb-3 col-md-12">
                                <div class="input-group-prepend">
                                </div>
                                <button type="button" id = 'id_user' id-data = '{{Auth::guard('user')->user()->id}}' onclick="UserChangePass()" class="btn-sm btn-primary"><i class="fa fa-key"></i> Đổi mật khẩu</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/user/js/changepass/control.js"></script>
<script src="/template/admin/plugins/jquery/jquery.min.js"></script>


