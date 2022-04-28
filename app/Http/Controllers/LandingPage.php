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

        // about page
        $titleAbout     = AboutPage::getAttributesRow('title');
        $header1        = AboutPage::getAttributesRow('header_1');
        $desc1          = AboutPage::getAttributesRow('desc_1');
        $header2        = AboutPage::getAttributesRow('header_2');
        $desc2          = AboutPage::getAttributesRow('desc_2');
        $socmedName     = AboutPage::getAttributesResult('socmed_name');
        $socmedSrc      = AboutPage::getAttributesResult('socmed_src');
        $svgs           = AboutPage::getAttributesResult('svg_src');
        $arrIndex       = array('socmed_name', 'socmed_src', 'svg');
        $socmedData     = $this->mergeArrays($socmedName, $socmedSrc, $svgs, $arrIndex);

        // portfolio page
        $titlePortfolio     = PortfolioPage::getAttributesRow('title');
        $descPortfolio      = PortfolioPage::getAttributesRow('desc');
        $portfolioNames     = PortfolioPage::getAttributesResult('portfolio_name');
        $portfolioDescs     = PortfolioPage::getAttributesResult('portfolio_desc');
        $portfolioSrcs      = PortfolioPage::getAttributesResult('portfolio_src');
        $arrIndex           = array('portfolio_name', 'portfolio_desc', 'portfolio_src');
        $portfolioData      = $this->mergeArrays($portfolioNames, $portfolioDescs, $portfolioSrcs, $arrIndex);

        $data    = array(
            'nav_menus'         => $navMenus,
            'welcome_text'      => $welcomeText,
            'greeting_text'     => $greetingText,
            'dynamic_text'      => $dynamicText,
            'motto'             => $motto,
            'resume_text'       => $resumeText,
            'resume_src'        => $resumeSrc,
            'photo_src'         => $photoSrc,
            'about_title'       => $titleAbout,
            'header_1'          => $header1,
            'desc_1'            => $desc1,
            'header_2'          => $header2,
            'desc_2'            => $desc2,
            'socmed_data'       => $socmedData,
            'portfolio_title'   => $titlePortfolio,
            'portfolio_desc'    => $descPortfolio,
            'portfolio_data'    => $portfolioData
        );

        return view('landing-page', $data);
    }

    public function mergeArrays($arr1=array(), $arr2=array(), $arr3=array(), $arrIndex=array())
    {
        $arr1_length    = count($arr2);
        $arr2_length    = count($arr3);

        $max_length     = $arr1_length;

        if ($arr1_length < $arr2_length) {
            $max_length = $arr2_length;
        }

        $arr_result = array();
        for ($i=0; $i < $max_length; $i++) { 
            $arr_result[] = (object) array(
                $arrIndex[0]    => $arr1[$i]->attribute_value,
                $arrIndex[1]    => $arr2[$i]->attribute_value,
                $arrIndex[2]    => $arr3[$i]->attribute_value
            );
        }

        return (object) $arr_result;
    }
}
