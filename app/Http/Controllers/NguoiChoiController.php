<?php

namespace App\Http\Controllers;

use App\NguoiChoiModel;
use App\LuotChoiModel;
use Illuminate\Http\Request;
use Alert;

class NguoiChoiController extends Controller
{
    public function dangNhap()
    {
        return view('Account.dang-nhap');
    }
    public function dangKi(){
        return view('Account.dang-ki');
    }
    public function index()
    {
        $hienThi = 1;
        $nguoiChoi = NguoiChoiModel::all();
        return view('NguoiChoi.danh-sach-nguoi-choi',compact('nguoiChoi','hienThi'));
    }
    public function destroy($id)
    {
        $nguoiChoi = NguoiChoiModel::find($id);
        $nguoiChoi->delete();
       
        if($nguoiChoi)
        { 
            Alert::warning('Đã xóa người chơi','Dữ liệu sẽ xóa tạm thời');
            return redirect(route('danh-sach-nguoi-choi'));     
            
        }
        return redirect(route('danh-sach-nguoi-choi'));
    }
    
    public function trash()
    {
        $hienThi = 2;
        $nguoiChoi = NguoiChoiModel::onlyTrashed()->get();
        return view('NguoiChoi.danh-sach-nguoi-choi',compact('nguoiChoi','hienThi'));
    }
    public function restore($id)
    {
        $nguoiChoiDaXoa = NguoiChoiModel::withTrashed()->find($id);
        $nguoiChoiDaXoa->restore();
        Alert::success('Phục hồi thành công');
        return redirect()->route('danh-sach-nguoi-choi-da-xoa');
    }
   
}
