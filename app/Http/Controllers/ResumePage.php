<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumePage extends Controller
{
    public function resumeAttr()
    {
        $title_1            = DB::table('t_resume_attributes')->where('attribute_name', 'title_1')->first()->attribute_value;
        $desc_1             = DB::table('t_resume_attributes')->where('attribute_name', 'desc_1')->first()->attribute_value;
        $title_2            = DB::table('t_resume_attributes')->where('attribute_name', 'title_2')->first()->attribute_value;
        $desc_2             = DB::table('t_resume_attributes')->where('attribute_name', 'desc_2')->first()->attribute_value;
        $year_1             = DB::table('t_resume_attributes')->where('attribute_name', 'year_1')->get();
        $status_1           = DB::table('t_resume_attributes')->where('attribute_name', 'status_1')->get();
        $desc_status_1      = DB::table('t_resume_attributes')->where('attribute_name', 'desc_status_1')->get();
        $year_2             = DB::table('t_resume_attributes')->where('attribute_name', 'year_2')->get();
        $status_2           = DB::table('t_resume_attributes')->where('attribute_name', 'status_2')->get();
        $sec_status_2           = DB::table('t_resume_attributes')->where('attribute_name', 'sec_status_2')->get();
        $desc_status_2      = DB::table('t_resume_attributes')->where('attribute_name', 'desc_status_2')->get();

        return (object) array(
            'title_1'       => $title_1,
            'title_2'       => $title_2,
            'desc_1'        => $desc_1,
            'desc_2'        => $desc_2,
            'year_1'        => $year_1,
            'year_2'        => $year_2,
            'status_1'      => $status_1,
            'status_2'      => $status_2,
            'sec_status_2'  => $sec_status_2,
            'desc_status_1' => $desc_status_1,
            'desc_status_2' => $desc_status_2,
        );
    }
}
