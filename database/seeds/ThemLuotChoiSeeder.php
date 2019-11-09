<?php

use Illuminate\Database\Seeder;

class ThemLuotChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('luot_choi')->insert([
            ['nguoi_choi_id'=>1,'so_cau'=>10,'diem'=>100],
            ['nguoi_choi_id'=>2,'so_cau'=>9,'diem'=>90],
            ['nguoi_choi_id'=>3,'so_cau'=>8,'diem'=>80],
        ]);
    }
    
}
