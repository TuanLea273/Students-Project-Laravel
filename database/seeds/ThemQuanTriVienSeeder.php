<?php

use Illuminate\Database\Seeder;


class ThemQuanTriVienSeeder extends Seeder
{

    public function run()
    {
        DB::table('quan_tri_vien')->insert([
            ['ten_dang_nhap'=>'admin','mat_khau'=>Hash::make('123456'),'ho_ten'=>'Quan Tri Vien']
        
        ]);
    }
}
