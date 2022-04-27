<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeaderPage extends Controller
{
    public function navMenus()
    {
        $navMenus = DB::table('t_nav_menu')->get();

        return $navMenus;
    }
}
