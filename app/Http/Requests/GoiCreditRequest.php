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
            'txtCredit' => 'required',
            'txtSoTien' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'txtTenGoiCredit.required' => 'Tên gói Credit không được để trống! ',
            'txtCredit.required' => 'Credit không được để trống! ',
            'txtSoTien.required' => 'Số Tiền Credit không được để trống! '
        ];
    }
}
