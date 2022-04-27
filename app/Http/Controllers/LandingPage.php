<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HeaderPage;
use App\Http\Controllers\HeroPage;

class LandingPage extends Controller
{
    public function index()
    {   
        // header page
        $navMenus       = HeaderPage::navMenus();

        // hero page
        $welcomeText    = HeroPage::getAttributesRow('welcome_text');
        $greetingText   = HeroPage::getAttributesRow('greeting_text');
        $dynamicText    = HeroPage::getAttributesResult('dynamic_text');
        $motto          = HeroPage::getAttributesRow('motto');
        $resumeText     = HeroPage::getAttributesRow('resume_text');
        $resumeSrc      = HeroPage::getAttributesRow('resume_src');
        $photoSrc       = HeroPage::getAttributesRow('photo_src');

        $data    = array(
            'nav_menus'         => $navMenus,
            'welcome_text'      => $welcomeText,
            'greeting_text'     => $greetingText,
            'dynamic_text'      => $dynamicText,
            'motto'             => $motto,
            'resume_text'       => $resumeText,
            'resume_src'        => $resumeSrc,
            'photo_src'         => $photoSrc
        );

        return view('landing-page', $data);
    }
}
