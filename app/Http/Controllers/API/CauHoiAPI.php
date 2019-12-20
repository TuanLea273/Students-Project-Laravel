<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHoiModel;
class CauHoiAPI extends Controller
{
  
    public function index()
    {
        $dsCauHoi = CauHoiModel::all();

        $result = [
            'success' => true,
            'data' => $dsCauHoi
        ];
        return response()->json($result);
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {

    }
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
