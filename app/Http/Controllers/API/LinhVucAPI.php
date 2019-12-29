<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LinhVucModel;

class LinhVucAPI extends Controller
{
    //
    public function index()
    {
        $linhVuc = LinhVucModel::all();
        $result = [
            'success' =>true,
            'data' => $linhVuc
        ];
        return response()->json($result);
    }

    public function getDSCauHoi(Request $r)
    {
        $id = $r->query('linhVucId');
        $dsCauHoi = LinhVucModel::find($id)->dsCauHoi()->get();
        $result = [
            'success' => true,
            'data' => $dsCauHoi
        ];
        return response()->json($result);
    }
}
