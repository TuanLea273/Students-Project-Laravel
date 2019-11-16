<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuanTriVienRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_dang_nhap'=>'required',
            'mat_khau' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'ten_dang_nhap.required'=>'Tên đăng nhập không được để trống',
            'mat_khau.required' => 'Mật khẩu không được để trống'
        ];
    }
}
