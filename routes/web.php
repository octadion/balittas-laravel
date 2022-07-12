<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('front.home');
// });
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/sejarah',[HomeController::class,'sejarah'])->name('sejarah');
Route::prefix('tentang')->group( function(){
    Route::get('/sejarah',[HomeController::class,'sejarah'])->name('sejarah');
});

Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('index');
// Route::get('/auth/login',[LoginController::class,'showLoginForm'])->name('showLoginForm');