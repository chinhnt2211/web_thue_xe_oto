<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    City::factory()->create([
        "id" => "01",
        "name" => "Hà Nội",
        "slug" => "ha-noi",
        "type" => "thanh-pho",
        "name_with_type" => "Thành phố Hà Nội",
    ]);
    City::factory()->create([
        "id" => "02",
        "name" => "Hà Giang",
        "slug" => "ha-giang",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Hà Giang",
    ]);
    City::factory()->create([
        "id" => "04",
        "name" => "Cao Bằng",
        "slug" => "cao-bang",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Cao Bằng",
    ]);
    City::factory()->create([
        "id" => "06",
        "name" => "Bắc Kạn",
        "slug" => "bac-kan",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Bắc Kạn",
    ]);
    City::factory()->create([
        "id" => "08",
        "name" => "Tuyên Quang",
        "slug" => "tuyen-quang",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Tuyên Quang",
    ]);
    City::factory()->create([
        "id" => "10",
        "name" => "Lào Cai",
        "slug" => "lao-cai",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Lào Cai",
    ]);
    City::factory()->create([
        "id" => "11",
        "name" => "Điện Biên",
        "slug" => "dien-bien",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Điện Biên",
    ]);
    City::factory()->create([
        "id" => "12",
        "name" => "Lai Châu",
        "slug" => "lai-chau",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Lai Châu",
    ]);
    City::factory()->create([
        "id" => "14",
        "name" => "Sơn La",
        "slug" => "son-la",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Sơn La",
    ]);
    City::factory()->create([
        "id" => "15",
        "name" => "Yên Bái",
        "slug" => "yen-bai",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Yên Bái",
    ]);
    City::factory()->create([
        "id" => "17",
        "name" => "Hoà Bình",
        "slug" => "hoa-binh",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Hoà Bình",
    ]);
    City::factory()->create([
        "id" => "19",
        "name" => "Thái Nguyên",
        "slug" => "thai-nguyen",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Thái Nguyên",
    ]);
    City::factory()->create([
        "id" => "20",
        "name" => "Lạng Sơn",
        "slug" => "lang-son",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Lạng Sơn",
    ]);
    City::factory()->create([
        "id" => "22",
        "name" => "Quảng Ninh",
        "slug" => "quang-ninh",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Quảng Ninh",
    ]);
    City::factory()->create([
        "id" => "24",
        "name" => "Bắc Giang",
        "slug" => "bac-giang",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Bắc Giang",
    ]);
    City::factory()->create([
        "id" => "25",
        "name" => "Phú Thọ",
        "slug" => "phu-tho",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Phú Thọ",
    ]);
    City::factory()->create([
        "id" => "26",
        "name" => "Vĩnh Phúc",
        "slug" => "vinh-phuc",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Vĩnh Phúc",
    ]);
    City::factory()->create([
        "id" => "27",
        "name" => "Bắc Ninh",
        "slug" => "bac-ninh",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Bắc Ninh",
    ]);
    City::factory()->create([
        "id" => "30",
        "name" => "Hải Dương",
        "slug" => "hai-duong",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Hải Dương",
    ]);
    City::factory()->create([
        "id" => "31",
        "name" => "Hải Phòng",
        "slug" => "hai-phong",
        "type" => "thanh-pho",
        "name_with_type" => "Thành phố Hải Phòng",
    ]);
    City::factory()->create([
        "id" => "33",
        "name" => "Hưng Yên",
        "slug" => "hung-yen",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Hưng Yên",
    ]);
    City::factory()->create([
        "id" => "34",
        "name" => "Thái Bình",
        "slug" => "thai-binh",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Thái Bình",
    ]);
    City::factory()->create([
        "id" => "35",
        "name" => "Hà Nam",
        "slug" => "ha-nam",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Hà Nam",
    ]);
    City::factory()->create([
        "id" => "36",
        "name" => "Nam Định",
        "slug" => "nam-dinh",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Nam Định",
    ]);
    City::factory()->create([
        "id" => "37",
        "name" => "Ninh Bình",
        "slug" => "ninh-binh",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Ninh Bình",
    ]);
    City::factory()->create([
        "id" => "38",
        "name" => "Thanh Hóa",
        "slug" => "thanh-hoa",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Thanh Hóa",
    ]);
    City::factory()->create([
        "id" => "40",
        "name" => "Nghệ An",
        "slug" => "nghe-an",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Nghệ An",
    ]);
    City::factory()->create([
        "id" => "42",
        "name" => "Hà Tĩnh",
        "slug" => "ha-tinh",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Hà Tĩnh",
    ]);
    City::factory()->create([
        "id" => "44",
        "name" => "Quảng Bình",
        "slug" => "quang-binh",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Quảng Bình",
    ]);
    City::factory()->create([
        "id" => "45",
        "name" => "Quảng Trị",
        "slug" => "quang-tri",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Quảng Trị",
    ]);
    City::factory()->create([
        "id" => "46",
        "name" => "Thừa Thiên Huế",
        "slug" => "thua-thien-hue",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Thừa Thiên Huế",
    ]);
    City::factory()->create([
        "id" => "48",
        "name" => "Đà Nẵng",
        "slug" => "da-nang",
        "type" => "thanh-pho",
        "name_with_type" => "Thành phố Đà Nẵng",
    ]);
    City::factory()->create([
        "id" => "49",
        "name" => "Quảng Nam",
        "slug" => "quang-nam",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Quảng Nam",
    ]);
    City::factory()->create([
        "id" => "51",
        "name" => "Quảng Ngãi",
        "slug" => "quang-ngai",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Quảng Ngãi",
    ]);
    City::factory()->create([
        "id" => "52",
        "name" => "Bình Định",
        "slug" => "binh-dinh",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Bình Định",
    ]);
    City::factory()->create([
        "id" => "54",
        "name" => "Phú Yên",
        "slug" => "phu-yen",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Phú Yên",
    ]);
    City::factory()->create([
        "id" => "56",
        "name" => "Khánh Hòa",
        "slug" => "khanh-hoa",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Khánh Hòa",
    ]);
    City::factory()->create([
        "id" => "58",
        "name" => "Ninh Thuận",
        "slug" => "ninh-thuan",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Ninh Thuận",
    ]);
    City::factory()->create([
        "id" => "60",
        "name" => "Bình Thuận",
        "slug" => "binh-thuan",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Bình Thuận",
    ]);
    City::factory()->create([
        "id" => "62",
        "name" => "Kon Tum",
        "slug" => "kon-tum",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Kon Tum",
    ]);
    City::factory()->create([
        "id" => "64",
        "name" => "Gia Lai",
        "slug" => "gia-lai",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Gia Lai",
    ]);
    City::factory()->create([
        "id" => "66",
        "name" => "Đắk Lắk",
        "slug" => "dak-lak",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Đắk Lắk",
    ]);
    City::factory()->create([
        "id" => "67",
        "name" => "Đắk Nông",
        "slug" => "dak-nong",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Đắk Nông",
    ]);
    City::factory()->create([
        "id" => "68",
        "name" => "Lâm Đồng",
        "slug" => "lam-dong",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Lâm Đồng",
    ]);
    City::factory()->create([
        "id" => "70",
        "name" => "Bình Phước",
        "slug" => "binh-phuoc",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Bình Phước",
    ]);
    City::factory()->create([
        "id" => "72",
        "name" => "Tây Ninh",
        "slug" => "tay-ninh",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Tây Ninh",
    ]);
    City::factory()->create([
        "id" => "74",
        "name" => "Bình Dương",
        "slug" => "binh-duong",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Bình Dương",
    ]);
    City::factory()->create([
        "id" => "75",
        "name" => "Đồng Nai",
        "slug" => "dong-nai",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Đồng Nai",
    ]);
    City::factory()->create([
        "id" => "77",
        "name" => "Bà Rịa - Vũng Tàu",
        "slug" => "ba-ria-vung-tau",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Bà Rịa - Vũng Tàu",
    ]);
    City::factory()->create([
        "id" => "79",
        "name" => "Hồ Chí Minh",
        "slug" => "ho-chi-minh",
        "type" => "thanh-pho",
        "name_with_type" => "Thành phố Hồ Chí Minh",
    ]);
    City::factory()->create([
        "id" => "80",
        "name" => "Long An",
        "slug" => "long-an",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Long An",
    ]);
    City::factory()->create([
        "id" => "82",
        "name" => "Tiền Giang",
        "slug" => "tien-giang",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Tiền Giang",
    ]);
    City::factory()->create([
        "id" => "83",
        "name" => "Bến Tre",
        "slug" => "ben-tre",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Bến Tre",
    ]);
    City::factory()->create([
        "id" => "84",
        "name" => "Trà Vinh",
        "slug" => "tra-vinh",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Trà Vinh",
    ]);
    City::factory()->create([
        "id" => "86",
        "name" => "Vĩnh Long",
        "slug" => "vinh-long",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Vĩnh Long",
    ]);
    City::factory()->create([
        "id" => "87",
        "name" => "Đồng Tháp",
        "slug" => "dong-thap",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Đồng Tháp",
    ]);
    City::factory()->create([
        "id" => "89",
        "name" => "An Giang",
        "slug" => "an-giang",
        "type" => "tinh",
        "name_with_type" => "Tỉnh An Giang",
    ]);
    City::factory()->create([
        "id" => "91",
        "name" => "Kiên Giang",
        "slug" => "kien-giang",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Kiên Giang",
    ]);
    City::factory()->create([
        "id" => "92",
        "name" => "Cần Thơ",
        "slug" => "can-tho",
        "type" => "thanh-pho",
        "name_with_type" => "Thành phố Cần Thơ",
    ]);
    City::factory()->create([
        "id" => "93",
        "name" => "Hậu Giang",
        "slug" => "hau-giang",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Hậu Giang",
    ]);
    City::factory()->create([
        "id" => "94",
        "name" => "Sóc Trăng",
        "slug" => "soc-trang",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Sóc Trăng",
    ]);
    City::factory()->create([
        "id" => "95",
        "name" => "Bạc Liêu",
        "slug" => "bac-lieu",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Bạc Liêu",
    ]);
    City::factory()->create([
        "id" => "96",
        "name" => "Cà Mau",
        "slug" => "ca-mau",
        "type" => "tinh",
        "name_with_type" => "Tỉnh Cà Mau",
    ]);

    }
}
