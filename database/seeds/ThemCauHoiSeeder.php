<?php

use Illuminate\Database\Seeder;

class ThemCauHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cau_hoi')->insert([
            ['noi_dung' => 'Giải Grand Slam đầu tiên trong năm là giải nào?', 
            'linh_vuc_id' => 1, 'phuong_an_a' => 'Austrlia mở rộng', 
            'phuong_an_b' => 'Wimbledon', 'phuong_an_c' => 
            'Roland Garos', 'phuong_an_d' => 'Mỹ mở rộng', 
            'dap_an' => 'A'],
            ['noi_dung' => 'Cùng với Hà Nội T&T (vô địch V-League 2010), 
            CLB nào của Việt Nam tham dự AFC Cup 2011?', 'linh_vuc_id' => 2, 
            'phuong_an_a' => 'Sông Lam Nghệ An', 'phuong_an_b' => 
            'SHB Đà Nẵng', 'phuong_an_c' => 'Hoàng Anh Gia Lai',
             'phuong_an_d' => 
            'Becamex Bình Dương', 'dap_an' => 'A']
        ]);
    }
}
