<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('linh-vuc')->group(function(){
    Route::get('danh-sach','API\LinhVucAPI@index')->name('danh-sach-linh-vuc');
});

Route::prefix('nguoi-choi')->group(function(){
	Route::get('danh-sach','API\NguoiChoiAPI@index')->name('danh-sach-nguoi-choi');
	Route::get('show','API\NguoiChoiAPI@show')->name('show-nguoi-choi');
});
Route::prefix('cau-hoi')->group(function(){
	Route::get('danh-sach','API\CauHoiAPI@index')->name('danh-sach-cau-hoi');
});
Route::prefix('goi-credit')->group(function(){
	Route::get('danh-sach','API\GoiCreditAPI@index')->name('danh-sach-goi-credit');
});
