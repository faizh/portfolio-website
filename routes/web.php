<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\HeaderPage;
use App\Http\Controllers\Administrator;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ResumeController;

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
Route::get('/admin/menu/navigation', [Administrator::class , 'navigation'])->name('navigations');
Route::post('/admin/menu/navigation', [Administrator::class , 'createNavigation']);
Route::post('/admin/menu/navigation/edit', [Administrator::class , 'editNavigation']);
Route::post('/admin/menu/navigation/details', [Administrator::class , 'getNavDetails'])->name('navigationDetails.post');
Route::get('/admin/menu/navigation/delete/{id}', [Administrator::class , 'deleteNavigation'])->name('navigation.delete');

/* Admin "Hero" Routing */
Route::get('/admin/menu/hero', [HeroController::class, 'index'])->name('admin.hero.all');
Route::get('/admin/menu/hero/edit/{attrId}', [HeroController::class, 'show'])->name('admin.hero.show');
Route::post('/admin/menu/hero/update/{attrId}', [HeroController::class, 'update'])->name('admin.hero.update');
Route::post('/admin/menu/hero/create', [HeroController::class, 'store'])->name('admin.hero.create');
Route::get('/admin/menu/hero/delete/{id}', [HeroController::class, 'destroy'])->name('admin.hero.delete');
/* End Admin "Hero" Routing */

/* Admin "About" Routing */
Route::get('/admin/menu/about', [AboutController::class, 'index'])->name('admin.about.all');
Route::get('/admin/menu/about/edit/{attrId}', [AboutController::class, 'show'])->name('admin.about.show');
Route::post('/admin/menu/about/update/{attrId}', [AboutController::class, 'update'])->name('admin.about.update');
Route::post('/admin/menu/about/create', [AboutController::class, 'store'])->name('admin.about.create');
Route::get('/admin/menu/about/delete/{id}', [AboutController::class, 'destroy'])->name('admin.about.delete');
/* Admin "About" Routing */

/* Admin "Portfolio" Routing */
Route::get('/admin/menu/portfolio', [PortfolioController::class, 'index'])->name('admin.portfolio.all');
Route::get('/admin/menu/portfolio/edit/{attrId}', [PortfolioController::class, 'show'])->name('admin.portfolio.show');
Route::post('/admin/menu/portfolio/update/{attrId}', [PortfolioController::class, 'update'])->name('admin.portfolio.update');
Route::post('/admin/menu/portfolio/create', [PortfolioController::class, 'store'])->name('admin.portfolio.create');
Route::get('/admin/menu/portfolio/delete/{id}', [PortfolioController::class, 'destroy'])->name('admin.portfolio.delete');
/* Admin "Portfolio" Routing */

/* Admin "Resume" Routing */
Route::get('/admin/menu/resume', [ResumeController::class, 'index'])->name('admin.resume.all');
Route::get('/admin/menu/resume/edit/{attrId}', [ResumeController::class, 'show'])->name('admin.resume.show');
Route::post('/admin/menu/resume/update/{attrId}', [ResumeController::class, 'update'])->name('admin.resume.update');
Route::post('/admin/menu/resume/create', [ResumeController::class, 'store'])->name('admin.resume.create');
Route::get('/admin/menu/resume/delete/{id}', [ResumeController::class, 'destroy'])->name('admin.resume.delete');
/* Admin "Resume" Routing */

// Route::get('/admin/menu/hero', [Administrator::class , 'hero']);
// Route::get('/admin/menu/about', [Administrator::class , 'about']);
// Route::get('/admin/menu/portfolio', [Administrator::class , 'portfolio']);
// Route::get('/admin/menu/resume', [Administrator::class , 'resume']);
