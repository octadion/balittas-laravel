<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\VarietyController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\PublicInfoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\KomoditasController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\UserController;
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
Route::get('/listnews',[HomeController::class,'listnews'])->name('listnews');
Route::get('/layanan',[HomeController::class,'layanan'])->name('layanan');
Route::get('/berita',[HomeController::class,'berita'])->name('berita');
 Route::resource('/home',HomeController::class);

Route::prefix('tentang')->group( function(){
    Route::get('/sejarah',[HomeController::class,'sejarah'])->name('sejarah');
    Route::get('/listnews',[HomeController::class,'listnews'])->name('listnews');
    Route::get('/organisasi',[HomeController::class,'organisasi'])->name('organisasi');
    Route::get('/visidanmisi',[HomeController::class,'visidanmisi'])->name('visidanmisi');
    Route::get('/kebijakanmutu',[HomeController::class,'kebijakanmutu'])->name('kebijakanmutu');
    Route::get('/sdm',[HomeController::class,'sdm'])->name('sdm');
    Route::get('/berita/{slug}',[HomeController::class,'berita'])->name('berita');
    Route::get('/layanan/{id}',[HomeController::class,'layanan'])->name('layanan');
    Route::get('/katapimpinan',[HomeController::class,'katapimpinan'])->name('katapimpinan');
});
Route::prefix('publikasi')->group( function(){
    Route::get('/prosiding',[PublikasiController::class,'prosiding'])->name('prosiding');
    Route::get('/monograf-buku',[PublikasiController::class,'monografbuku'])->name('monograf-buku');
    Route::get('/info-teknologi',[PublikasiController::class,'infoteknologi'])->name('info-teknologi');
    Route::get('/leaflet',[PublikasiController::class,'leaflet'])->name('leaflet');
    Route::get('/jurnalpenelitian',[PublikasiController::class,'jurnalpenelitian'])->name('jurnalpenelitian');
    Route::get('/lainlain',[PublikasiController::class,'lainlain'])->name('lainlain');
});
Route::prefix('komoditas')->group( function(){
    Route::get('/pemanis',[KomoditasController::class,'pemanis'])->name('pemanis');
    Route::get('/tembakau',[KomoditasController::class,'tembakau'])->name('tembakau');
    Route::get('/seratbatangdaun',[KomoditasController::class,'seratbatangdaun'])->name('seratbatangdaun');
    Route::get('/seratbuah',[KomoditasController::class,'seratbuah'])->name('seratbuah');
    Route::get('/tanamanpenghasilserat',[KomoditasController::class,'tanamanpenghasilserat'])->name('tanamanpenghasilserat');
});
Route::prefix('produk')->group( function(){
    Route::get('/varietasunggul',[ProdukController::class,'varietasunggul'])->name('varietasunggul');
    Route::get('/hakkekayaan',[ProdukController::class,'hakkekayaan'])->name('hakkekayaan');
});
Route::prefix('informasi-publik')->group( function(){
    Route::get('/penghargaan',[InformasiPublikController::class,'penghargaan'])->name('penghargaan');
    Route::get('/indexkepuasan',[InformasiPublikController::class,'indexkepuasan'])->name('indexkepuasan');
    Route::get('/publichearing',[InformasiPublikController::class,'publichearing'])->name('publichearing');
    Route::get('/zonaintegeritas',[InformasiPublikController::class,'zonaintegeritas'])->name('zonaintegeritas');
    Route::get('/corevalues',[InformasiPublikController::class,'corevalues'])->name('corevalues');
});
Route::prefix('layanan')->group( function(){
    Route::get('/inovasilayanan',[LayananController::class,'inovasilayanan'])->name('inovasilayanan');
    Route::get('/penyediaansumber',[LayananController::class,'penyediaansumber'])->name('penyediaansumber');
    Route::get('/labolatorium',[LayananController::class,'labolatorium'])->name('labolatorium');
});
Route::prefix('kontak')->group( function(){
    Route::get('/kepuasanpelanggan',[KontakController::class,'kepuasanpelanggan'])->name('kepuasanpelanggan');
    Route::get('/layananpengaduan',[KontakController::class,'layananpengaduan'])->name('layananpengaduan');
});

Route::prefix('informasi')->group( function(){

    Route::get('/layanan/{id}',[HomeController::class,'layanan'])->name('layanan');
});
        Route::resource('/admin/post',PostController::class);
        Route::get('/admin/post/create', [PostController::class,'create'])->name('create');
        Route::post('/admin/post/store', [PostController::class,'store'])->name('store');
        Route::post('/admin/post/content_upload', [PostController::class,'content_upload'])->name('content_upload');
        Route::post('/admin/post/update/{id}', [PostController::class,'update'])->name('update');
        Route::post('/admin/post/delete/{id}', [PostController::class,'delete'])->name('delete');

// Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('index');
// Route::get('/auth/login',[LoginController::class,'showLoginForm'])->name('showLoginForm');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' =>'role:admin||pegawai'], function(){
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
        Route::get('/admin/post/{id}/detail', [PostController::class,'detail'])->name('detai');
        Route::resource('/admin/about',AboutController::class);
        Route::get('/admin/about/create', [AboutController::class,'create'])->name('create');
        Route::post('/admin/about/store', [AboutController::class,'store'])->name('store');
        Route::post('/admin/about/update/{id}', [AboutController::class,'update'])->name('update');
        Route::post('/admin/about/about_content_upload', [AboutController::class,'about_content_upload'])->name('about_content_upload');
        Route::resource('/admin/variety',VarietyController::class);
        Route::post('/admin/variety/store', [VarietyController::class,'store'])->name('store');
        Route::post('/admin/variety/update', [VarietyController::class,'update'])->name('update');
        Route::post('/admin/variety/showUpdate', [VarietyController::class,'showUpdate'])->name('showUpdate');
        Route::post('/admin/variety/delete', [VarietyController::class,'delete'])->name('delete');
        Route::resource('/admin/data_variety',DataController::class);
        Route::get('/admin/data_variety/create', [DataController::class,'create'])->name('create');
        Route::post('/admin/data_variety/store', [DataController::class,'store'])->name('store');
        Route::post('/admin/data_variety/data_content_upload', [DataController::class,'data_content_upload'])->name('data_content_upload');
        Route::resource('/admin/user',UserController::class);
        Route::post('/admin/user/store', [UserController::class,'store'])->name('store');
        Route::get('/admin/profile/{id}', [UserController::class,'profile'])->name('profile');
        Route::post('/admin/user/delete', [UserController::class,'delete'])->name('delete');
        Route::post('/admin/user/update/{id}', [UserController::class,'update'])->name('update');
        Route::post('/admin/user/showDetail', [UserController::class,'showDetail'])->name('showDetail');
        Route::resource('/admin/public_info',PublicInfoController::class);
        Route::get('/admin/public_info/create', [PublicInfoController::class,'create'])->name('create');
        Route::post('/admin/public_info/store', [PublicInfoController::class,'store'])->name('store');
        Route::post('/admin/public_info/update/{id}', [PublicInfoController::class,'update'])->name('update');
        Route::post('/admin/public_info/info_content_upload', [PublicInfoController::class,'info_content_upload'])->name('info_content_upload');
        Route::resource('/admin/galeri',GaleriController::class);
        Route::post('/admin/galeri/store', [GaleriController::class,'store'])->name('store');
        Route::post('/admin/galeri/update', [GaleriController::class,'update'])->name('update');
        Route::post('/admin/galeri/showUpdate', [GaleriController::class,'showUpdate'])->name('showUpdate');
        Route::post('/admin/galeri/delete', [GaleriController::class,'delete'])->name('delete');
    });
    Route::group(['middleware' =>'role:user'], function(){
        Route::get('/home',[HomeController::class,'index'])->name('home');
    });
});
