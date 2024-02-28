<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request){
        return view('user.index');
    }
    public function main(){
        return view('layouts.main');
    }

    public function contact(){
        return redirect()->away('https://pdaotao.ctuet.edu.vn/');
    }
    public function register(Request $request){
       if(($request->ajax())){
        return view('register.index');
       }else{
        return view('/');}
    }
    public function recents(Request $request){
       if($request->ajax()){
        return view('user.recents');
       }else{
        return view('/');}
    }
}
