<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'co_hoi_sai' => 'required|integer',
            'thoi_gian_tra_loi' => 'required|integer'
        ];
    }
    public function messages()
    {
        return [
            'co_hoi_sai.required' => 'Không được để trống ',
            'co_hoi_sai.integer' => 'Chỉ được nhập số',
            'thoi_gian_tra_loi.required' => ' Thời gian không được để trống',
            'thoi_gian_tra_loi.integer' => 'Chỉ được nhập số'
        ];
    }
}
