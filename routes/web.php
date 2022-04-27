<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\HeaderPage;
use App\Http\Controllers\HeroPage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingPage::class, 'index']);

Route::get('/getAttributes', [HeroPage::class, 'getWelcomeText']);