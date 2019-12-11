<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoiModel;
class NguoiChoiAPI extends Controller
{
    public function index()
    {
    	$dsNguoiChoi = NguoiChoiModel::all();
    	$result = [
    		'success' => true,
    		'data' => $dsNguoiChoi
    	];
    	return response()->json($result);
    }
    public function show(Request $r)
    {
    	$ten_dang_nhap = $r->query('Username');
    	$mat_khau = $r->query('Password');
		$nguoiChoi = NguoiChoiModel::where('ten_dang_nhap',$ten_dang_nhap)->get();
    		$result = [
    		'success' => true,
    		'data' => $nguoiChoi
    	];
    	return response()->json($result);
    }
}
