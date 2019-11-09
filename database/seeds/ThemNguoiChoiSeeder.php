<?php

use Illuminate\Database\Seeder;

class ThemNguoiChoiSeeder extends Seeder
{
    
    public function run()
    {
       DB::table('nguoi_choi')->insert([
            ['ten_dang_nhap'=>'leanhtuan',
            'mat_khau'=>'leanhtuan2703',
            'email'=>'leanhtuan@gmail.com',
            'hinh_dai_dien'=>'anhtuan.jpg',
            'diem_cao_nhat'=>1000,
            'credit'=>200],
            ['ten_dang_nhap'=>'lenam',
            'mat_khau'=>'lenamdeptraivkl',
            'email'=>'lenam@gmail.com',
            'hinh_dai_dien'=>'lenam.jpg',
            'diem_cao_nhat'=>2000,
            'credit'=>200],
            ['ten_dang_nhap'=>'tranletanphat',
            'mat_khau'=>'tranletanphat',
            'email'=>'tranletanphat@gmail.com',
            'hinh_dai_dien'=>'tanphat.jpg',
            'diem_cao_nhat'=>3000,
            'credit'=>200],
       ]);
    }
}
