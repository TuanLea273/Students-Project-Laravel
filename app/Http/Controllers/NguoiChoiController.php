<?php

namespace App\Http\Controllers;

use App\NguoiChoiModel;
use App\LuotChoiModel;
use Illuminate\Http\Request;
use App\Http\Requests\NguoiChoiRequest;
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
    public function create()
    {
        return view('NguoiChoi.them-moi-nguoi-choi');
    }
    public function store(NguoiChoiRequest $request)
    {
        $nguoiChoi = new NguoiChoiModel;
        $ten_dang_nhap = $request->ten_dang_nhap;
        $mat_khau = $request->mat_khau;
        $email = $request->email;
        $hinh_dai_dien = $request->hinh_dai_dien;
        $diem_cao_nhat = $request->diem_cao_nhat;
        $credit = $request->credit;
        $flag = $nguoiChoi::where('ten_dang_nhap',$ten_dang_nhap)->exists();
        if(!$flag){
            $nguoiChoi->ten_dang_nhap = $ten_dang_nhap;
            $nguoiChoi->mat_khau = $mat_khau;
            $nguoiChoi->email = $email;
            $nguoiChoi->hinh_dai_dien = $hinh_dai_dien;
            $nguoiChoi->diem_cao_nhat = $diem_cao_nhat;
            $nguoiChoi->credit = $credit;
            $nguoiChoi->save();
            Alert::success('Thêm thành công','Successfully');
            return redirect()->route('danh-sach-nguoi-choi');
        }else
        {
            alert()->error('Thêm thất bại!','Người chơi đã tồn tại');
            return redirect()->route('them-moi-nguoi-choi');
        }
    }
    public function edit($id)
    {
        $nguoiChoi = NguoiChoiModel::findOrFail($id);
        return view('NguoiChoi.chinh-sua-nguoi-choi',compact('nguoiChoi'));
    }

    public function update(NguoiChoiRequest $request,$id)
    {   
        $nguoiChoi = NguoiChoiModel::findOrFail($id);
        $ten_dang_nhap = $request->input('ten_dang_nhap');
        $mat_khau = $request->input('mat_khau');
        $email = $request->input('email');
        $hinh_dai_dien = $request->input('hinh_dai_dien');
        $nguoiChoi->ten_dang_nhap = $ten_dang_nhap;
        $nguoiChoi->email = $email;
        $nguoiChoi->mat_khau =$mat_khau;
        $nguoiChoi->hinh_dai_dien = $hinh_dai_dien;
        $nguoiChoi->save();
            if($nguoiChoi){
            Alert::success('Cập nhật thành công');
            return redirect()->route('danh-sach-nguoi-choi');
        }
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
