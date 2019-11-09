<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\CauHoiModel;
use App\LinhVucModel;
use Alert;

class CauHoiController extends Controller
{
    
    public function index()
    {
        //
        $hienThi = 1;
        $linhVuc = LinhVucModel::all();
        $cauHoi = CauHoiModel::whereIn('linh_vuc_id',$linhVuc->modelKeys())->get();
        return view('CauHoi.danh-sach-cau-hoi',compact('cauHoi','hienThi'));
    }


    public function create()
    {
        
        $getLinhVucID = LinhVucModel::all();
        return view('CauHoi.them-moi-cau-hoi',compact('getLinhVucID'));
    }


    public function store(Request $request)
    {
             $cauHoi = new CauHoiModel();
             $noiDungCauHoi = $request->input('txtNoiDungCauHoi');
             $linhVucID = $request->input('txtLinhVucID');
             $phuongAnA = $request->input('txtA');
             $phuongAnB = $request->input('txtB');
             $phuongAnC = $request->input('txtC');
             $phuongAnD = $request->input('txtD');
             $dapAn = $request->input('txtDapAn');
           
             if($noiDungCauHoi == '' || $linhVucID == '' ||
             $phuongAnA == '' || $phuongAnB == '' ||
             $phuongAnC == '' || $phuongAnD == '' ||
             $dapAn == ''){
                Alert::warning('Thêm thất bại', 'Không được để trống'); 
                 return  redirect()->route('them-moi-cau-hoi');}
             else{
                 $cauHoi->noi_dung = $noiDungCauHoi;
                 $cauHoi->linh_vuc_id = $linhVucID;
                 $cauHoi->phuong_an_a = $phuongAnA;
                 $cauHoi->phuong_an_b = $phuongAnB;
                 $cauHoi->phuong_an_c = $phuongAnC;
                 $cauHoi->phuong_an_d = $phuongAnD;
                 $cauHoi->dap_an = $dapAn;
                 $cauHoi->save();
                 if($cauHoi){
                    Alert::success('Thêm câu hỏi thành công', 'Successfully'); 
                 }
                 return  redirect()->route('danh-sach-cau-hoi');
             }
        
         return  redirect()->route('danh-sach-cau-hoi');
        
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $cauHoi = CauHoiModel::find($id);
        $getLinhVucID = LinhVucModel::all();
        return view('CauHoi.chinh-sua-cau-hoi',compact('cauHoi','getLinhVucID'));
    } 
    public function update(Request $request, $id)
    {
        
        $cauHoi = CauHoiModel::find($id);
        $noiDungCauHoi = $request->input('txtNoiDungCauHoi');
        $linhVucID = $request->input('txtLinhVucID');
        $phuongAnA = $request->input('txtA');
        $phuongAnB = $request->input('txtB');
        $phuongAnC = $request->input('txtC');
        $phuongAnD = $request->input('txtD');
        $dapAn = $request->input('txtDapAn');
        if($noiDungCauHoi == '' || $linhVucID == '' ||
            $phuongAnA == '' || $phuongAnB == '' ||
            $phuongAnC == '' || $phuongAnD == '' ||
            $dapAn == ''){
            Alert::warning('Cập nhật thất bại','Không được để trống nội dung');
            return  redirect()->route('chinh-sua-cau-hoi');
        }
        else
        {
            $cauHoi->noi_dung = $noiDungCauHoi;
            $cauHoi->linh_vuc_id = $linhVucID;
            $cauHoi->phuong_an_a = $phuongAnA;
            $cauHoi->phuong_an_b = $phuongAnB;
            $cauHoi->phuong_an_c = $phuongAnC;
            $cauHoi->phuong_an_d = $phuongAnD;
            $cauHoi->dap_an = $dapAn;
            $cauHoi->save();
            if($cauHoi){
                Alert::success('Chỉnh sửa thành công', 'Successfully'); 
            }
            return  redirect()->route('danh-sach-cau-hoi');
        }
    }
    public function destroy($id)
    {
        $cauHoi = CauHoiModel::find($id);
        $cauHoi->delete();
        if($cauHoi)
        {
            alert()->info('Xóa thành công', 'Successfully'); 
        }
        return redirect()->route('danh-sach-cau-hoi');
    }
    public function trash()
    {
        $hienThi = 2;
        $cauHoi = CauHoiModel::onlyTrashed()->get();
        return view('CauHoi.danh-sach-cau-hoi',compact('cauHoi','hienThi'));
    }
    public function restore($id)
    {
        $cauHoi = CauHoiModel::onlyTrashed()->find($id);
        $cauHoi->restore();
        Alert::success('Phục hồi thành công');
        return redirect()->route('danh-sach-cau-hoi');
    }
}
