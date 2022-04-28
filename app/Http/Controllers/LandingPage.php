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

        // resume page
        $titleResume1     = ResumePage::getAttributesRow('title_1');
        $descResume1      = ResumePage::getAttributesRow('desc_1');
        $titleResume2     = ResumePage::getAttributesRow('title_2');
        $descResume2      = ResumePage::getAttributesRow('desc_2');

        $year1          = ResumePage::getAttributesResult('year_1');
        $status1        = ResumePage::getAttributesResult('status_1');
        $descStatus1    = ResumePage::getAttributesResult('desc_status_1');
        $arrIndex       = array('year', 'status_name', 'desc_status');
        $resumeData1    = $this->mergeArrays($year1, $status1, $descStatus1, $arrIndex);
        
        $year2          = ResumePage::getAttributesResult('year_2');
        $status2        = ResumePage::getAttributesResult('status_2');
        $secStatus2     = ResumePage::getAttributesResult('sec_status_2');
        $descStatus2    = ResumePage::getAttributesResult('desc_status_2');
        $arrIndex       = array('year', 'status_name', 'sec_status_name', 'desc_status');
        $arrData        = array($year2, $status2, $secStatus2, $descStatus2);
        $resumeData2    = $this->mergeArrays2($arrData, $arrIndex);


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
            'portfolio_data'    => $portfolioData,
            'resume_title_1'    => $titleResume1,
            'resume_desc_1'     => $descResume1,
            'resume_title_2'    => $titleResume2,
            'resume_desc_2'     => $descResume2,
            'resume_data_1'     => $resumeData1,
            'resume_data_2'     => $resumeData2
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

    public function mergeArrays2($arr=array(), $arrIndex=array())
    {
        $max_length = 0;
        foreach ($arr as $key ) {
            if ($max_length < count($key)) {
                $max_length = count($key);
            }
        }

        $test = array();
        $temp_text = "";
        for ($j=0; $j < $max_length; $j++) { 
            for ($i=0; $i < count($arr); $i++) { 
                $temp_result[] =  array(
                    $arrIndex[$i] => $arr[$i][$j]->attribute_value
                );

                if ($i != 0) {
                    $arr_result = array_merge($temp_result[$i], $arr_result);
                }else{
                    $arr_result = $temp_result[$i];
                }

                if (($i + 1) % count($arrIndex) == 0) {
                    $arrResult[] =  $arr_result;
                    $temp_result = array();
                    $arr_result = array();
                }
            }
        }

        return $arrResult;
    }
}
