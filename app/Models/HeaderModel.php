<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderModel extends Model
{
    use HasFactory;

    public function getAllNavMenu()
    {
        $results = DB::select('SELECT * FROM t_nav_menu');

        return $results;
    }
}
