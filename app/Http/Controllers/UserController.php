<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    public function index(){
        return view('user.index');
        // $user = DB::table('thongtinsinhvien')
        // ->where('id_account', 1)
        // ->get();
        // // Trả về view 'user.index' với dữ liệu user
        // return view('user.index')->with('user', $user)
        // ->with('sidebar', view('user.sidebar')->with('user', $user)->render());
                
                
    }
    // public function sidebar(){
    //     $user = DB::table('thongtinsinhvien')
    //     ->where('id_account',1)
    //     ->get();
    //     return view('user.sidebar',['user'=>$user]);

    // }
    
    

    public function main(){
        return view('layouts.main');
    }

    public function contact(){
        return redirect()->away('https://pdaotao.ctuet.edu.vn/');
    }
   
    public function recents(){
        return view('user.recents');
    }
  
}