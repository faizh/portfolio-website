<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Administrator extends Controller
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function navigation()
    {
        $data = DB::table('t_nav_menu')->get();

        return view('admin/pages/navigation', compact('data'));
    }

    public function hero()
    {
        echo "hero menu";
    }

    public function about()
    {
        echo "about";
    }
}
