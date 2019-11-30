<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoiCreditModel;
use App\Http\Requests\GoiCreditRequest;
use Alert;

class GoiCreditController extends Controller
{
    public function index()
    {
        $hienThi = 1;
        $dsGoiCredit = GoiCreditModel::all();
        return view('GoiCredit.danh-sach-goi-credit',compact('dsGoiCredit','hienThi')); 
    }

    public function create()
    {
        return view('GoiCredit.them-moi-goi-credit');
    }

    
    public function store(GoiCreditRequest $request)
    {
        $dsGoiCredit = new GoiCreditModel;
        $TenGoi = $request->input('txtTenGoiCredit');
        $Credit = $request->input('txtCredit');
        $SoTien = $request->input('txtSoTien');
        $flag = $dsGoiCredit::where('ten_goi',$TenGoi)->exists();
        if(!$flag)
        {
            //Tạo mới 1 đối tượng gói credit
            $newGoiCredit = new GoiCreditModel();
            //Gán giá trị cho từng thuộc tính
            $newGoiCredit->ten_goi = $TenGoi;
            $newGoiCredit->credit = $Credit;
            $newGoiCredit->so_tien = $SoTien; 
            //Lưu lại
            $newGoiCredit->save();
            alert()->success('Thêm thành công');
            //Chuyển hướng trở về danh sách
            return redirect(route('danh-sach-goi-credit'));

        }
        else{
            alert()->error('Thêm thất bại','Tên gói đã tồn tại');
            return redirect(route('them-moi-goi-credit'));
        }
    }

    public function edit($id)
    {
        $goiCredit = GoiCreditModel::find($id);
        return view('GoiCredit.chinh-sua-goi-credit',compact('goiCredit'));
    }
    public function update(GoiCreditRequest $request)
    {
        $id = $request->input('txtID');
        $goiCredit = GoiCreditModel::find($id);
        $TenGoi = $request->input('txtTenGoiCredit');
        $Credit = $request->input('txtCredit');
        $SoTien = $request->input('txtSoTien');
        //Tạo biến cờ để lấy giá trị true/false;
        $flag = $goiCredit::where('ten_goi',$TenGoi)->exists();
        //Nếu mà gói vừa tạo hợp lệ thì ta thêm nó vào db
        if(!$flag)
        {
            //Gán giá trị cho từng thuộc tính
            $goiCredit->ten_goi = $TenGoi;
            $goiCredit->credit = $Credit;
            $goiCredit->so_tien = $SoTien; 
            //Lưu lại
            $goiCredit->save();
            //Chuyển hướng trở về danh sách
            Alert::success('Cập nhật thành công!');
            return redirect(route('danh-sach-goi-credit'));

        }
        //Cần thêm dòng để thông báo lỗi
        Alert::error('Chỉnh sửa thất bại','Gói credit đã tồn tại');
        return view('GoiCredit.chinh-sua-goi-credit',compact('goiCredit'));
    }

    //Xóa mềm dữ liệu
    public function destroy($id)
    {
        $goiCredit = GoiCreditModel::find($id);
        $goiCredit->delete();
        Alert::warning('Đã xóa gói credit!','Dữ liệu sẽ bị xóa tạm thời');
        return redirect(route('danh-sach-goi-credit'));
    }
    public function trash()
    {
        $hienThi = 2;
        $goiCredit = GoiCreditModel::onlyTrashed()->get();
        return view('GoiCredit.danh-sach-goi-credit',compact('goiCredit','hienThi'));
    }
    public function restore($id)
    {
        $goiCredit = GoiCreditModel::onlyTrashed()->find($id);
        $goiCredit->restore();
        Alert::success('Khôi phục thành công!');
        return redirect()->route('danh-sach-goi-credit');
    }
    public function HistoryIndex()
    {
        //$dsNguoiChoi = GoiCreditModel::find(1)->dsNguoiChoi()->get();
        $dsGoiCredit = GoiCreditModel::all();
        $dem = 0;
        return view('LichSu.lich-su-mua-credit-goi-credit',compact('dsGoiCredit','dem'));
    }
}
