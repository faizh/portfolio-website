<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeroPage extends Controller
{
    public function heroAttr()
    {
        $welcomeText    = DB::table('t_hero_attributes')->where('attribute_name', 'welcome_text')->first()->attribute_value;
        $greetingText   = DB::table('t_hero_attributes')->where('attribute_name', 'greeting_text')->first()->attribute_value;
        $dynamicTexts   = DB::table('t_hero_attributes')->where('attribute_name', 'dynamic_text')->get();
        $motto          = DB::table('t_hero_attributes')->where('attribute_name', 'motto')->first()->attribute_value;
        $resumeText     = DB::table('t_hero_attributes')->where('attribute_name', 'resume_text')->first()->attribute_value;
        $resumeSrc      = DB::table('t_hero_attributes')->where('attribute_name', 'resume_src')->first()->attribute_value;
        $photoSrc       = DB::table('t_hero_attributes')->where('attribute_name', 'photo_src')->first()->attribute_value;
        
        return array(
            "welcome_text"      => $welcomeText,
            "greeting_text"     => $greetingText,
            "dynamic_texts"     => $dynamicTexts,
            "motto"             => $motto,
            "resume_text"       => $resumeText,
            "resume_src"        => $resumeSrc,
            "photo_src"         => $photoSrc
        );
    }
}
