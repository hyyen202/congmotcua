<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class LoginbygoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
    //  * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
    //  * @return void
     */
    public function handleGoogleCallback()
    {
        try { 
            $user = Socialite::driver('google')->user();
            $finduser = Account::where('google_id', $user->id)->first();
            if ($finduser) { 
                Auth::guard('loginbygoogle')->login($finduser);
                return redirect()->intended('/'); 
            } else {
                $newUserId = DB::table('accounts')->insert([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => Hash::make('1111aaaa')
                ]);
                $finduser = Account::where('google_id', $user->id)->first();
                Auth::guard('loginbygoogle')->login($finduser);
                return redirect()->intended('/'); 
            }
        } catch (Exception $e) {
            return redirect()->intended('/login');
        }
    }
    function dangnhap(Request $a)
    {
        $validator = Validator::make(
            $a->all(),
            [
                'email'     => 'required|email',
                'pass'      => 'required|alpha_dash|min:8'
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
            if (Auth::guard('loginbygoogle')->attempt(
                [
                    'email' => $a->input('email'),
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
