<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NguoiChoiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_dang_nhap' => 'required',
            'mat_khau' => 'required',
            'hinh_dai_dien' => 'required',
            'email' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'ten_dang_nhap.required' => 'Tên đăng nhập không được để trống',
            'mat_khau.required' =>'Mật khẩu không được để trống',
            'hinh_dai_dien.required' =>'Ảnh đại diện không được để trống',
            'email.required' => 'Email không được để trống'
        ];
    }
}
