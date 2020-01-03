<?php

use Illuminate\Database\Seeder;

class ThemCauHinhAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cau_hinh_app')->insert([
            ['co_hoi_sai'=>1,'thoi_gian_tra_loi'=>30],
            ['co_hoi_sai'=>2,'thoi_gian_tra_loi'=>15],
            ['co_hoi_sai'=>3,'thoi_gian_tra_loi'=>20],
            ['co_hoi_sai'=>4,'thoi_gian_tra_loi'=>45],
        ]);
    }
}
