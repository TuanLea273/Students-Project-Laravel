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
            'mat_khau' => 'required|min:6|regex:/^.*(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[#?!@$%^&*-]).*$/',
            'hinh_dai_dien' => 'required',
            'email' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'ten_dang_nhap.required' => 'Tên đăng nhập không được để trống',
            'mat_khau.required' =>'Mật khẩu không được để trống',
            'mat_khau.min' => 'Mật khẩu phải ít  nhất 6 kí tự',
            'mat_khau.regex' => 'Mật khẩu phải có ít nhất kí tự đặc biệt và 1 kí tự hoa',
            'hinh_dai_dien.required' =>'Ảnh đại diện không được để trống',
            'email.required' => 'Email không được để trống'
        ];
    }
}
