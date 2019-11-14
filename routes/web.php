<?php

// Quản Trị Vien

Route::get('dang-nhap','QuanTriVienController@dangNhap')->name('dang-nhap')->middleware('guest');
Route::post('dang-nhap','QuanTriVienController@xuLyDangNhap')->name('xu-ly-dang-nhap');
Route::get('dang-xuat','QuanTriVienController@dangXuat')->name('dang-xuat');
Route::get('profile','QuanTriVienController@index')->name('profile');


Route::middleware('auth')->group(function(){
    // View Lĩnh Vực
    Route::get('/', function () {
        return view('QuanTriVien.profile');
    })->name('trang-chu');
    
    Route::prefix('linh-vuc')->group(function(){
        Route::get('danh-sach', 'LinhVucController@index')->name('danh-sach-linh-vuc');
        Route::get('them-moi','LinhVucController@create')->name('them-moi-linh-vuc');
        Route::post('them-moi','LinhVucController@store')->name('xu-ly-them-moi-linh-vuc');
        Route::get('chinh-sua/{id}','LinhVucController@edit')->name('chinh-sua-linh-vuc');
        Route::post('chinh-sua/{id}','LinhVucController@update')->name('xu-ly-chinh-sua-linh-vuc');
        Route::get('xoa/{id}','LinhVucController@destroy')->name('xoa-linh-vuc');
        Route::get('da-xoa','LinhVucController@trash')->name('danh-sach-da-xoa-linh-vuc');
        Route::get('phuc-hoi/{id}','LinhVucController@restore')->name('phuc-hoi-linh-vuc');
    });
    // View Câu Hỏi
    Route::prefix('cau-hoi')->group(function(){
        Route::get('danh-sach','CauHoiController@index')->name('danh-sach-cau-hoi');
        Route::get('them-moi','CauHoiController@create')->name('them-moi-cau-hoi');
        Route::post('them-moi','CauHoiController@store')->name('xu-ly-them-moi-cau-hoi');
        Route::get('chinh-sua/{id}','CauHoiController@edit')->name('chinh-sua-cau-hoi') ;
        Route::post('chinh-sua/{id}','CauHoiController@update')->name('xu-ly-chinh-sua-cau-hoi') ;
        Route::get('xoa/{id}','CauHoiController@destroy')->name('xoa-cau-hoi');
        Route::get('da-xoa','CauHoiController@trash')->name('danh-sach-da-xoa-cau-hoi');
        Route::get('phuc-hoi/{id}','CauHoiController@restore')->name('phuc-hoi-cau-hoi');

    });
    // View Người Chơi
    Route::prefix('nguoi-choi')->group(function(){
        Route::get('danh-sach','NguoiChoiController@index')->name('danh-sach-nguoi-choi');
        Route::get('chinh-sua/{id}','NguoiChoiController@edit')->name('chinh-sua-nguoi-choi') ;
        Route::post('chinh-sua/{id}','NguoiChoiController@update')->name('xu-ly-chinh-sua-nguoi-choi') ;
        Route::get('xoa/{id}','NguoiChoiController@destroy')->name('xoa-nguoi-choi');
        Route::get('da-xoa','NguoiChoiController@trash')->name('danh-sach-nguoi-choi-da-xoa');
        Route::get('phuc-hoi/{id}','NguoiChoiController@restore')->name('phuc-hoi-nguoi-choi');
        Route::get('danh-sach-lich-su','NguoiChoiController@HistoryIndex')->name('lich-su-mua-credit');
         Route::get('lich-su/{id}','NguoiChoiController@show')->name('lich-su-cua-nguoi-choi');
    });
    // View Gói Credit
    Route::prefix('goi-credit')->group(function(){
        Route::get('danh-sach','GoiCreditController@index')->name('danh-sach-goi-credit');
        Route::get('them-moi','GoiCreditController@create')->name('them-moi-goi-credit');
        Route::post('them-moi','GoiCreditController@store')->name('xl-them-moi-goi-credit');
        Route::get('chinh-sua/{id}','GoiCreditController@edit')->name('chinh-sua-goi-credit');
        Route::post('chinh-sua/{id}','GoiCreditController@update')->name('xl-chinh-sua-goi-credit');
        Route::get('xoa/{id}','GoiCreditController@destroy')->name('xoa-goi-credit');
        Route::get('da-xoa','GoiCreditController@trash')->name('danh-sach-goi-credit-da-xoa');
        Route::get('phuc-hoi/{id}','GoiCreditController@restore')->name('phuc-hoi-goi-credit');
    });
    // View Lượt Chơi
    Route::prefix('luot-choi')->group(function(){
        Route::get('danh-sach','LuotChoiController@index')->name('danh-sach-luot-choi');
        Route::get('chi-tiet/{id}','LuotChoiController@show')->name('chi-tiet-mot-luot-choi');
    });
    // View Chi Tiết Lượt Chơi
    Route::prefix('chi-tiet-luot-choi')->group(function(){
        Route::get('danh-sach','ChiTietLuotChoiController@index')->name('danh-sach-chi-tiet');
    }); 
});

