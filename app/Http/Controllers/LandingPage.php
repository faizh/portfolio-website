<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HeaderPage;

class LandingPage extends Controller
{
    public function index()
    {   
        $navMenus = HeaderPage::navMenus();

        $data    = array(
            'nav_menus'  => $navMenus
        );

        return view('landing-page', $data);
    }
}
