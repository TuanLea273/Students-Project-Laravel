<?php

namespace App\Http\Controllers;
use App\LinhVucModel;
use Illuminate\Http\Request;
use Alert;

class LinhVucController extends Controller
{
    
    public function index()
    {
        $hienThi = 1;
        $linhVuc=LinhVucModel::all();
        return view('LinhVuc.danh-sach-linh-vuc',compact('linhVuc','hienThi'));
    }
    public function create()
    {
        return view('LinhVuc.them-moi-linh-vuc');
    }
    public function store(Request $request)
    {
        //
        $linhVuc = new LinhVucModel;
        if(isset($request->ten_linh_vuc))
        {
            $ten_linh_vuc =  $request->ten_linh_vuc;
            
            $flag = $linhVuc::where('ten_linh_vuc',$ten_linh_vuc)->exists(); 
            
            if (!$flag) {
            $linhVuc->ten_linh_vuc  = $ten_linh_vuc;
            $linhVuc->save();
            Alert::success('Thêm lĩnh vực thành công!','Successfully');
            }
            else{
                Alert::warning('Thêm lĩnh vực thất bại !','Đã tồn tại lĩnh vực này!');
            }
            return view('LinhVuc.them-moi-linh-vuc');
        }
    else{
        Alert::warning('Thêm lĩnh vực thất bại !','Nội dung không được để trống!');
        return view('LinhVuc.them-moi-linh-vuc');
    }
    }
    public function edit($id)
    {
        //
        $linhVuc=LinhVucModel::find($id);
        return view('LinhVuc.chinh-sua-linh-vuc',compact('linhVuc'));
    }

    
    public function update(Request $request, $id)
    {
        //
        $linhVuc= new LinhVucModel;
        $linhVuc= LinhVucModel::find($id);
        $ten_linh_vuc= $request->ten_linh_vuc;
        $flag = $linhVuc::where('ten_linh_vuc',$ten_linh_vuc)->exists();
        if (!$flag) {
            $linhVuc->ten_linh_vuc = $ten_linh_vuc;
            $linhVuc->save();
            Alert::success('Chỉnh sửa thành công!','Successfully');
        }
        else{
            Alert::warning('Chỉnh sửa thất bại!');
        }
           return view('LinhVuc.chinh-sua-linh-vuc',compact('linhVuc'));
            
    }
    public function destroy($id)
    {
        //
        $linhVuc=new LinhVucModel;
        $linhVuc=LinhVucModel::find($id);
        $linhVuc->delete();
        if($linhVuc)
        {
           Alert::warning('Đã xóa lĩnh vực!','Dữ liệu sẽ bị xóa tạm thời');
        }
        return redirect()->route('danh-sach-linh-vuc');
    }
    public function trash(){
        $hienThi=2;
        $linhVuc = LinhVucModel::onlyTrashed()->get();
        return view('LinhVuc.danh-sach-linh-vuc', compact('linhVuc','hienThi'));
    }
    public function restore($id){
        $linhVuc = LinhVucModel::onlyTrashed()->find($id);
        $linhVuc->restore();
        Alert::success('Khôi phục thành công!');
        return redirect()->route('danh-sach-linh-vuc');
    }
}
