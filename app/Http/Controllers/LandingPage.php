<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HeaderPage;
use App\Http\Controllers\HeroPage;
use App\Http\Controllers\AboutPage;
use App\Http\Controllers\PortfolioPage;
use App\Http\Controllers\ResumePage;

class LandingPage extends Controller
{
    public function index()
    {   
        $navMenus       = new HeaderPage();
        $navMenus       = $navMenus->navMenus();

        $heroAttr       = new HeroPage();
        $heroAttr       = $heroAttr->heroAttr();

        $aboutAttr      = new AboutPage();
        $aboutAttr      = $aboutAttr->aboutAttr();

        $portfolioAttr  = new PortfolioPage();
        $portfolioAttr  = $portfolioAttr->portfolioAttr();

        $resumeAttr     = new ResumePage();
        $resumeAttr     = $resumeAttr->resumeAttr();

        $data    = array(
            'nav_menus'         => $navMenus,
            "hero_attr"         => $heroAttr,
            "about_attr"        => $aboutAttr,
            'portfolio_attr'    => $portfolioAttr,
            'resume_attr'       => $resumeAttr
        );

        return view('landing-page', $data);
    }
}
