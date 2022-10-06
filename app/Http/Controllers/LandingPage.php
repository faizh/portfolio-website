<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HeaderPage;
use App\Http\Controllers\HeroPage;
use App\Http\Controllers\AboutPage;
use App\Http\Controllers\PortfolioPage;

class LandingPage extends Controller
{
    public function index()
    {   
        $navMenus       = HeaderPage::navMenus();
        $heroAttr       = HeroPage::heroAttr();
        $aboutAttr      = AboutPage::aboutAttr();
        $portfolioAttr  = PortfolioPage::portfolioAttr();

        $data    = array(
            'nav_menus'         => $navMenus,
            "hero_attr"         => $heroAttr,
            "about_attr"        => $aboutAttr,
            'portfolio_attr'    => $portfolioAttr
        );

        return view('landing-page', $data);
    }
}
