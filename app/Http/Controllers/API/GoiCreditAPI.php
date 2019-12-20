<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoiCreditModel;
class GoiCreditAPI extends Controller
{
    
    public function index()
    {
        $dsGoiCredit = GoiCreditModel::all();
        $result = [
            'success' =>true,
            'data' => $dsGoiCredit
        ];
        return response()->json($result);
    }
}
