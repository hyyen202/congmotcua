<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('user.index');
    }
    public function logout(){
        return view('login.loginUser');
    }
    public function contact(){
        return redirect('https://pdaotao.ctuet.edu.vn/');
    }
    
}
