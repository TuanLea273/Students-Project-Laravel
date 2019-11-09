<?php

use Illuminate\Database\Seeder;

class ThemGoiCreditSeeder extends Seeder
{
   
    public function run()
    {
        DB::table('goi_credit')->insert([
            ['ten_goi'=>'Gói A','credit'=>300,'so_tien'=>40000],
            ['ten_goi'=>'Gói B','credit'=>200,'so_tien'=>30000],
            ['ten_goi'=>'Gói C','credit'=>100,'so_tien'=>20000],
        ]);
    }
}
