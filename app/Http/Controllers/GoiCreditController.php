<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoiCreditModel;
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

    
    public function store(Request $request)
    {
        $TenGoi = $request->input('txtTenGoiCredit');
        $Credit = $request->input('txtCredit');
        $SoTien = $request->input('txtSoTien');
        //Kiểm tra xem gói credit đã tồn tại chưa
        $dsGoiCredit = GoiCreditModel::all();
        //Tạo biến cờ để lấy giá trị true/false;
        //Ở đây ta mặc định cho nó = true tức là nó gói credit vừa thêm chưa có trong db
        $flag = true;
        //Chạy dòng foreach để duyệt danh sách các dòng
        foreach ($dsGoiCredit as $value) {
            //Kiểm tra có tồn tại hay chưa, có rỗng hay không
            if($TenGoi == $value->ten_goi
             || $TenGoi == '' || $Credit == '' || $SoTien == '')
            {
                alert()->warning('Thêm thất bại','Nội dung không được để trống');
                $flag = false;
            }
        }
        //Nếu mà gói vừa tạo hợp lệ thì ta thêm nó vào db
        if($flag)
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
        //Cần thêm dòng để thông báo lỗi
        return redirect(route('danh-sach-goi-credit'));

    }

    public function edit($id)
    {
        $goiCredit = GoiCreditModel::find($id);
        return view('GoiCredit.chinh-sua-goi-credit',compact('goiCredit'));
    }
    public function update(Request $request, $id)
    {
        $TenGoi = $request->input('txtTenGoiCredit');
        $Credit = $request->input('txtCredit');
        $SoTien = $request->input('txtSoTien');

        //Tạo biến cờ để lấy giá trị true/false;
        $flag = true;
        //Kiểm tra giá trị có rỗng hay không
        if($TenGoi == '' || $Credit == '' || $SoTien == '')
        {
                $flag = false;
                alert()->warning('Cập nhật thất bại!','Nội dung không được để trống');
        }
        //Nếu mà gói vừa tạo hợp lệ thì ta thêm nó vào db
        if($flag)
        {
            //Tạo mới 1 đối tượng gói credit
            $updateGoiCredit = GoiCreditModel::find($id);
            //Gán giá trị cho từng thuộc tính
            $updateGoiCredit->ten_goi = $TenGoi;
            $updateGoiCredit->credit = $Credit;
            $updateGoiCredit->so_tien = $SoTien; 
            //Lưu lại
            $updateGoiCredit->save();
            //Chuyển hướng trở về danh sách
            Alert::success('Cập nhật thành công!');
            return redirect(route('danh-sach-goi-credit'));

        }
        //Cần thêm dòng để thông báo lỗi
        return redirect(route('danh-sach-goi-credit'));
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
