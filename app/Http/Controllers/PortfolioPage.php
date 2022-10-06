<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioPage extends Controller
{
    public function portfolioAttr()
    {
        $title          = DB::table('t_portfolio_attributes')->where('attribute_name', 'title')->first()->attribute_value;
        $desc           = DB::table('t_portfolio_attributes')->where('attribute_name', 'desc')->first()->attribute_value;
        $portfolio_name = DB::table('t_portfolio_attributes')->where('attribute_name', 'portfolio_name')->get();
        $portfolio_desc = DB::table('t_portfolio_attributes')->where('attribute_name', 'portfolio_desc')->get();
        $portfolio_src  = DB::table('t_portfolio_attributes')->where('attribute_name', 'portfolio_src')->get();
        
        return (object) array(
            'title'             => $title,
            'desc'              => $desc,
            'portfolio_name'     => $portfolio_name,
            'portfolio_desc'    => $portfolio_desc,
            'portfolio_src'     => $portfolio_src
        );

    }
}
