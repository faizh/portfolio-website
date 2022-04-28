<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutPage extends Controller
{
    public function getAttributesRow($attribute_name)
    {
        $data = DB::table('t_about_attributes')->where('attribute_name', $attribute_name)->first();

        return $data->attribute_value;
    }

    public function getAttributesResult($attribute_name)
    {
        $data = DB::table('t_about_attributes')->where('attribute_name', $attribute_name)->get();

        return $data;
    }
}
