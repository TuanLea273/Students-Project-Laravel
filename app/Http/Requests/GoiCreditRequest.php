<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoiCreditRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'txtTenGoiCredit' => 'required',
            'txtCredit' => 'required|integer',
            'txtSoTien' => 'required|integer'
        ];
    }
    public function messages()
    {
        return[
            'txtTenGoiCredit.required' => 'Tên gói Credit không được để trống! ',
            'txtCredit.required' => 'Credit không được để trống! ',
            'txtCredit.integer' => 'Credit chỉ được nhập số',
            'txtSoTien.required' => 'Số Tiền Credit không được để trống! ',
            'txtSoTien.integer' => 'Số tiền chỉ được nhập số'
            
        ];
    }
}
