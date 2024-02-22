<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Mpdf\Tag\Select;

class AccountsController extends Controller
{
    function index()
    {
        return view('admin.accounts');
    }
    function email()
    {
        $nsx = DB::table('accounts')
            ->select('id as id', 'name as text')
            ->orderBy('id', 'ASC')
            ->get();
        echo $nsx;
    }
    function Add_accounts(Request $request)
    {
        $id_manhinh = $request->input("id_manhinh");
        $id_chucnang = $request->input("id_chucnang");
        $id_nguoidung = Auth::guard('loginbygoogle')->id();
        $sql = DB::table('l_phanquyen')->select()
            ->where('id_nguoidung', $id_nguoidung)
            ->where('id_manhinh', $id_manhinh)
            ->where('id_chucnang', $id_chucnang)
            ->get();
        if (count($sql) < 1) {
            return 2;
        } else {
            $validator = Validator::make(
                $request->all(),
                [
                    'email'     => 'required|email|unique:accounts',
                    'pass'      => 'required|alpha_dash|min:8',
                    'name'      => 'required|alpha_dash'
                ],
                [
                    'email.email'         => 'Email chưa đúng định dạng',
                    'email.required'      => 'Vui lòng điền email',
                    'email.unique'        => 'Email bị trùng',
                    'pass.required'       => 'Vui lòng điền Mật khẩu',
                    'pass.alpha_dash'     => 'Mật khẩu chỉ gồm chữ cái và chữ số',
                    'pass.min'            => 'Mật khẩu phải từ 8 ký tự trở lên',
                    'name.required'       => 'Vui lòng điền tên',
                    'name.alpha_dash'     => 'Tên chỉ gồm chữ cái và chữ số',
                ]
            );
            if ($validator->fails()) {
                return response()->json($validator->errors());
            } else {
                try {
                    DB::table('accounts')->insert([
                        'name' => $request->input('name'),
                        'email' => $request->input('email'),
                        'password' => Hash::make($request->input('pass')),
                    ]);
                    return 1;
                } catch (Exception $e) {
                    return 0;
                }
            }
        }
    }

    function list_accounts()
    {
        $sql_accounts = "SELECT email,name,id FROM accounts";
        $json_data['data'] = DB::select($sql_accounts);
        $data = json_encode($json_data);
        echo  $data;
    }
    function delete_accounts($id, Request $request)
    {
        $id_manhinh = $request->input("id_manhinh");
        $id_chucnang = $request->input("id_chucnang");
        $id_nguoidung = Auth::guard('loginbygoogle')->id();
        $sql = DB::table('l_phanquyen')->select()
            ->where('id_nguoidung', $id_nguoidung)
            ->where('id_manhinh', $id_manhinh)
            ->where('id_chucnang', $id_chucnang)
            ->get();
        if (count($sql) < 1) {
            return 2;
        } else if ($id_nguoidung == $id) {
            return 3;
        } else {
            try {
                DB::beginTransaction();
                $sql_delete_accounts = "DELETE FROM accounts WHERE id = $id;";
                $result = DB::delete($sql_delete_accounts);
                if ($result > 0) {
                    $xoa = DB::table('l_phanquyen')->where('id_nguoidung', $id)->delete();
                    if ($xoa > 0) {
                        DB::commit();
                        return 1;
                    } else {
                        DB::rollBack();
                        return 4;
                    }
                } else {
                    DB::rollBack();
                    return 0;
                }
            } catch (Exception $e) {
                return 0;
            }
        }
    }
    function edit_accounts($id, Request $request)
    {
        $id_manhinh = $request->input("id_manhinh");
        $id_chucnang = $request->input("id_chucnang");
        $id_nguoidung = Auth::guard('loginbygoogle')->id();
        $sql = DB::table('l_phanquyen')->select()
            ->where('id_nguoidung', $id_nguoidung)
            ->where('id_manhinh', $id_manhinh)
            ->where('id_chucnang', $id_chucnang)
            ->get();
        if (count($sql) < 1) {
            return 2;
        } else {
            $sql_accounts = "SELECT * FROM accounts
            WHERE id = $id;";
            $result = DB::select($sql_accounts);
            return $result;
        }
    }
    function update_accounts(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'update_accounts_email'     => 'required|email',
                'update_accounts_name'      => 'required|alpha_dash'
            ],
            [
                'update_accounts_email.required'      => 'Vui lòng điền email',
                'update_accounts_email.email'         => 'Email chưa đúng định dạng',
                'update_accounts_name.required'       => 'Vui lòng điền tên',
                'update_accounts_name.alpha_dash'     => 'Tên chỉ gồm chữ cái và chữ số',
            ]
        );
        if ($validator->fails()) {
            return response()->json($validator->errors());
        } else {
            try {
                $id = $request->input('id');
                $update_accounts_name = $request->input('update_accounts_name');
                $update_accounts_email = $request->input('update_accounts_email');
                $sql_update_accounts = "UPDATE accounts SET name =  '" . $update_accounts_name . "' , email = '" . $update_accounts_email . "'  WHERE id =  $id";
                $result = DB::update($sql_update_accounts);
                return 1;
            } catch (Exception $e) {
                return 0;
            }
        }
    }
    function change_pass($id, Request $request)
    {
        $id_manhinh = $request->input("id_manhinh");
        $id_chucnang = $request->input("id_chucnang");
        $id_nguoidung = Auth::guard('loginbygoogle')->id();
        $sql = DB::table('l_phanquyen')->select()
            ->where('id_nguoidung', $id_nguoidung)
            ->where('id_manhinh', $id_manhinh)
            ->where('id_chucnang', $id_chucnang)
            ->get();
        if (count($sql) < 1) {
            return 2;
        } else {
            $sql_accounts = "SELECT * FROM accounts
            WHERE id = $id;";
            $result = DB::select($sql_accounts);
            return $result;
        }
    }
    function update_change(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'change_pass'     => 'required|alpha_dash|min:8',
                'change_pass1'     => 'required|alpha_dash|min:8',
            ],
            [
                'change_pass.required'       => 'Vui lòng điền Mật khẩu',
                'change_pass.alpha_dash'     => 'Mật khẩu chỉ gồm chữ cái và chữ số',
                'change_pass.min'            => 'Mật khẩu phải từ 8 ký tự trở lên',
                'change_pass1.required'       => 'Vui lòng điền xác nhận Mật khẩu',
                'change_pass1.alpha_dash'     => 'Mật khẩu chỉ gồm chữ cái và chữ số',
                'change_pass1.min'            => 'Mật khẩu phải từ 8 ký tự trở lên',
            ]
        );
        if ($validator->fails()) {
            return response()->json($validator->errors());
        } else {
            try {
                $id = $request->input('id');
                $change_pass1 = $request->input('change_pass1');
                $change_pass = $request->input('change_pass');
                if ($change_pass1 == $change_pass) {
                    $change_pass = Hash::make($change_pass);
                    $sql_update_accounts = "UPDATE accounts SET password =  '" . $change_pass . "' WHERE id =  $id";
                    $result = DB::update($sql_update_accounts);
                    return 1;
                } else return 3;
            } catch (Exception $e) {
                return 0;
            }
        }
    }


    function loadUser_Menus_Roles(Request $request)
    {
        $admin = DB::table('accounts')->where("id", Auth::guard('loginbygoogle')->id())->get();
        $id_manhinh = $request->input("id_manhinh");
        $id_chucnang = $request->input("id_chucnang");
        $id_nguoidung = Auth::guard('loginbygoogle')->id();
        $sql = DB::table('l_phanquyen')->select()
            ->where('id_nguoidung', $id_nguoidung)
            ->where('id_manhinh', $id_manhinh)
            ->where('id_chucnang', $id_chucnang)
            ->get();
        if (count($sql) < 1 && $admin[0]->admin == 0) {
            return 2;
        } else {
            $id_user = $request->input('id');
            $sql_all_manhinh = "SELECT * FROM `l_cmc_mnu`";
            $menus = DB::select($sql_all_manhinh);

            $sql_all_chunang = "SELECT * FROM `danhmuc_chucnang`";
            $all_chucnang = DB::select($sql_all_chunang);

            $sql_chucnang_user = "SELECT * FROM `l_phanquyen` WHERE id_nguoidung = $id_user";
            $chucnang_users = DB::select($sql_chucnang_user);


            if ($chucnang_users) {
                foreach ($menus as $key_manhinh => $manhinh) {
                    foreach ($all_chucnang as $key_chucnang => $chucnang) {
                        $ten_loaichucnang = $chucnang->danhmuc_chucnang_id;
                        $manhinh->$ten_loaichucnang = 0;
                    }
                    foreach ($chucnang_users as $key_user => $chucnang_user) {
                        if ($manhinh->IDMN == $chucnang_user->id_manhinh) {
                            foreach ($all_chucnang as $key_chucnang => $chucnang) {
                                $ten_loaichucnang = $chucnang->danhmuc_chucnang_id;
                                if ($chucnang_user->id_chucnang == $chucnang->id) {
                                    $manhinh->$ten_loaichucnang = $chucnang->id;
                                }
                            }
                        }
                    }
                }
            } else {
                foreach ($menus as $key_manhinh => $manhinh) {
                    foreach ($all_chucnang as $key_chucnang => $chucnang) {
                        $ten_loaichucnang = $chucnang->danhmuc_chucnang_id;
                        $manhinh->$ten_loaichucnang = 0;
                    }
                }
            }

            $this->dataUser_Menus_Roles($menus, 0, 0, "", $result);

            return $res = array(
                'body' => $result,
                'head' => $all_chucnang,
                'id_user' => $id_user,
            );
        }
    }


    function dataUser_Menus_Roles($menus, $parent_id = 0, $level = 0, $char = "", &$result)
    {
        $i = 1;
        foreach ($menus as $key => $menu) {
            if ($menu->parent_id === $parent_id) {
                $menu->name = $char . '&nbsp;<i style = "color:#007bff" class="fa-solid ' . $menu->icon . '"></i>&nbsp;&nbsp;<strong>' . $i . '</strong>.&nbsp;' . $menu->name;
                $result[] = $menu;
                unset($menus[$key]);
                $i++;
                self::dataUser_Menus_Roles($menus, $menu->IDMN, 1 + $level, $char . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", $result);
            }
        }
    }

    function capnhatquyen(Request $request)
    {
        $quyen = $request->input('quyen');
        $id_user = $request->input('id_user');
        $id_manhinh = $request->input('id_manhinh');
        $id_chucnang = $request->input('id_chucnang');
        $hasrole = $request->input('hasrole');
        $tmp = 0;
        $check_manhinh_chucnang = DB::table('danhmuc_manhinh_chucnang')
            ->where('id_manhinh', $id_manhinh)
            ->where('id_chucnang', $id_chucnang)->get();


        if (count($check_manhinh_chucnang) >= 1) {


            DB::table('l_phanquyen')
                ->where('id_manhinh', $id_manhinh)
                ->where('id_nguoidung', $id_user)
                ->delete();


            $manhinh = DB::table('l_cmc_mnu')
                ->select('parent_id')
                ->where('IDMN', $id_manhinh)
                ->get();
            $sql_manhinhuser = "SELECT * FROM `l_phanquyen` WHERE id_nguoidung = $id_user";
            $manhinhuser = DB::select($sql_manhinhuser);
            $parent_id_chung = 0;
            foreach ($manhinhuser as $key => $value) {
                $sql_manhinhusercon = "SELECT * FROM `l_cmc_mnu` WHERE IDMN = $value->id_manhinh";
                $manhinhusercon = DB::select($sql_manhinhusercon);
                if ($manhinhusercon[0]->parent_id == $manhinh[0]->parent_id) {
                    $parent_id_chung += 1;
                }
            }

            if ($parent_id_chung >= 1) {
            } else {
                DB::table('l_phanquyen')
                    ->where('id_manhinh', $manhinh[0]->parent_id)
                    ->where('id_nguoidung', $id_user)
                    ->delete();
            }
            $k = 0;
            foreach ($quyen as $key => $value) {
                if ($value[0] > 1) {
                    $k++;
                }
            }
            if ($quyen[0] == 0 && $k == 0) {
                $sql_manhinhuser_con = "SELECT * FROM `l_cmc_mnu` WHERE parent_id = $id_manhinh";
                $manhinhuser_con = DB::select($sql_manhinhuser_con);

                if (count($manhinhuser_con) > 0) {
                    foreach ($manhinhuser_con as $key => $manhinhcon) {
                        foreach ($manhinhuser as $key => $manhinhuser_con) {
                            if ($manhinhcon->IDMN == $manhinhuser_con->id_manhinh && $manhinhuser_con->id_nguoidung == $id_user) {
                                DB::table('l_phanquyen')
                                    ->where('id_manhinh', $manhinhcon->IDMN)
                                    ->where('id_nguoidung', $id_user)
                                    ->delete();
                            }
                        }
                    }
                    return 1;
                } else {
                    return 1;
                }
            }
            if ($quyen[0][0] == 1 && $k > 0) {
                $sql_manhinhcha = "SELECT * FROM `l_phanquyen` WHERE id_manhinh =" . $manhinh[0]->parent_id . " AND id_nguoidung = $id_user";
                $manhinhcha = DB::select($sql_manhinhcha);
                if (count($manhinhcha) <= 0) {
                    DB::table('l_phanquyen')->insert([
                        'id_nguoidung' =>  $id_user,
                        'id_manhinh' => $manhinh[0]->parent_id,
                        'id_chucnang' => 1,
                    ]);
                }


                foreach ($quyen as $key => $value) {
                    if ($value[0] > 0) {
                        DB::table('l_phanquyen')->insert([
                            'id_nguoidung' =>  $id_user,
                            'id_manhinh' => $id_manhinh,
                            'id_chucnang' =>  $value[0],
                        ]);
                    }
                }
            }
            if ($quyen[0][0] == 1 && $k == 0) {
                $sql_manhinhcha = "SELECT * FROM `l_phanquyen` WHERE id_manhinh =" . $manhinh[0]->parent_id . " AND id_nguoidung = $id_user";
                $manhinhcha = DB::select($sql_manhinhcha);
                if (count($manhinhcha) <= 0) {
                    DB::table('l_phanquyen')->insert([
                        'id_nguoidung' =>  $id_user,
                        'id_manhinh' => $manhinh[0]->parent_id,
                        'id_chucnang' => 1,
                    ]);
                }
                DB::table('l_phanquyen')->insert([
                    'id_nguoidung' =>  $id_user,
                    'id_manhinh' => $id_manhinh,
                    'id_chucnang' =>  1,
                ]);
            }
            if ($quyen[0][0] == 0 && $k > 0 && $hasrole[0] == 0) {
                $sql_manhinhcha = "SELECT * FROM `l_phanquyen` WHERE id_manhinh =" . $manhinh[0]->parent_id . " AND id_nguoidung = $id_user";
                $manhinhcha = DB::select($sql_manhinhcha);
                if (count($manhinhcha) <= 0) {
                    DB::table('l_phanquyen')->insert([
                        'id_nguoidung' =>  $id_user,
                        'id_manhinh' => $manhinh[0]->parent_id,
                        'id_chucnang' => 1,
                    ]);
                }
                DB::table('l_phanquyen')->insert([
                    'id_nguoidung' =>  $id_user,
                    'id_manhinh' => $id_manhinh,
                    'id_chucnang' =>  1,
                ]);
                foreach ($quyen as $key => $value) {
                    if ($value[0] > 1) {
                        DB::table('l_phanquyen')->insert([
                            'id_nguoidung' =>  $id_user,
                            'id_manhinh' => $id_manhinh,
                            'id_chucnang' =>  $value[0],
                        ]);
                    }
                }
            }
            if ($quyen[0][0] == 0 && $k > 0 && $hasrole[0] == 1) {
                $sql_manhinhuser_con = "SELECT * FROM `l_cmc_mnu` WHERE parent_id = $id_manhinh";
                $manhinhuser_con = DB::select($sql_manhinhuser_con);
                if (count($manhinhuser_con) > 0) {
                    foreach ($manhinhuser_con as $key => $manhinhcon) {
                        foreach ($manhinhuser as $key => $manhinhuser_con) {
                            if ($manhinhcon->IDMN == $manhinhuser_con->id_manhinh && $manhinhuser_con->id_nguoidung == $id_user) {
                                DB::table('l_phanquyen')
                                    ->where('id_manhinh', $manhinhcon->IDMN)
                                    ->where('id_nguoidung', $id_user)
                                    ->delete();
                            }
                        }
                    }
                    return 1;
                } else {
                    return 1;
                }
            }
            $ketqua = DB::table('l_phanquyen')
                ->where('id_manhinh', $id_manhinh)
                ->where('id_nguoidung', $id_user)
                ->get();

            $hasroles = DB::table('l_phanquyen')
                ->where('id_manhinh', $id_manhinh)
                ->where('id_nguoidung', $id_user)
                ->where('id_chucnang', 1)
                ->get();

            if (count($ketqua) >= 1) {
                return 1;
            }
        } else {
            $result = 0;
        }
        return $result;
    }
}
