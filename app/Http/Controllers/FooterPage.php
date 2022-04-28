<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FooterPage extends Controller
{
    public function getAttributesRow($attribute_name)
    {
        $data = DB::table('t_footer_attributes')->where('attribute_name', $attribute_name)->first();

        return $data->attribute_value;
    }
}
