<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    function loadMenu()
    {
        return view('main');
    }
    function loadpage($idmn, Request $request)
    {
        $page = DB::table('l_cmc_mnu')->where('IDMN', $idmn)->get();
        return $page;
    }
    // 
    function datasidebar($menus, $parent_id = 0, $level = 0, &$html)
    {
        foreach ($menus as $key => $menu) {

            foreach ($menus as $key => $menu) {
                if ($menu->parent_id === $parent_id) {
                    $menu->level = $level;
                    if ($menu->level == 0) {
                        $html .= '<li class = "nav-item">';
                        $html .= '<a class="nav-link">';
                        $html .= '<i class="nav-icon ' . $menu->icon . '" style="font-size: 14px;color:white"></i>';
                        $html .=  '<p>' . $menu->name;
                        $html .= '<i class="fas fa-angle-left right"></i>';
                        $html .= '</p>';
                        $html .= '</a>';
                    } else {
                        $html .= "<ul class='nav nav-treeview'>";
                        $html .= '<li class="nav-item">';
                        $html .= "<a  onclick = 'loadpage(" . $menu->IDMN . ")' class='nav-link'>";
                        $html .= '&nbsp;&nbsp&nbsp;<i class="nav-icon ' . $menu->icon . '" style="font-size: 14px;color:white"></i>';
                        $html .= '<p>' . $menu->name . '</p>';
                        $html .= '</a>';
                        $html .= '</li>';
                    }
                    unset($menus[$key]);
                    self::datasidebar($menus, $menu->IDMN, $level + 1, $html);
                    $html .= '</li>';
                    $html .= "</ul>";
                }
            }
        }
    }
    public function sidebar()
    {
        $admin = DB::table('accounts')->where("id", Auth::guard('loginbygoogle')->id())->get();
        if (count($admin) > 0) {
            if ($admin[0]->admin == 1) {
                $tmp = "SELECT * FROM l_cmc_mnu ORDER BY stt asc";
            } else {
                $tmp = "SELECT * FROM l_cmc_mnu WHERE idmn IN ( SELECT id_manhinh FROM l_phanquyen WHERE id_nguoidung  =" . Auth::guard('loginbygoogle')->id() . ")ORDER BY stt asc";
            }
        } else {
            return 0;
        }

        $menus = DB::select($tmp);
        if (count($menus) == 0) {
            return 1;
        }
        $this->datasidebar($menus, 0, 0, $result);
        echo $result;
    }
    function loadname()
    {
        $name = DB::table('accounts')->where("id", Auth::guard('loginbygoogle')->id())->get();
        return $name[0]->name;
    }

   
}
