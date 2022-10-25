<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    public $timestamps      = false;
    protected $table        = "t_about_attributes";
    protected $primaryKey   = "id";
}
