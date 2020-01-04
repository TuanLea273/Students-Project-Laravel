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

	// Route::post('dang-nhap','API\NguoiChoiAPI@xulyDangNhap')->name('dang-nhap');
	Route::post('dang-nhap','API\NguoiChoiAPI@xacThuc')->name('xu-ly-dang-nhap');
Route::prefix('nguoi-choi')->group(function(){
	Route::get('danh-sach','API\NguoiChoiAPI@index')->name('danh-sach-nguoi-choi');
	Route::get('show-nguoi-choi','API\NguoiChoiAPI@showNguoiChoi')->name('show-nguoi-choi');
	Route::get('show-luot-choi','API\NguoiChoiAPI@showLuotChoi')->name('show-luot-choi');
	Route::get('show-chi-tiet','API\NguoiChoiAPI@showChiTiet')->name('show-chi-tiet');

	Route::get('demo',function(){
		if (CRYPT_BLOWFISH == 1) {
    echo 'Blowfish:     ' . crypt('rasmuslerdorf', '$2a$07$usesomesillystringforsalt$') . "\n";
}
	});
});
Route::prefix('cau-hoi')->group(function(){
	Route::get('danh-sach','API\CauHoiAPI@index')->name('danh-sach-cau-hoi');
	Route::get('thuoc','API\LinhVucAPI@getDSCauHoi');
});
Route::prefix('goi-credit')->group(function(){
	Route::get('danh-sach','API\GoiCreditAPI@index')->name('danh-sach-goi-credit');
});
