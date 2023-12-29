<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\orders;

class OrderSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();

        orders::create([ //1+2 : idsp
            'id' => 1,
            'name' => 'Trần Hồng Đào',
            'date' => '2023/11/20',
            'address' => 'Thôn Tân Lập - Xã Tân Lân - huyện Cần Đước - Long An',
            'phone' => '0965 432 111',
            'status' => 'Đã đặt hàng',
            'enable' => 1,
            'total' => 484000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([ // 1
            'id' => 2,
            'name' => 'Nguyễn Hồng Thúy',
            'date' => '2023/11/21',
            'address' => 'số 26 - đường Nguyễn Gia Trí - phường 10 - quận Gò Vấp - Hồ Chí Minh',
            'phone' => '0345 422 121',
            'status' => 'Đã đặt hàng',
            'enable' => 1,
            'total' => 329000,
            'payment_method' => 'MOMO',
            'user_id' => 2,
        ]);
        orders::create([//2
            'id' => 3,
            'name' => 'Huỳnh Thị Hồng Thắm',
            'date' => '2023/11/30',
            'address' => 'số 15 - đường Nguyễn Hữu Trí - phường 10 - quận Bình Thạnh - Hồ Chí Minh',
            'phone' => '0346 432 121',
            'status' => 'Đang chuẩn bị',
            'enable' => 1,
            'total' => 155000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//2
            'id' => 4,
            'name' => 'Hồ Thị Thúy Hoa',
            'date' => '2023/11/25',
            'address' => 'số 5 - đường Ung Văn Khiêm - phường 6 - quận Gò Vấp - Hồ Chí Minh',
            'phone' => '0365 332 109',
            'status' => 'Đang chuẩn bị',
            'enable' => 1,
            'total' => 155000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//5
            'id' => 5,
            'name' => 'Nguyễn Ánh Đào',
            'date' => '2023/12/01',
            'address' => 'số 26 - đường Hoàng Diệu 2 - phường 5 - TP Thủ Đức - Hồ Chí Minh',
            'phone' => '0365 462 116',
            'status' => 'Đang giao',
            'enable' => 1,
            'total' => 347000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//6
            'id' => 6,
            'name' => 'Nguyễn Hòng Ngọc',
            'date' => '2023/12/09',
            'address' => 'số 6 - đường Nguyễn Gia Trí - phường 10 - quận 1 - Hồ Chí Minh',
            'phone' => '0397 543 287',
            'status' => 'Đang giao',
            'enable' => 1,
            'total' => 276000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//4
            'id' => 7,
            'name' => 'Nguyễn Thị Nguyệt',
            'date' => '2023/12/10',
            'address' => 'số 15 - đường Lê Văn Việt - phường 5 - quận Bình Chánh - Hồ Chí Minh',
            'phone' => '0343 123 189',
            'status' => 'Đang giao',
            'enable' => 1,
            'total' => 150000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//13
            'id' => 8,
            'name' => 'Nguyễn Văn Hòa',
            'date' => '2023/12/10',
            'address' => 'số 26 - đường Võ Thị Sáu - phường 10 - quận Gò Vấp - Hồ Chí Minh',
            'phone' => '0393 432 132',
            'status' => 'Thành công',
            'enable' => 1,
            'total' => 270000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//5
            'id' => 9,
            'name' => 'Nguyễn Ngọc Mai',
            'date' => '2023/12/11',
            'address' => 'số 26 - đường Nguyễn Gia Nghĩa - phường 6 - quận Gò Vấp - Hồ Chí Minh',
            'phone' => '0965 432 110',
            'status' => 'Thành công',
            'enable' => 1,
            'total' => 347000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//8
            'id' => 10,
            'name' => 'Nguyễn Chánh Kiệt',
            'date' => '2023/12/11',
            'address' => 'số 26 - đường Tạ Quang Bửu - phường Linh Trung - TP Thủ Đức  - Hồ Chí Minh',
            'phone' => '0955 432 231',
            'status' => 'Thành công',
            'enable' => 1,
            'total' => 150000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//20
            'id' => 11,
            'name' => 'Nguyễn Ngọc Linh',
            'date' => '2023/12/11',
            'address' => 'số 16 - đường Võ VĂn Ngân - phường 9 - TP Thủ Đức - Hồ Chí Minh',
            'phone' => '0975 432 223',
            'status' => 'Đang giao',
            'enable' => 1,
            'total' => 250000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//8
            'id' => 12,
            'name' => 'Nguyễn Văn Minh',
            'date' => '2023/12/12',
            'address' => 'Thôn Tân Lập / Xã Tân Hòa / huyện Cần Nước / Long An',
            'phone' => '0347 543 187',
            'status' => 'Đang chuẩn bị',
            'enable' => 1,
            'total' => 150000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//9
            'id' => 13,
            'name' => 'Nguyễn Ngọc Ánh',
            'date' => '2023/12/15',
            'address' => 'số 7 - đường Kha Vạn Cân - phường 5 - TP THủ Đức - Hồ Chí Minh',
            'phone' => '0346 442 144',
            'status' => 'Đang chuẩn bị',
            'enable' => 1,
            'total' => 259000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//12
            'id' => 14,
            'name' => 'Nguyễn Thanh Mai',
            'date' => '2023/12/15',
            'address' => 'số 26 - đường Nguyễn Hữu Cảnh - phường 3 - quận Gò Vấp - Hồ Chí Minh',
            'phone' => '0355 432 122',
            'status' => 'Thành công',
            'enable' => 1,
            'total' => 250000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//14
            'id' => 15,
            'name' => 'Nguyễn Ngọc Nữ',
            'date' => '2023/12/16',
            'address' => 'số 17 - đường Nguyễn Gia Trí - phường 5 - quận Gò Vấp - Hồ Chí Minh',
            'phone' => '0394 432 196',
            'status' => 'Đang chuẩn bị',
            'enable' => 1,
            'total' =>  375000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//9
            'id' => 16,
            'name' => 'Nguyễn NHư Quỳnh',
            'date' => '2023/12/17',
            'address' => 'số 5 - đường Lê Lợi - phường An Hòa - quận 3 - Hồ Chí Minh',
            'phone' => '0258 432 189',
            'status' => 'Đã đặt hàng',
            'enable' => 1,
            'total' => 259000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//9
            'id' => 17,
            'name' => 'Đào Thị Anh',
            'date' => '2023/12/20',
            'address' => 'số 123/26 - đường Nguyễn Hữa Cảnh - phường 5 - quận Gò Vấp - Hồ Chí Minh',
            'phone' => '0347 432 267',
            'status' => 'Đang giao hàng',
            'enable' => 1,
            'total' => 259000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//12
            'id' => 18,
            'name' => 'Nguyễn Hồng Đào',
            'date' => '2023/12/20',
            'address' => 'số 126/23 - đường Nguyễn Ngọc Trinh - phường 5 - quận Gò Vấp - Hồ Chí Minh',
            'phone' => '0345 432 189',
            'status' => 'Đã đặt hàng',
            'enable' => 1,
            'total' => 250000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//15
            'id' => 19,
            'name' => 'Nguyễn Ánh Nguyệt',
            'date' => '2023/12/22',
            'address' => 'số 263/15/12 - đường Nguyễn Du - phường 5 - quận Gò Vấp - Hồ Chí Minh',
            'phone' => '0937 890 123',
            'status' => 'Đang giao hàng',
            'enable' => 1,
            'total' => 875000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
        orders::create([//21
            'id' => 20,
            'name' => 'Nguyễn Như Ngọc',
            'date' => '2023/12/25',
            'address' => 'số 22 - đường Nguyễn Gia Trí - phường 5 - quận Gò Vấp - Hồ Chí Minh',
            'phone' => '0985 234 567',
            'status' => 'Đã đặt hàng',
            'enable' => 1,
            'total' => 150000,
            'payment_method' => 'COD',
            'user_id' => 2,
        ]);
    }
    
}