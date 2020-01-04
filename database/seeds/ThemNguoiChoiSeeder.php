<?php

use Illuminate\Database\Seeder;

class ThemNguoiChoiSeeder extends Seeder
{
    
    public function run()
    {
       DB::table('nguoi_choi')->insert([
            ['ten_dang_nhap'=>'demo2',
            'mat_khau'=>Hash::make('123456'),
            'email'=>'tp17041999@gmail.com',
            'hinh_dai_dien'=>'tanphat.jpg',
            'diem_cao_nhat'=>3000,
            'credit'=>200],
       ]);
    }
}
