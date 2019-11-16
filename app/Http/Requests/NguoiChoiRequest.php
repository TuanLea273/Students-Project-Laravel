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
            'mat_khau' => 'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
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
            'mat_khau.min' => 'Mật khẩu phải ít nhất 8 kí tự',
            'mat_khau.regex' => 'Mật khẩu phải có ít nhất kí tự đặc biệt và 1 kí tự hoa',
            'hinh_dai_dien.required' =>'Ảnh đại diện không được để trống',
            'email.required' => 'Email không được để trống'
        ];
    }
}
