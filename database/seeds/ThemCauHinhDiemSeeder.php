<?php

use Illuminate\Database\Seeder;

class ThemCauHinhDiemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cau_hinh_diem_cau_hoi')->insert([
            ['thu_tu'=>1,'diem'=>10],
            ['thu_tu'=>2,'diem'=>20],
            ['thu_tu'=>3,'diem'=>10],
            ['thu_tu'=>4,'diem'=>30],
            ['thu_tu'=>5,'diem'=>10]
        ]);
    }
}
