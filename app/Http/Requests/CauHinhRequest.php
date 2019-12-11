<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CauHinhRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            'thu_tu' => 'required|integer',
            'diem'=>'required|integer'   
        ];
    }
    public function messages()
    {
        return [
            'thu_tu.required' => 'Thứ tự không được để trống ',
            'thu_tu.integer' => 'Chỉ được nhập số',
            'diem.required' => ' Điểm không được để trống',
            'diem.integer' => 'Chỉ được nhập số'
        ];
    }
}
