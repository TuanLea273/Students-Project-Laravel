<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\CauHoiRequest;
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


    public function store(CauHoiRequest $request)
    {
            $cauHoi = new CauHoiModel();
            $noiDungCauHoi = $request->input('noi_dung');
            $linhVucID = $request->input('linh_vuc_id');
            $phuongAnA = $request->input('phuong_an_a');
            $phuongAnB = $request->input('phuong_an_b');
            $phuongAnC = $request->input('phuong_an_c');
            $phuongAnD = $request->input('phuong_an_d');
            $dapAn = $request->input('dap_an');
            $flag = $cauHoi::where('noi_dung',$noiDungCauHoi)->exists();
            if(!$flag)
            {
                $cauHoi->noi_dung = $noiDungCauHoi;
                $cauHoi->linh_vuc_id = $linhVucID;
                $cauHoi->phuong_an_a = $phuongAnA;
                $cauHoi->phuong_an_b = $phuongAnB;
                $cauHoi->phuong_an_c = $phuongAnC;
                $cauHoi->phuong_an_d = $phuongAnD;
                $cauHoi->dap_an = $dapAn;
                $cauHoi->save();

                Alert::success('Thêm câu hỏi thành công', 'Successfully'); 
                return  redirect()->route('danh-sach-cau-hoi');
            }
            else
            {
                    Alert::error('Thêm câu hỏi thất bại','Nội dung câu hỏi đã tồn tại !');
                    return redirect()->route('them-moi-cau-hoi');
            }
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
    public function update(CauHoiRequest $request, $id)
    { 
        $cauHoi = CauHoiModel::find($id);
        $getLinhVucID = LinhVucModel::all();
        $noiDungCauHoi = $request->input('noi_dung');
        $linhVucID = $request->input('linh_vuc_id');
        $phuongAnA = $request->input('phuong_an_a');
        $phuongAnB = $request->input('phuong_an_b');
        $phuongAnC = $request->input('phuong_an_c');
        $phuongAnD = $request->input('phuong_an_d');
        $dapAn = $request->input('dap_an');
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
            return  redirect()->route('danh-sach-cau-hoi');
        }
    }
    public function destroy($id)
    {
        $cauHoi = CauHoiModel::find($id);
        $cauHoi->delete();
        if($cauHoi)
        {
            alert()->warning('Đã xóa câu hỏi', 'Dữ liệu sẽ bị xóa tạm thời'); 
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