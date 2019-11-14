<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CauHoiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

 
    public function rules()
    {
        return [
            'noi_dung' => 'required',
            'phuong_an_a' => 'required',
            'phuong_an_b' => 'required',
            'phuong_an_c' => 'required',
            'phuong_an_d' => 'required'
            
        ];
    }
    public function messages()
    {
        return [
            'noi_dung.required' => 'Nội dung câu hỏi không được để trống !',
            'phuong_an_a.required' => 'Phương Án A không được để trống! ',
            'phuong_an_b.required' => 'Phương Án B không được để trống! ',
            'phuong_an_c.required' => 'Phương Án C không được để trống! ',
            'phuong_an_d.required' => 'Phương Án D không được để trống! '
        ];
    }
}
