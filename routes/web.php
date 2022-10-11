<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\HeaderPage;
use App\Http\Controllers\Administrator;

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

Route::get('/getNavMenu', [HeaderPage::class, 'navMenu']);

Route::get('/admin', [Administrator::class , 'index']);
Route::get('/admin/menu/navigation', [Administrator::class , 'navigation']);
Route::get('/admin/menu/hero', [Administrator::class , 'hero']);
Route::get('/admin/menu/about', [Administrator::class , 'about']);
Route::get('/admin/menu/portfolio', [Administrator::class , 'portfolio']);
Route::get('/admin/menu/resume', [Administrator::class , 'resume']);
