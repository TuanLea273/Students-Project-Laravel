<?php

namespace App\Http\Controllers;
use App\LinhVucModel;
use Illuminate\Http\Request;
use App\Http\Requests\LinhVucRequest;
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
    public function store(LinhVucRequest $request)
    {
        //
        $linhVuc = new LinhVucModel;
        $ten_linh_vuc =  $request->ten_linh_vuc;
        $flag = $linhVuc::where('ten_linh_vuc',$ten_linh_vuc)->exists(); 
        if (!$flag)
        {
            $linhVuc->ten_linh_vuc  = $ten_linh_vuc;
            $linhVuc->save();
            Alert::success('Thêm lĩnh vực thành công!','Successfully');
            return redirect()->route('danh-sach-linh-vuc');
        }
        else
        {
            alert()->error('Thêm thất bại!','Lĩnh vực đã tồn tại');
            return redirect()->route('them-moi-linh-vuc');
        }
    }
    public function edit($id)
    {
        //
        $linhVuc=LinhVucModel::find($id);
        return view('LinhVuc.chinh-sua-linh-vuc',compact('linhVuc'));
    }

    public function update(LinhVucRequest $request, $id)
    {
        $linhVuc = LinhVucModel::find($id);
        $ten_linh_vuc= $request->ten_linh_vuc;
        $flag = $linhVuc::where('ten_linh_vuc',$ten_linh_vuc)->exists();
        if (!$flag) {
            $linhVuc->ten_linh_vuc = $ten_linh_vuc;
            $linhVuc->save();
            Alert::success('Chỉnh sửa lĩnh vực thành công!','Successfully');    
        }
        else
        {
            Alert::error('Chỉnh sửa thất bại','Lĩnh vực đã tồn tại');
            return view('LinhVuc.chinh-sua-linh-vuc',compact('linhVuc'));
        }      
        return redirect()->route('danh-sach-linh-vuc');
    }
    public function destroy($id)
    {
        //
        $linhVuc=new LinhVucModel;
        $linhVuc=LinhVucModel::find($id);
        $linhVuc->delete();
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
