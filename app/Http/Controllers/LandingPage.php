<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HeaderPage;
use App\Http\Controllers\HeroPage;

class LandingPage extends Controller
{
    public function index()
    {   
        $navMenus = HeaderPage::navMenus();
        $heroAttr = HeroPage::heroAttr();

        $data    = array(
            'nav_menus'     => $navMenus,
            "hero_attr"     => $heroAttr
        );

        return view('landing-page', $data);
    }
}
