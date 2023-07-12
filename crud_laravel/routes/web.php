<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoaispController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\CheckLogin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




//San Phẩm
Route::get('', [LoginController::class, 'GetLogin'])->middleware('CheckLogout');
Route::post('', [LoginController::class, 'PostLogin']);
Route::group(['prefix' => 'admin', 'middleware' => 'CheckLogin'], function () {
    Route::get('',[IndexController::class,'GetIndex']);
    Route::get('logout',[IndexController::class,'GetLogOut']);
    Route::group(['prefix' => 'Loai'], function () {
        Route::get('', [LoaispController::class, 'GetList']);
        Route::get('add', [LoaispController::class, 'GetAdd']);
        Route::post('add', [LoaispController::class, 'PostAdd']);
        Route::get('delete/{id_loai}', [LoaispController::class, 'GetDelete']);
        Route::get('edit/{id_loai}', [LoaispController::class, 'GetEdit']);
        Route::post('edit/{id_loai}', [LoaispController::class, 'PostEdit']);
    });

    Route::group(['prefix' => 'SanPham'], function () {
        Route::get('', [SanPhamController::class, 'GetListsp']);
        Route::get('add', [SanPhamController::class, 'GetAddsp']);
        Route::post('add', [SanPhamController::class, 'PostAddsp']);
        Route::get('delete/{id_sp}', [SanPhamController::class, 'GetDeletesp']);
        Route::get('edit/{id_sp}', [SanPhamController::class, 'GetEditsp']);
        Route::post('edit/{id_sp}', [SanPhamController::class, 'PostEditsp']);
    });
});


