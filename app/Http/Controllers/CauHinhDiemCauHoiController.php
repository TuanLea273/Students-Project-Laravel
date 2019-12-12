<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CauHinhRequest;
use App\CauHinhDiemCauHoiModel;
use Alert;
class CauHinhDiemCauHoiController extends Controller
{
    
    public function index()
    {
        $listDiemCauHoi = CauHinhDiemCauHoiModel::all();
        return view('CauHinhDiemCauHoi.danh-sach-cau-hinh',compact('listDiemCauHoi'));
    }

   
    public function create()
    {
       
        return view('CauHinHDiemCauHoi.them-moi-cau-hinh');
    }

    
    public function store(CauHinhRequest $request)
    {
        $diemCauHoi = new CauHinhDiemCauHoiModel;
     
        $diemCauHoi->thu_tu = $request->thu_tu;
        $diemCauHoi->diem = $request->diem;
        $flag = $diemCauHoi::where('thu_tu',$request->thu_tu)->exists();
        if(!$flag)
        {
            $diemCauHoi->save();
            Alert::success('Thêm cấu hình thành công');
            return redirect()->route('danh-sach-cau-hinh');
        }else{
            alert()->error('Thêm thất bại!','Cấu hình  đã tồn tại');
            return redirect()->route('them-moi-cau-hinh');
        }
        
    }

  
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
        $cauHinh = CauHinhDiemCauHoiModel::find($id);
        return view('CauHinhDiemCauHoi.chinh-sua-cau-hinh',compact('cauHinh'));
    }

  
    public function update(CauHinhRequest $request, $id)
    {
        //
        $cauHinh = CauHinhDiemCauHoiModel::find($id);        
        $thuTu = $request->thu_tu;
        $diem = $request->diem;
        if($cauHinh)
        {
            $cauHinh->thu_tu = $thuTu;
            $cauHinh->diem =  $diem;
            $cauHinh->save();
            Alert::success('Chỉnh sửa thành công', 'Successfully'); 
            return  redirect()->route('danh-sach-cau-hinh');
        }
    }

   
    public function destroy($id)
    {
        //
    }
}
