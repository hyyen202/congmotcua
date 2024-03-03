<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('user.index');
    }
    public function main(){
        return view('layouts.main');
    }

    public function contact(){
        return redirect()->away('https://pdaotao.ctuet.edu.vn/');
    }
    public function register()
    {
        return view('register.index');
       
    }
    public function recents(){
        return view('user.recents');
    }
    public function profile(){
        return redirect()->away('https://sinhvien.ctuet.edu.vn/sinh-vien-dang-nhap.html');
    }
}