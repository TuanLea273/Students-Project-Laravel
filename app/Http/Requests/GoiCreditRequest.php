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
            'txtCredit' => 'required|integer|min:0',
            'txtSoTien' => 'required|integer|min:0'
        ];
    }
    public function messages()
    {
        return[
            'txtTenGoiCredit.required' => 'Tên gói Credit không được để trống! ',
            'txtCredit.required' => 'Credit không được để trống! ',
            'txtCredit.integer' => 'Credit chỉ được nhập số',
            'txtCredit.min'=> 'Credit không hợp lệ',
            'txtSoTien.required' => 'Số Tiền Credit không được để trống! ',
            'txtSoTien.integer' => 'Số tiền chỉ được nhập số',
            'txtSoTien.min' => 'Số tiền không hợp lệ'

        ];
    }
}
