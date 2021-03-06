<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Models\Role;
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

// Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('index');
// Route::get('/auth/login',[LoginController::class,'showLoginForm'])->name('showLoginForm');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' =>'role:admin'], function(){
        Route::get('/admin/dashboard', [DashboardController::class,'index'])->name('index');
        Route::resource('/admin/kategori',CategoryController::class);
        Route::post('/admin/kategori/store', [CategoryController::class,'store'])->name('store');
        Route::post('/admin/kategori/update', [CategoryController::class,'update'])->name('update');
        Route::post('/admin/kategori/showUpdate', [CategoryController::class,'showUpdate'])->name('showUpdate');
        Route::post('/admin/kategori/delete', [CategoryController::class,'delete'])->name('delete');
        Route::resource('/admin/post',PostController::class);
        Route::get('/admin/post/create', [PostController::class,'create'])->name('create');
        Route::post('/admin/post/store', [PostController::class,'store'])->name('store');
        Route::post('/admin/post/content_upload', [PostController::class,'content_upload'])->name('content_upload');
        Route::post('/admin/post/update/{id}', [PostController::class,'update'])->name('update');
        Route::post('/admin/post/delete/{id}', [PostController::class,'delete'])->name('delete');
    });
    Route::group(['middleware' =>'role:user'], function(){
        Route::get('/home',[HomeController::class,'index'])->name('home');
    });
    Route::group(['middleware' =>'role:pegawai'], function(){

    });
});


