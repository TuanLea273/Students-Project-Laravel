<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\ChiTietLuotChoiModel;
class ChiTietLuotChoiController extends Controller
{
  public function index()
  {
      $chiTiet = ChiTietLuotChoiModel::all();
      return view('ChiTietLuotChoi.danh-sach-chi-tiet-luot-choi',compact('chiTiet'));
  }
}
