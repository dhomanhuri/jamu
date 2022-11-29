<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\UserController2;
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

Route::get('/', function () {
    return view('rekomendasi.rekomendasi    ');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/rekomendasi',[RekomendasiController::class, 'index']);
route::get('/rekomendasiresult',[RekomendasiController::class, 'result']);


Route::middleware(['auth'])->group(function(){
    Route::resource('kategori',KategoriController::class);
    route::get('/kategoridel/{kategori}',[KategoriController::class, 'destroy']);
    
    Route::resource('post',PostController::class);
    Route::get('/postdel/{post}',[PostController::class, 'destroy']);
    
    Route::resource('product', ProductController::class);
    route::get('/productdel/{product}',[ProductController::class, 'destroy']);
    
    Route::resource('user', UserController2::class);
    route::get('/userdel/{user}',[UserController2::class, 'destroy']);
    
    route::get('/detailpost/{id}',[PostController::class,'detail']);
    
});