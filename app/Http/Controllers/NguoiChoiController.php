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

    public function edit($id)
    {
        $nguoiChoi = NguoiChoiModel::findOrFail($id);
        return view('NguoiChoi.chinh-sua-nguoi-choi',compact('nguoiChoi'));
    }

    public function update(Request $request,$id)
    {   
        $nguoiChoi = NguoiChoiModel::findOrFail($id);
        $ten_dang_nhap = $request->input('ten_dang_nhap');
        $email = $request->input('email');
        $hinh_dai_dien = $request->input('hinh_dai_dien');
        if($ten_dang_nhap =='' || $email == ''){
            Alert::warning('Chỉnh sửa thất bại','Email hoặc Tên đăng nhập không được để trống');
            return redirect()->route('chinh-sua-nguoi-choi');
        }
        else{
            $nguoiChoi->ten_dang_nhap = $ten_dang_nhap;
            $nguoiChoi->email = $email;
            $nguoiChoi->hinh_dai_dien = $hinh_dai_dien;
            $nguoiChoi->save();
            if($nguoiChoi){
            Alert::success('Cập nhật thành công');}
        }
        return redirect()->route('danh-sach-nguoi-choi');
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
    public function HistoryIndex()
    {
        $hienThi = 1;
        $dsNguoiChoi = NguoiChoiModel::all();
        return view('LichSu.lich-su-mua-credit-nguoi-choi',compact('dsNguoiChoi','hienThi'));
    }

    public function show($id)
    {
        $hienThi = 2;
        $nguoiChoi = NguoiChoiModel::find($id);
        $goiCredit = NguoiChoiModel::find($id)->dsGoiCredit;
        return view('LichSu.lich-su-mua-credit-nguoi-choi',compact('nguoiChoi','goiCredit','hienThi'));
    }
    
}
