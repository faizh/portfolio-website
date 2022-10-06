<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutPage extends Controller
{
    public function aboutAttr()
    {
        $title = DB::table('t_about_attributes')->where('attribute_name', 'title')->first()->attribute_value;
        $header_1 = DB::table('t_about_attributes')->where('attribute_name', 'header_1')->first()->attribute_value;
        $header_2 = DB::table('t_about_attributes')->where('attribute_name', 'header_2')->first()->attribute_value;
        $desc_1 = DB::table('t_about_attributes')->where('attribute_name', 'desc_1')->first()->attribute_value;
        $desc_2 = DB::table('t_about_attributes')->where('attribute_name', 'desc_2')->first()->attribute_value;
        $socmed_src = DB::table('t_about_attributes')->where('attribute_name', 'socmed_src')->get();
        $svg_src = DB::table('t_about_attributes')->where('attribute_name', 'svg_src')->get();
        $socmed_name = DB::table('t_about_attributes')->where('attribute_name', 'socmed_name')->get();

        return (object) array(
            'title'         => $title,
            'header_1'      => $header_1,
            'header_2'      => $header_2,
            'desc_1'        => $desc_1,
            'desc_2'        => $desc_2,
            'socmed_src'    => $socmed_src,
            'svg_src'       => $svg_src,
            'socmed_name'   => $socmed_name,
        );
    }
}
