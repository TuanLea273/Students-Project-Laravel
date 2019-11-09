<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use QuanTriVienModel;
use Alert;

class QuanTriVienController extends Controller
{
    protected $redirectTo = 'linh_vuc';
    public function index()
    {
        return view('QuanTriVien.profile');
    }
    public function dangNhap()
    {
        return view('QuanTriVien.dang-nhap');
    }
    public function xulyDangNhap(Request $request)
    {
        $ten_dang_nhap = $request->ten_dang_nhap;
        $mat_khau = $request->mat_khau;
        if(Auth::attempt(['ten_dang_nhap'=>$ten_dang_nhap,'password'=>$mat_khau]))
        {
            Alert::info('Đăng nhập thành công','Xin chào Admin!');
            return redirect()->route('trang-chu');
        }
        else{
            Alert::error('Đăng nhập thất bại','Cút');
            return redirect()->route('dang-nhap');
        }
       
    }
    public function dangXuat()
    {
        Auth::logout();
        return redirect()->route('dang-nhap');
    }
}
