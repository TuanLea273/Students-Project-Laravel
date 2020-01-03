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
            // Toán
            ['noi_dung' => 'Giải Grand Slam đầu tiên trong năm là giải nào?', 
            'linh_vuc_id' => 1, 'phuong_an_a' => 'Austrlia mở rộng', 
            'phuong_an_b' => 'Wimbledon', 'phuong_an_c' => 
            'Roland Garos', 'phuong_an_d' => 'Mỹ mở rộng', 
            'dap_an' => 'A'],
            ['noi_dung' => 'Điền vào câu tục ngữ sau: Cây muốn lặng mà ... chẳng ngừng?', 
            'linh_vuc_id' => 1, 
            'phuong_an_a' => 'Gió', 'phuong_an_b' => 
            'Nước', 'phuong_an_c' => 'Nắng',
             'phuong_an_d' =>  'Mưa', 'dap_an' => 'A'],
            ['noi_dung' => 'Điền vào cây tục ngữ sau: Đầu voi đuôi ...?', 
            'linh_vuc_id' => 1, 
            'phuong_an_a' => 'Lợn', 'phuong_an_b' => 
            'Kiến', 'phuong_an_c' => 'Khỉ',
             'phuong_an_d' => 'Chuột', 'dap_an' => 'D'],
            ['noi_dung' => 'Điền vào chỗ trống: Ác giả ác ...?', 
            'linh_vuc_id' => 1, 
            'phuong_an_a' => 'Báo', 'phuong_an_b' => 
            'Ôn', 'phuong_an_c' => 'Nhân',
             'phuong_an_d' => 'Đáp', 'dap_an' => 'A'],
            ['noi_dung' => 'Điền vào chỗ trống: Ngậm ... nuốt cay?', 
            'linh_vuc_id' => 1, 
            'phuong_an_a' => 'Ngọt', 'phuong_an_b' => 
            'Chát', 'phuong_an_c' => 'Đắng',
             'phuong_an_d' => 'Nhạt', 'dap_an' => 'C'],
            ['noi_dung' => 'Điền vào chỗ trống: Bước thấp ... cao?', 
            'linh_vuc_id' => 1, 
            'phuong_an_a' => 'Nhảy', 'phuong_an_b' => 
            'Bước', 'phuong_an_c' => 'Bay',
             'phuong_an_d' => 'Ngồi', 'dap_an' => 'B'], 
            ['noi_dung' => 'Thứ tự nào đúng nhất trong các thứ tự sau?', 
            'linh_vuc_id' => 1, 
            'phuong_an_a' => 'Ăn hay học vóc', 'phuong_an_b' => 
            'Ăn vóc học hay ', 'phuong_an_c' => 'Học hay ăn vóc',
             'phuong_an_d' => 'Học vóc ăn hay', 'dap_an' => 'B'],
            ['noi_dung' => 'Tính đến năm 2011, quốc gia nào có dân số đứng thứ hai trên thế giới?', 
            'linh_vuc_id' => 1, 
            'phuong_an_a' => 'Trung Quốc', 'phuong_an_b' => 
            'Nga ', 'phuong_an_c' => 'Ấn Độ',
             'phuong_an_d' => 'Brazil', 'dap_an' => 'C'],
             // Lý  
            ['noi_dung' => 'Cùng với Hà Nội T&T (vô địch V-League 2010),CLB nào của Việt Nam tham dự AFC Cup 2011?', 
            'linh_vuc_id' => 2, 
            'phuong_an_a' => 'Sông Lam Nghệ An', 'phuong_an_b' => 
            'SHB Đà Nẵng', 'phuong_an_c' => 'Hoàng Anh Gia Lai',
             'phuong_an_d' => 'Becamex Bình Dương', 'dap_an' => 'A'],
            ['noi_dung' => 'Con gì sẽ hoá thành muỗi khi trưởng thành?', 
            'linh_vuc_id' => 2, 
            'phuong_an_a' => 'Nòng nọc', 'phuong_an_b' => 
            'Lăng quăng', 'phuong_an_c' => 'Giòi',
             'phuong_an_d' => 'Nhộng', 'dap_an' => 'B'],
            ['noi_dung' => 'Trẻ em đang học mẫu giáo được gọi là gì?', 
            'linh_vuc_id' => 2, 
            'phuong_an_a' => 'Thanh niên', 'phuong_an_b' => 
            'Thiếu niên', 'phuong_an_c' => 'Thiếu nhi',
             'phuong_an_d' => 'Trung niên', 'dap_an' => 'C'],
            ['noi_dung' => 'Trẻ em đang học mẫu giáo được gọi là gì?', 
            'linh_vuc_id' => 2, 
            'phuong_an_a' => 'Thanh niên', 'phuong_an_b' => 
            'Thiếu niên', 'phuong_an_c' => 'Thiếu nhi',
             'phuong_an_d' => 'Trung niên', 'dap_an' => 'C'],
            ['noi_dung' => 'Khiêm tốn, thật thà, dũng cảm là điều dạy thứ mấy trong 5 điều Bác Hồ dạy?', 
            'linh_vuc_id' => 2, 
            'phuong_an_a' => 'Điều 2', 'phuong_an_b' => 
            'Điều 3', 'phuong_an_c' => 'Điều 4',
             'phuong_an_d' => 'Điều 5', 'dap_an' => 'D'],
           // Anh
            ['noi_dung' => 'Điền vào chỗ trống: Có ... giật mình?', 
            'linh_vuc_id' => 3, 
            'phuong_an_a' => 'Thật', 'phuong_an_b' => 
            'Sai', 'phuong_an_c' => 'Tật',
             'phuong_an_d' => 'Tội', 'dap_an' => 'C'],
            ['noi_dung' => 'Trong các con vật sau đây, con nào di chuyển nhanh nhất?', 
            'linh_vuc_id' => 3, 
            'phuong_an_a' => 'Rắn', 'phuong_an_b' => 
            'Thỏ', 'phuong_an_c' => 'Báo',
             'phuong_an_d' => 'Sư tử', 'dap_an' => 'C'],
            ['noi_dung' => '1kg sắt, 1kg vàng, 1kg bông gòn, cái nào nặng nhất?', 
            'linh_vuc_id' => 3, 
            'phuong_an_a' => 'Sắt', 'phuong_an_b' => 
            'Bông gòn', 'phuong_an_c' => 'Vàng',
             'phuong_an_d' => 'Bằng nhau ', 'dap_an' => 'D'],
            ['noi_dung' => 'Con gì có cánh, mà không biết bay, ngày xuống ao chơi, đêm về đẻ trứng?', 
            'linh_vuc_id' => 3, 
            'phuong_an_a' => 'Con gà', 'phuong_an_b' => 
            'Con vịt', 'phuong_an_c' => 'Com chim',
             'phuong_an_d' => 'Con chó', 'dap_an' => 'B'],
            ['noi_dung' => 'Con gì tám cẳng hai càng?', 
            'linh_vuc_id' => 3, 
            'phuong_an_a' => 'Con cua ', 'phuong_an_b' => 
            'Con ghẹ', 'phuong_an_c' => 'Con tôm',
             'phuong_an_d' => 'Con mực', 'dap_an' => 'A'],
           // Hóa
            ['noi_dung' => 'Fe hóa trị mấy?', 
            'linh_vuc_id' => 4, 
            'phuong_an_a' => 'I', 'phuong_an_b' => 
            'II', 'phuong_an_c' => 'III',
             'phuong_an_d' => 'Cả B và C', 'dap_an' => 'D'],
            ['noi_dung' => 'Al là gì?', 
            'linh_vuc_id' => 4, 
            'phuong_an_a' => 'Nhôm', 'phuong_an_b' => 
            'Bạc', 'phuong_an_c' => 'Vàng',
             'phuong_an_d' => 'Kẽm', 'dap_an' => 'A'],
            ['noi_dung' => 'Fe + ? -> FeCL2', 
            'linh_vuc_id' => 4, 
            'phuong_an_a' => 'Cl', 'phuong_an_b' => 
            '2Cl', 'phuong_an_c' => 'OH',
             'phuong_an_d' => 'Cả A và B ', 'dap_an' => 'B'],
            ['noi_dung' => 'Nguyên tử khối nào nặng nhất trong các nguyên tử?', 
            'linh_vuc_id' => 4, 
            'phuong_an_a' => 'H ', 'phuong_an_b' => 
            'He', 'phuong_an_c' => 'Oganesson ',
             'phuong_an_d' => 'Livermori', 'dap_an' => 'C'],
            ['noi_dung' => 'H là gì? He là gì?', 
            'linh_vuc_id' => 4, 
            'phuong_an_a' => 'H là Hi , He là HeHe ', 'phuong_an_b' => 
            'H là Hello, He là Heli', 'phuong_an_c' => 'H là Hidro, He là Hele',
             'phuong_an_d' => 'H là Hidro, He là Heli', 'dap_an' => 'D'],
           
           // Sinh
            ['noi_dung' => 'Trái đất được phủ quanh bởi gì? ', 
            'linh_vuc_id' => 5, 
            'phuong_an_a' => 'Thực vật', 'phuong_an_b' => 
            'Thảm thực vật', 'phuong_an_c' => 'Đại dương',
             'phuong_an_d' => 'Đá, sỏi, lục địa', 'dap_an' => 'C'],
            ['noi_dung' => 'Mối quan hệ nào sau đây tốt?', 
            'linh_vuc_id' => 5, 
            'phuong_an_a' => 'Cộng sinh', 'phuong_an_b' => 
            'Kí sinh', 'phuong_an_c' => 'Hợp sinh',
             'phuong_an_d' => 'Hội sinh', 'dap_an' => 'A'],
            ['noi_dung' => 'Cây có hô hấp bằng gì?', 
            'linh_vuc_id' => 5, 
            'phuong_an_a' => 'Lá cây', 'phuong_an_b' => 
            'Thân cây ', 'phuong_an_c' => 'Mọi cơ quan (Rễ, thân, lá, hoa, quả, hạt)',
             'phuong_an_d' => 'Cả A và C', 'dap_an' => 'C'],
            ['noi_dung' => 'Chất diệp lục là gì', 
            'linh_vuc_id' => 5, 
            'phuong_an_a' => 'Là sắc tố quang tổng hợp màu xanh lá cây có ở thực vật, tảo, vi khuẩn lam', 'phuong_an_b' => 
            'diệp lục tố, chlorophyll', 'phuong_an_c' => 'carotenoid và xantophyl  ',
             'phuong_an_d' => 'Cả 3 đều đúng', 'dap_an' => 'D'],
            ['noi_dung' => 'Động vât nào có nhiều vú?', 
            'linh_vuc_id' => 5, 
            'phuong_an_a' => 'Chó ', 'phuong_an_b' => 
            'Bò sữa', 'phuong_an_c' => 'Heo',
             'phuong_an_d' => 'Hổ', 'dap_an' => 'B'],
           
           // Văn
            ['noi_dung' => 'Tác giả của bộ truyện tranh nổi tiếng Thám tử lừng danh Conan? ', 
            'linh_vuc_id' => 6, 
            'phuong_an_a' => 'Fujico Fujio', 'phuong_an_b' => 
            'Takahashi Monona', 'phuong_an_c' => 'Gosho Aoyama',
             'phuong_an_d' => 'Kajuki Takahashi', 'dap_an' => 'C'],
            ['noi_dung' => 'Điền vào chỗ trống: Ăn bớt ăn ...?', 
            'linh_vuc_id' =>6, 
            'phuong_an_a' => 'Kém', 'phuong_an_b' => 
            'Thua', 'phuong_an_c' => 'Xin',
             'phuong_an_d' => 'Xén ', 'dap_an' => 'B'],
            ['noi_dung' => 'Điền vào chỗ trống: Chân ướt chân ...?', 
            'linh_vuc_id' => 6, 
            'phuong_an_a' => 'Khô', 'phuong_an_b' => 
            'Át ', 'phuong_an_c' => 'Khô',
             'phuong_an_d' => 'Nẻ', 'dap_an' => 'C'],
            ['noi_dung' =>'Điền tiếp vào câu tục ngữ: Đời cha ăn mặn, đời con ...?', 
            'linh_vuc_id' => 6, 
            'phuong_an_a' => 'ăn đói', 'phuong_an_b' => 
            'chết ngắt', 'phuong_an_c' => 'ăn nhạt',
             'phuong_an_d' => 'khát nước', 'dap_an' => 'D'],
            ['noi_dung' => 'Điền tiếp vào câu tục ngữ: Lo bò ... răng?', 
            'linh_vuc_id' => 6, 
            'phuong_an_a' => 'đen ', 'phuong_an_b' => 
            'vàng', 'phuong_an_c' => 'bạc',
             'phuong_an_d' => 'trắng', 'dap_an' => 'D'],    
           // Địa
            ['noi_dung' => 'Lapaz là thủ đô của quốc gia nào?', 
            'linh_vuc_id' => 7, 
            'phuong_an_a' => 'Bolivia', 'phuong_an_b' => 
            'Brazil', 'phuong_an_c' => 'Bhutan',
             'phuong_an_d' => 'Belarus ', 'dap_an' => 'A'],
            ['noi_dung' => 'Biển Ba Động thuộc tỉnh nào của nước ta?', 
            'linh_vuc_id' =>7, 
            'phuong_an_a' => 'Kiên Giang', 'phuong_an_b' => 
            'Cà Mau', 'phuong_an_c' => 'Trà Vinh',
             'phuong_an_d' => 'Sóc Trăng ', 'dap_an' => 'C'],
            ['noi_dung' => 'Huyện Cát Hải trực thuộc tỉnh nào của nước ta?', 
            'linh_vuc_id' => 7, 
            'phuong_an_a' => 'Quảng Ninh', 'phuong_an_b' => 
            'Thái Bình ', 'phuong_an_c' => 'Hải Dương',
             'phuong_an_d' => 'Hải Phòng', 'dap_an' => 'D'],
            ['noi_dung' =>'Huyện Đô Lương trực thuộc tỉnh nào của nước ta?', 
            'linh_vuc_id' => 7, 
            'phuong_an_a' => 'Thanh Hoá', 'phuong_an_b' => 
            'Nghệ An', 'phuong_an_c' => 'Hà Tĩnh',
             'phuong_an_d' => 'Quảng Bình', 'dap_an' => 'A'],
            ['noi_dung' => 'Địa đạo Vĩnh Mốc nằm ở tỉnh nào?', 
            'linh_vuc_id' => 7, 
            'phuong_an_a' => 'Củ Chi ', 'phuong_an_b' => 
            'Quảng Trị', 'phuong_an_c' => 'Cần Thơ',
             'phuong_an_d' => 'Bạc Liệu', 'dap_an' => 'B'],    
        ]);
    }
}
