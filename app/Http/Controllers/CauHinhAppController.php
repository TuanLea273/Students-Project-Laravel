<?php

namespace App\Http\Controllers;
use App\CauHinhAppModel;
use Illuminate\Http\Request;
use App\Http\Requests\AppRequest;
use Alert;
class CauHinhAppController extends Controller
{
 
   
    public function index()
    {
        //
        $cauHinhApp = CauHinhAppModel::all();
        return view('CauHinhApp.danh-sach-app',compact('cauHinhApp'));
    }

    
    public function create()
    {
        //
        return view('CauHinhApp.them-moi-app');
    }

  
    public function store(AppRequest $request)
    {
        //
        $cauHinhApp = new CauHinhAppModel;
        $cauHinhApp->co_hoi_sai = $request->co_hoi_sai;
        $cauHinhApp->thoi_gian_tra_loi = $request->thoi_gian_tra_loi;
        $cauHinhApp->save();
        Alert::success('Thêm cấu hình app thành công');
        return redirect()->route('danh-sach-app');
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $cauHinhApp = CauHinhAppModel::find($id);
        return view('CauHinhApp.chinh-sua-app',compact('cauHinhApp'));
    }

   
    public function update(AppRequest $request, $id)
    {
        $cauHinhApp = CauHinhAppModel::find($id);        
        $coHoiSai = $request->co_hoi_sai;
        $thoiGian = $request->thoi_gian_tra_loi;
        if($cauHinhApp)
        {
            $cauHinhApp->co_hoi_sai = $coHoiSai;
            $cauHinhApp->thoi_gian_tra_loi =  $thoiGian;
            $cauHinhApp->save();
            Alert::success('Chỉnh sửa thành công', 'Successfully'); 
            return  redirect()->route('danh-sach-app');
        }
    }

  
    public function destroy($id)
    {
        
    }
}
