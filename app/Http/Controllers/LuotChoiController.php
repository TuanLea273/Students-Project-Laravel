<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\LuotChoiModel;
use App\ChiTietLuotChoiModel;
use Illuminate\Http\Request;


class LuotChoiController extends Controller
{
    
    public function index()
    {
        //
        $luotChoi = LuotChoiModel::all();   
        return view('LuotChoi.danh-sach-luot-choi',compact('luotChoi'));
    }
   public function show($id)
   {
    $luotChoi = LuotChoiModel::find($id);
    $chiTiet = ChiTietLuotChoiModel::where('luot_choi_id',$luotChoi->id)->get();
    return view('ChiTietLuotChoi.danh-sach-chi-tiet-luot-choi',compact('luotChoi','chiTiet'));
   }
}
