<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    function login()
    {
        return view('login.loginUser');
    }
    function dangnhap(Request $a)
    {
        $validator = Validator::make(
            $a->all(),
            [
                'email'     => 'email|required',
                'pass'      => 'required|alpha_dash|min:1'
            ],
            [
                'email.email'         => 'Email chưa đúng định dạng',
                'email.required'      => 'Vui lòng điền email',
                'pass.required'   => 'Vui lòng điền Mật khẩu',
                'pass.alpha_dash' => 'Mật khẩu chỉ gồm chữ cái và chữ số',
                'pass.min'        => 'Mật khẩu phải từ 8 ký tự trở lên',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors());
        } else {
            if (Auth::guard('user')->attempt(
                [
                    'gmail' => $a->input('email'),
                    'password' =>  $a->input('pass'),
                ]
            )) {
                return  1;
            } else {
                return 0;
            }
        }
    }
}
