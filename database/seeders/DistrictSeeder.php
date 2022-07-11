<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::factory()->create([
            "id" => "001",
            "name" => "Ba Đình",
            "type" => "quan",
            "slug" => "ba-dinh",
            "name_with_type" => "Quận Ba Đình",
            "path" => "Ba Đình, Hà Nội",
            "path_with_type" => "Quận Ba Đình, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "002",
            "name" => "Hoàn Kiếm",
            "type" => "quan",
            "slug" => "hoan-kiem",
            "name_with_type" => "Quận Hoàn Kiếm",
            "path" => "Hoàn Kiếm, Hà Nội",
            "path_with_type" => "Quận Hoàn Kiếm, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "003",
            "name" => "Tây Hồ",
            "type" => "quan",
            "slug" => "tay-ho",
            "name_with_type" => "Quận Tây Hồ",
            "path" => "Tây Hồ, Hà Nội",
            "path_with_type" => "Quận Tây Hồ, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "004",
            "name" => "Long Biên",
            "type" => "quan",
            "slug" => "long-bien",
            "name_with_type" => "Quận Long Biên",
            "path" => "Long Biên, Hà Nội",
            "path_with_type" => "Quận Long Biên, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "005",
            "name" => "Cầu Giấy",
            "type" => "quan",
            "slug" => "cau-giay",
            "name_with_type" => "Quận Cầu Giấy",
            "path" => "Cầu Giấy, Hà Nội",
            "path_with_type" => "Quận Cầu Giấy, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "006",
            "name" => "Đống Đa",
            "type" => "quan",
            "slug" => "dong-da",
            "name_with_type" => "Quận Đống Đa",
            "path" => "Đống Đa, Hà Nội",
            "path_with_type" => "Quận Đống Đa, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "007",
            "name" => "Hai Bà Trưng",
            "type" => "quan",
            "slug" => "hai-ba-trung",
            "name_with_type" => "Quận Hai Bà Trưng",
            "path" => "Hai Bà Trưng, Hà Nội",
            "path_with_type" => "Quận Hai Bà Trưng, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "008",
            "name" => "Hoàng Mai",
            "type" => "quan",
            "slug" => "hoang-mai",
            "name_with_type" => "Quận Hoàng Mai",
            "path" => "Hoàng Mai, Hà Nội",
            "path_with_type" => "Quận Hoàng Mai, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "009",
            "name" => "Thanh Xuân",
            "type" => "quan",
            "slug" => "thanh-xuan",
            "name_with_type" => "Quận Thanh Xuân",
            "path" => "Thanh Xuân, Hà Nội",
            "path_with_type" => "Quận Thanh Xuân, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "016",
            "name" => "Sóc Sơn",
            "type" => "huyen",
            "slug" => "soc-son",
            "name_with_type" => "Huyện Sóc Sơn",
            "path" => "Sóc Sơn, Hà Nội",
            "path_with_type" => "Huyện Sóc Sơn, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "017",
            "name" => "Đông Anh",
            "type" => "huyen",
            "slug" => "dong-anh",
            "name_with_type" => "Huyện Đông Anh",
            "path" => "Đông Anh, Hà Nội",
            "path_with_type" => "Huyện Đông Anh, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "018",
            "name" => "Gia Lâm",
            "type" => "huyen",
            "slug" => "gia-lam",
            "name_with_type" => "Huyện Gia Lâm",
            "path" => "Gia Lâm, Hà Nội",
            "path_with_type" => "Huyện Gia Lâm, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "019",
            "name" => "Nam Từ Liêm",
            "type" => "quan",
            "slug" => "nam-tu-liem",
            "name_with_type" => "Quận Nam Từ Liêm",
            "path" => "Nam Từ Liêm, Hà Nội",
            "path_with_type" => "Quận Nam Từ Liêm, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "020",
            "name" => "Thanh Trì",
            "type" => "huyen",
            "slug" => "thanh-tri",
            "name_with_type" => "Huyện Thanh Trì",
            "path" => "Thanh Trì, Hà Nội",
            "path_with_type" => "Huyện Thanh Trì, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "021",
            "name" => "Bắc Từ Liêm",
            "type" => "quan",
            "slug" => "bac-tu-liem",
            "name_with_type" => "Quận Bắc Từ Liêm",
            "path" => "Bắc Từ Liêm, Hà Nội",
            "path_with_type" => "Quận Bắc Từ Liêm, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "024",
            "name" => "Hà Giang",
            "type" => "thanh-pho",
            "slug" => "ha-giang",
            "name_with_type" => "Thành phố Hà Giang",
            "path" => "Hà Giang, Hà Giang",
            "path_with_type" => "Thành phố Hà Giang, Tỉnh Hà Giang",
            "city_id" => "02"
        ]);
        District::factory()->create([
            "id" => "026",
            "name" => "Đồng Văn",
            "type" => "huyen",
            "slug" => "dong-van",
            "name_with_type" => "Huyện Đồng Văn",
            "path" => "Đồng Văn, Hà Giang",
            "path_with_type" => "Huyện Đồng Văn, Tỉnh Hà Giang",
            "city_id" => "02"
        ]);
        District::factory()->create([
            "id" => "027",
            "name" => "Mèo Vạc",
            "type" => "huyen",
            "slug" => "meo-vac",
            "name_with_type" => "Huyện Mèo Vạc",
            "path" => "Mèo Vạc, Hà Giang",
            "path_with_type" => "Huyện Mèo Vạc, Tỉnh Hà Giang",
            "city_id" => "02"
        ]);
        District::factory()->create([
            "id" => "028",
            "name" => "Yên Minh",
            "type" => "huyen",
            "slug" => "yen-minh",
            "name_with_type" => "Huyện Yên Minh",
            "path" => "Yên Minh, Hà Giang",
            "path_with_type" => "Huyện Yên Minh, Tỉnh Hà Giang",
            "city_id" => "02"
        ]);
        District::factory()->create([
            "id" => "029",
            "name" => "Quản Bạ",
            "type" => "huyen",
            "slug" => "quan-ba",
            "name_with_type" => "Huyện Quản Bạ",
            "path" => "Quản Bạ, Hà Giang",
            "path_with_type" => "Huyện Quản Bạ, Tỉnh Hà Giang",
            "city_id" => "02"
        ]);
        District::factory()->create([
            "id" => "030",
            "name" => "Vị Xuyên",
            "type" => "huyen",
            "slug" => "vi-xuyen",
            "name_with_type" => "Huyện Vị Xuyên",
            "path" => "Vị Xuyên, Hà Giang",
            "path_with_type" => "Huyện Vị Xuyên, Tỉnh Hà Giang",
            "city_id" => "02"
        ]);
        District::factory()->create([
            "id" => "031",
            "name" => "Bắc Mê",
            "type" => "huyen",
            "slug" => "bac-me",
            "name_with_type" => "Huyện Bắc Mê",
            "path" => "Bắc Mê, Hà Giang",
            "path_with_type" => "Huyện Bắc Mê, Tỉnh Hà Giang",
            "city_id" => "02"
        ]);
        District::factory()->create([
            "id" => "032",
            "name" => "Hoàng Su Phì",
            "type" => "huyen",
            "slug" => "hoang-su-phi",
            "name_with_type" => "Huyện Hoàng Su Phì",
            "path" => "Hoàng Su Phì, Hà Giang",
            "path_with_type" => "Huyện Hoàng Su Phì, Tỉnh Hà Giang",
            "city_id" => "02"
        ]);
        District::factory()->create([
            "id" => "033",
            "name" => "Xín Mần",
            "type" => "huyen",
            "slug" => "xin-man",
            "name_with_type" => "Huyện Xín Mần",
            "path" => "Xín Mần, Hà Giang",
            "path_with_type" => "Huyện Xín Mần, Tỉnh Hà Giang",
            "city_id" => "02"
        ]);
        District::factory()->create([
            "id" => "034",
            "name" => "Bắc Quang",
            "type" => "huyen",
            "slug" => "bac-quang",
            "name_with_type" => "Huyện Bắc Quang",
            "path" => "Bắc Quang, Hà Giang",
            "path_with_type" => "Huyện Bắc Quang, Tỉnh Hà Giang",
            "city_id" => "02"
        ]);
        District::factory()->create([
            "id" => "035",
            "name" => "Quang Bình",
            "type" => "huyen",
            "slug" => "quang-binh",
            "name_with_type" => "Huyện Quang Bình",
            "path" => "Quang Bình, Hà Giang",
            "path_with_type" => "Huyện Quang Bình, Tỉnh Hà Giang",
            "city_id" => "02"
        ]);
        District::factory()->create([
            "id" => "040",
            "name" => "Cao Bằng",
            "type" => "thanh-pho",
            "slug" => "cao-bang",
            "name_with_type" => "Thành phố Cao Bằng",
            "path" => "Cao Bằng, Cao Bằng",
            "path_with_type" => "Thành phố Cao Bằng, Tỉnh Cao Bằng",
            "city_id" => "04"
        ]);
        District::factory()->create([
            "id" => "042",
            "name" => "Bảo Lâm",
            "type" => "huyen",
            "slug" => "bao-lam",
            "name_with_type" => "Huyện Bảo Lâm",
            "path" => "Bảo Lâm, Cao Bằng",
            "path_with_type" => "Huyện Bảo Lâm, Tỉnh Cao Bằng",
            "city_id" => "04"
        ]);
        District::factory()->create([
            "id" => "043",
            "name" => "Bảo Lạc",
            "type" => "huyen",
            "slug" => "bao-lac",
            "name_with_type" => "Huyện Bảo Lạc",
            "path" => "Bảo Lạc, Cao Bằng",
            "path_with_type" => "Huyện Bảo Lạc, Tỉnh Cao Bằng",
            "city_id" => "04"
        ]);
        District::factory()->create([
            "id" => "045",
            "name" => "Hà Quảng",
            "type" => "huyen",
            "slug" => "ha-quang",
            "name_with_type" => "Huyện Hà Quảng",
            "path" => "Hà Quảng, Cao Bằng",
            "path_with_type" => "Huyện Hà Quảng, Tỉnh Cao Bằng",
            "city_id" => "04"
        ]);
        District::factory()->create([
            "id" => "047",
            "name" => "Trùng Khánh",
            "type" => "huyen",
            "slug" => "trung-khanh",
            "name_with_type" => "Huyện Trùng Khánh",
            "path" => "Trùng Khánh, Cao Bằng",
            "path_with_type" => "Huyện Trùng Khánh, Tỉnh Cao Bằng",
            "city_id" => "04"
        ]);
        District::factory()->create([
            "id" => "048",
            "name" => "Hạ Lang",
            "type" => "huyen",
            "slug" => "ha-lang",
            "name_with_type" => "Huyện Hạ Lang",
            "path" => "Hạ Lang, Cao Bằng",
            "path_with_type" => "Huyện Hạ Lang, Tỉnh Cao Bằng",
            "city_id" => "04"
        ]);
        District::factory()->create([
            "id" => "049",
            "name" => "Quảng Hòa",
            "type" => "huyen",
            "slug" => "quang-hoa",
            "name_with_type" => "Huyện Quảng Hòa",
            "path" => "Quảng Hòa, Cao Bằng",
            "path_with_type" => "Huyện Quảng Hòa, Tỉnh Cao Bằng",
            "city_id" => "04"
        ]);
        District::factory()->create([
            "id" => "051",
            "name" => "Hoà An",
            "type" => "huyen",
            "slug" => "hoa-an",
            "name_with_type" => "Huyện Hoà An",
            "path" => "Hoà An, Cao Bằng",
            "path_with_type" => "Huyện Hoà An, Tỉnh Cao Bằng",
            "city_id" => "04"
        ]);
        District::factory()->create([
            "id" => "052",
            "name" => "Nguyên Bình",
            "type" => "huyen",
            "slug" => "nguyen-binh",
            "name_with_type" => "Huyện Nguyên Bình",
            "path" => "Nguyên Bình, Cao Bằng",
            "path_with_type" => "Huyện Nguyên Bình, Tỉnh Cao Bằng",
            "city_id" => "04"
        ]);
        District::factory()->create([
            "id" => "053",
            "name" => "Thạch An",
            "type" => "huyen",
            "slug" => "thach-an",
            "name_with_type" => "Huyện Thạch An",
            "path" => "Thạch An, Cao Bằng",
            "path_with_type" => "Huyện Thạch An, Tỉnh Cao Bằng",
            "city_id" => "04"
        ]);
        District::factory()->create([
            "id" => "058",
            "name" => "Bắc Kạn",
            "type" => "thanh-pho",
            "slug" => "bac-kan",
            "name_with_type" => "Thành Phố Bắc Kạn",
            "path" => "Bắc Kạn, Bắc Kạn",
            "path_with_type" => "Thành Phố Bắc Kạn, Tỉnh Bắc Kạn",
            "city_id" => "06"
        ]);
        District::factory()->create([
            "id" => "060",
            "name" => "Pác Nặm",
            "type" => "huyen",
            "slug" => "pac-nam",
            "name_with_type" => "Huyện Pác Nặm",
            "path" => "Pác Nặm, Bắc Kạn",
            "path_with_type" => "Huyện Pác Nặm, Tỉnh Bắc Kạn",
            "city_id" => "06"
        ]);
        District::factory()->create([
            "id" => "061",
            "name" => "Ba Bể",
            "type" => "huyen",
            "slug" => "ba-be",
            "name_with_type" => "Huyện Ba Bể",
            "path" => "Ba Bể, Bắc Kạn",
            "path_with_type" => "Huyện Ba Bể, Tỉnh Bắc Kạn",
            "city_id" => "06"
        ]);
        District::factory()->create([
            "id" => "062",
            "name" => "Ngân Sơn",
            "type" => "huyen",
            "slug" => "ngan-son",
            "name_with_type" => "Huyện Ngân Sơn",
            "path" => "Ngân Sơn, Bắc Kạn",
            "path_with_type" => "Huyện Ngân Sơn, Tỉnh Bắc Kạn",
            "city_id" => "06"
        ]);
        District::factory()->create([
            "id" => "063",
            "name" => "Bạch Thông",
            "type" => "huyen",
            "slug" => "bach-thong",
            "name_with_type" => "Huyện Bạch Thông",
            "path" => "Bạch Thông, Bắc Kạn",
            "path_with_type" => "Huyện Bạch Thông, Tỉnh Bắc Kạn",
            "city_id" => "06"
        ]);
        District::factory()->create([
            "id" => "064",
            "name" => "Chợ Đồn",
            "type" => "huyen",
            "slug" => "cho-don",
            "name_with_type" => "Huyện Chợ Đồn",
            "path" => "Chợ Đồn, Bắc Kạn",
            "path_with_type" => "Huyện Chợ Đồn, Tỉnh Bắc Kạn",
            "city_id" => "06"
        ]);
        District::factory()->create([
            "id" => "065",
            "name" => "Chợ Mới",
            "type" => "huyen",
            "slug" => "cho-moi",
            "name_with_type" => "Huyện Chợ Mới",
            "path" => "Chợ Mới, Bắc Kạn",
            "path_with_type" => "Huyện Chợ Mới, Tỉnh Bắc Kạn",
            "city_id" => "06"
        ]);
        District::factory()->create([
            "id" => "066",
            "name" => "Na Rì",
            "type" => "huyen",
            "slug" => "na-ri",
            "name_with_type" => "Huyện Na Rì",
            "path" => "Na Rì, Bắc Kạn",
            "path_with_type" => "Huyện Na Rì, Tỉnh Bắc Kạn",
            "city_id" => "06"
        ]);
        District::factory()->create([
            "id" => "070",
            "name" => "Tuyên Quang",
            "type" => "thanh-pho",
            "slug" => "tuyen-quang",
            "name_with_type" => "Thành phố Tuyên Quang",
            "path" => "Tuyên Quang, Tuyên Quang",
            "path_with_type" => "Thành phố Tuyên Quang, Tỉnh Tuyên Quang",
            "city_id" => "08"
        ]);
        District::factory()->create([
            "id" => "071",
            "name" => "Lâm Bình",
            "type" => "huyen",
            "slug" => "lam-binh",
            "name_with_type" => "Huyện Lâm Bình",
            "path" => "Lâm Bình, Tuyên Quang",
            "path_with_type" => "Huyện Lâm Bình, Tỉnh Tuyên Quang",
            "city_id" => "08"
        ]);
        District::factory()->create([
            "id" => "072",
            "name" => "Na Hang",
            "type" => "huyen",
            "slug" => "na-hang",
            "name_with_type" => "Huyện Na Hang",
            "path" => "Na Hang, Tuyên Quang",
            "path_with_type" => "Huyện Na Hang, Tỉnh Tuyên Quang",
            "city_id" => "08"
        ]);
        District::factory()->create([
            "id" => "073",
            "name" => "Chiêm Hóa",
            "type" => "huyen",
            "slug" => "chiem-hoa",
            "name_with_type" => "Huyện Chiêm Hóa",
            "path" => "Chiêm Hóa, Tuyên Quang",
            "path_with_type" => "Huyện Chiêm Hóa, Tỉnh Tuyên Quang",
            "city_id" => "08"
        ]);
        District::factory()->create([
            "id" => "074",
            "name" => "Hàm Yên",
            "type" => "huyen",
            "slug" => "ham-yen",
            "name_with_type" => "Huyện Hàm Yên",
            "path" => "Hàm Yên, Tuyên Quang",
            "path_with_type" => "Huyện Hàm Yên, Tỉnh Tuyên Quang",
            "city_id" => "08"
        ]);
        District::factory()->create([
            "id" => "075",
            "name" => "Yên Sơn",
            "type" => "huyen",
            "slug" => "yen-son",
            "name_with_type" => "Huyện Yên Sơn",
            "path" => "Yên Sơn, Tuyên Quang",
            "path_with_type" => "Huyện Yên Sơn, Tỉnh Tuyên Quang",
            "city_id" => "08"
        ]);
        District::factory()->create([
            "id" => "076",
            "name" => "Sơn Dương",
            "type" => "huyen",
            "slug" => "son-duong",
            "name_with_type" => "Huyện Sơn Dương",
            "path" => "Sơn Dương, Tuyên Quang",
            "path_with_type" => "Huyện Sơn Dương, Tỉnh Tuyên Quang",
            "city_id" => "08"
        ]);
        District::factory()->create([
            "id" => "080",
            "name" => "Lào Cai",
            "type" => "thanh-pho",
            "slug" => "lao-cai",
            "name_with_type" => "Thành phố Lào Cai",
            "path" => "Lào Cai, Lào Cai",
            "path_with_type" => "Thành phố Lào Cai, Tỉnh Lào Cai",
            "city_id" => "10"
        ]);
        District::factory()->create([
            "id" => "082",
            "name" => "Bát Xát",
            "type" => "huyen",
            "slug" => "bat-xat",
            "name_with_type" => "Huyện Bát Xát",
            "path" => "Bát Xát, Lào Cai",
            "path_with_type" => "Huyện Bát Xát, Tỉnh Lào Cai",
            "city_id" => "10"
        ]);
        District::factory()->create([
            "id" => "083",
            "name" => "Mường Khương",
            "type" => "huyen",
            "slug" => "muong-khuong",
            "name_with_type" => "Huyện Mường Khương",
            "path" => "Mường Khương, Lào Cai",
            "path_with_type" => "Huyện Mường Khương, Tỉnh Lào Cai",
            "city_id" => "10"
        ]);
        District::factory()->create([
            "id" => "084",
            "name" => "Si Ma Cai",
            "type" => "huyen",
            "slug" => "si-ma-cai",
            "name_with_type" => "Huyện Si Ma Cai",
            "path" => "Si Ma Cai, Lào Cai",
            "path_with_type" => "Huyện Si Ma Cai, Tỉnh Lào Cai",
            "city_id" => "10"
        ]);
        District::factory()->create([
            "id" => "085",
            "name" => "Bắc Hà",
            "type" => "huyen",
            "slug" => "bac-ha",
            "name_with_type" => "Huyện Bắc Hà",
            "path" => "Bắc Hà, Lào Cai",
            "path_with_type" => "Huyện Bắc Hà, Tỉnh Lào Cai",
            "city_id" => "10"
        ]);
        District::factory()->create([
            "id" => "086",
            "name" => "Bảo Thắng",
            "type" => "huyen",
            "slug" => "bao-thang",
            "name_with_type" => "Huyện Bảo Thắng",
            "path" => "Bảo Thắng, Lào Cai",
            "path_with_type" => "Huyện Bảo Thắng, Tỉnh Lào Cai",
            "city_id" => "10"
        ]);
        District::factory()->create([
            "id" => "087",
            "name" => "Bảo Yên",
            "type" => "huyen",
            "slug" => "bao-yen",
            "name_with_type" => "Huyện Bảo Yên",
            "path" => "Bảo Yên, Lào Cai",
            "path_with_type" => "Huyện Bảo Yên, Tỉnh Lào Cai",
            "city_id" => "10"
        ]);
        District::factory()->create([
            "id" => "088",
            "name" => "Sa Pa",
            "type" => "thi-xa",
            "slug" => "sa-pa",
            "name_with_type" => "Thị xã Sa Pa",
            "path" => "Sa Pa, Lào Cai",
            "path_with_type" => "Thị xã Sa Pa, Tỉnh Lào Cai",
            "city_id" => "10"
        ]);
        District::factory()->create([
            "id" => "089",
            "name" => "Văn Bàn",
            "type" => "huyen",
            "slug" => "van-ban",
            "name_with_type" => "Huyện Văn Bàn",
            "path" => "Văn Bàn, Lào Cai",
            "path_with_type" => "Huyện Văn Bàn, Tỉnh Lào Cai",
            "city_id" => "10"
        ]);
        District::factory()->create([
            "id" => "094",
            "name" => "Điện Biên Phủ",
            "type" => "thanh-pho",
            "slug" => "dien-bien-phu",
            "name_with_type" => "Thành phố Điện Biên Phủ",
            "path" => "Điện Biên Phủ, Điện Biên",
            "path_with_type" => "Thành phố Điện Biên Phủ, Tỉnh Điện Biên",
            "city_id" => "11"
        ]);
        District::factory()->create([
            "id" => "095",
            "name" => "Mường Lay",
            "type" => "thi-xa",
            "slug" => "muong-lay",
            "name_with_type" => "Thị xã Mường Lay",
            "path" => "Mường Lay, Điện Biên",
            "path_with_type" => "Thị xã Mường Lay, Tỉnh Điện Biên",
            "city_id" => "11"
        ]);
        District::factory()->create([
            "id" => "096",
            "name" => "Mường Nhé",
            "type" => "huyen",
            "slug" => "muong-nhe",
            "name_with_type" => "Huyện Mường Nhé",
            "path" => "Mường Nhé, Điện Biên",
            "path_with_type" => "Huyện Mường Nhé, Tỉnh Điện Biên",
            "city_id" => "11"
        ]);
        District::factory()->create([
            "id" => "097",
            "name" => "Mường Chà",
            "type" => "huyen",
            "slug" => "muong-cha",
            "name_with_type" => "Huyện Mường Chà",
            "path" => "Mường Chà, Điện Biên",
            "path_with_type" => "Huyện Mường Chà, Tỉnh Điện Biên",
            "city_id" => "11"
        ]);
        District::factory()->create([
            "id" => "098",
            "name" => "Tủa Chùa",
            "type" => "huyen",
            "slug" => "tua-chua",
            "name_with_type" => "Huyện Tủa Chùa",
            "path" => "Tủa Chùa, Điện Biên",
            "path_with_type" => "Huyện Tủa Chùa, Tỉnh Điện Biên",
            "city_id" => "11"
        ]);
        District::factory()->create([
            "id" => "099",
            "name" => "Tuần Giáo",
            "type" => "huyen",
            "slug" => "tuan-giao",
            "name_with_type" => "Huyện Tuần Giáo",
            "path" => "Tuần Giáo, Điện Biên",
            "path_with_type" => "Huyện Tuần Giáo, Tỉnh Điện Biên",
            "city_id" => "11"
        ]);
        District::factory()->create([
            "id" => "100",
            "name" => "Điện Biên",
            "type" => "huyen",
            "slug" => "dien-bien",
            "name_with_type" => "Huyện Điện Biên",
            "path" => "Điện Biên, Điện Biên",
            "path_with_type" => "Huyện Điện Biên, Tỉnh Điện Biên",
            "city_id" => "11"
        ]);
        District::factory()->create([
            "id" => "101",
            "name" => "Điện Biên Đông",
            "type" => "huyen",
            "slug" => "dien-bien-dong",
            "name_with_type" => "Huyện Điện Biên Đông",
            "path" => "Điện Biên Đông, Điện Biên",
            "path_with_type" => "Huyện Điện Biên Đông, Tỉnh Điện Biên",
            "city_id" => "11"
        ]);
        District::factory()->create([
            "id" => "102",
            "name" => "Mường Ảng",
            "type" => "huyen",
            "slug" => "muong-ang",
            "name_with_type" => "Huyện Mường Ảng",
            "path" => "Mường Ảng, Điện Biên",
            "path_with_type" => "Huyện Mường Ảng, Tỉnh Điện Biên",
            "city_id" => "11"
        ]);
        District::factory()->create([
            "id" => "103",
            "name" => "Nậm Pồ",
            "type" => "huyen",
            "slug" => "nam-po",
            "name_with_type" => "Huyện Nậm Pồ",
            "path" => "Nậm Pồ, Điện Biên",
            "path_with_type" => "Huyện Nậm Pồ, Tỉnh Điện Biên",
            "city_id" => "11"
        ]);
        District::factory()->create([
            "id" => "105",
            "name" => "Lai Châu",
            "type" => "thanh-pho",
            "slug" => "lai-chau",
            "name_with_type" => "Thành phố Lai Châu",
            "path" => "Lai Châu, Lai Châu",
            "path_with_type" => "Thành phố Lai Châu, Tỉnh Lai Châu",
            "city_id" => "12"
        ]);
        District::factory()->create([
            "id" => "106",
            "name" => "Tam Đường",
            "type" => "huyen",
            "slug" => "tam-duong",
            "name_with_type" => "Huyện Tam Đường",
            "path" => "Tam Đường, Lai Châu",
            "path_with_type" => "Huyện Tam Đường, Tỉnh Lai Châu",
            "city_id" => "12"
        ]);
        District::factory()->create([
            "id" => "107",
            "name" => "Mường Tè",
            "type" => "huyen",
            "slug" => "muong-te",
            "name_with_type" => "Huyện Mường Tè",
            "path" => "Mường Tè, Lai Châu",
            "path_with_type" => "Huyện Mường Tè, Tỉnh Lai Châu",
            "city_id" => "12"
        ]);
        District::factory()->create([
            "id" => "108",
            "name" => "Sìn Hồ",
            "type" => "huyen",
            "slug" => "sin-ho",
            "name_with_type" => "Huyện Sìn Hồ",
            "path" => "Sìn Hồ, Lai Châu",
            "path_with_type" => "Huyện Sìn Hồ, Tỉnh Lai Châu",
            "city_id" => "12"
        ]);
        District::factory()->create([
            "id" => "109",
            "name" => "Phong Thổ",
            "type" => "huyen",
            "slug" => "phong-tho",
            "name_with_type" => "Huyện Phong Thổ",
            "path" => "Phong Thổ, Lai Châu",
            "path_with_type" => "Huyện Phong Thổ, Tỉnh Lai Châu",
            "city_id" => "12"
        ]);
        District::factory()->create([
            "id" => "110",
            "name" => "Than Uyên",
            "type" => "huyen",
            "slug" => "than-uyen",
            "name_with_type" => "Huyện Than Uyên",
            "path" => "Than Uyên, Lai Châu",
            "path_with_type" => "Huyện Than Uyên, Tỉnh Lai Châu",
            "city_id" => "12"
        ]);
        District::factory()->create([
            "id" => "111",
            "name" => "Tân Uyên",
            "type" => "huyen",
            "slug" => "tan-uyen",
            "name_with_type" => "Huyện Tân Uyên",
            "path" => "Tân Uyên, Lai Châu",
            "path_with_type" => "Huyện Tân Uyên, Tỉnh Lai Châu",
            "city_id" => "12"
        ]);
        District::factory()->create([
            "id" => "112",
            "name" => "Nậm Nhùn",
            "type" => "huyen",
            "slug" => "nam-nhun",
            "name_with_type" => "Huyện Nậm Nhùn",
            "path" => "Nậm Nhùn, Lai Châu",
            "path_with_type" => "Huyện Nậm Nhùn, Tỉnh Lai Châu",
            "city_id" => "12"
        ]);
        District::factory()->create([
            "id" => "116",
            "name" => "Sơn La",
            "type" => "thanh-pho",
            "slug" => "son-la",
            "name_with_type" => "Thành phố Sơn La",
            "path" => "Sơn La, Sơn La",
            "path_with_type" => "Thành phố Sơn La, Tỉnh Sơn La",
            "city_id" => "14"
        ]);
        District::factory()->create([
            "id" => "118",
            "name" => "Quỳnh Nhai",
            "type" => "huyen",
            "slug" => "quynh-nhai",
            "name_with_type" => "Huyện Quỳnh Nhai",
            "path" => "Quỳnh Nhai, Sơn La",
            "path_with_type" => "Huyện Quỳnh Nhai, Tỉnh Sơn La",
            "city_id" => "14"
        ]);
        District::factory()->create([
            "id" => "119",
            "name" => "Thuận Châu",
            "type" => "huyen",
            "slug" => "thuan-chau",
            "name_with_type" => "Huyện Thuận Châu",
            "path" => "Thuận Châu, Sơn La",
            "path_with_type" => "Huyện Thuận Châu, Tỉnh Sơn La",
            "city_id" => "14"
        ]);
        District::factory()->create([
            "id" => "120",
            "name" => "Mường La",
            "type" => "huyen",
            "slug" => "muong-la",
            "name_with_type" => "Huyện Mường La",
            "path" => "Mường La, Sơn La",
            "path_with_type" => "Huyện Mường La, Tỉnh Sơn La",
            "city_id" => "14"
        ]);
        District::factory()->create([
            "id" => "121",
            "name" => "Bắc Yên",
            "type" => "huyen",
            "slug" => "bac-yen",
            "name_with_type" => "Huyện Bắc Yên",
            "path" => "Bắc Yên, Sơn La",
            "path_with_type" => "Huyện Bắc Yên, Tỉnh Sơn La",
            "city_id" => "14"
        ]);
        District::factory()->create([
            "id" => "122",
            "name" => "Phù Yên",
            "type" => "huyen",
            "slug" => "phu-yen",
            "name_with_type" => "Huyện Phù Yên",
            "path" => "Phù Yên, Sơn La",
            "path_with_type" => "Huyện Phù Yên, Tỉnh Sơn La",
            "city_id" => "14"
        ]);
        District::factory()->create([
            "id" => "123",
            "name" => "Mộc Châu",
            "type" => "huyen",
            "slug" => "moc-chau",
            "name_with_type" => "Huyện Mộc Châu",
            "path" => "Mộc Châu, Sơn La",
            "path_with_type" => "Huyện Mộc Châu, Tỉnh Sơn La",
            "city_id" => "14"
        ]);
        District::factory()->create([
            "id" => "124",
            "name" => "Yên Châu",
            "type" => "huyen",
            "slug" => "yen-chau",
            "name_with_type" => "Huyện Yên Châu",
            "path" => "Yên Châu, Sơn La",
            "path_with_type" => "Huyện Yên Châu, Tỉnh Sơn La",
            "city_id" => "14"
        ]);
        District::factory()->create([
            "id" => "125",
            "name" => "Mai Sơn",
            "type" => "huyen",
            "slug" => "mai-son",
            "name_with_type" => "Huyện Mai Sơn",
            "path" => "Mai Sơn, Sơn La",
            "path_with_type" => "Huyện Mai Sơn, Tỉnh Sơn La",
            "city_id" => "14"
        ]);
        District::factory()->create([
            "id" => "126",
            "name" => "Sông Mã",
            "type" => "huyen",
            "slug" => "song-ma",
            "name_with_type" => "Huyện Sông Mã",
            "path" => "Sông Mã, Sơn La",
            "path_with_type" => "Huyện Sông Mã, Tỉnh Sơn La",
            "city_id" => "14"
        ]);
        District::factory()->create([
            "id" => "127",
            "name" => "Sốp Cộp",
            "type" => "huyen",
            "slug" => "sop-cop",
            "name_with_type" => "Huyện Sốp Cộp",
            "path" => "Sốp Cộp, Sơn La",
            "path_with_type" => "Huyện Sốp Cộp, Tỉnh Sơn La",
            "city_id" => "14"
        ]);
        District::factory()->create([
            "id" => "128",
            "name" => "Vân Hồ",
            "type" => "huyen",
            "slug" => "van-ho",
            "name_with_type" => "Huyện Vân Hồ",
            "path" => "Vân Hồ, Sơn La",
            "path_with_type" => "Huyện Vân Hồ, Tỉnh Sơn La",
            "city_id" => "14"
        ]);
        District::factory()->create([
            "id" => "132",
            "name" => "Yên Bái",
            "type" => "thanh-pho",
            "slug" => "yen-bai",
            "name_with_type" => "Thành phố Yên Bái",
            "path" => "Yên Bái, Yên Bái",
            "path_with_type" => "Thành phố Yên Bái, Tỉnh Yên Bái",
            "city_id" => "15"
        ]);
        District::factory()->create([
            "id" => "133",
            "name" => "Nghĩa Lộ",
            "type" => "thi-xa",
            "slug" => "nghia-lo",
            "name_with_type" => "Thị xã Nghĩa Lộ",
            "path" => "Nghĩa Lộ, Yên Bái",
            "path_with_type" => "Thị xã Nghĩa Lộ, Tỉnh Yên Bái",
            "city_id" => "15"
        ]);
        District::factory()->create([
            "id" => "135",
            "name" => "Lục Yên",
            "type" => "huyen",
            "slug" => "luc-yen",
            "name_with_type" => "Huyện Lục Yên",
            "path" => "Lục Yên, Yên Bái",
            "path_with_type" => "Huyện Lục Yên, Tỉnh Yên Bái",
            "city_id" => "15"
        ]);
        District::factory()->create([
            "id" => "136",
            "name" => "Văn Yên",
            "type" => "huyen",
            "slug" => "van-yen",
            "name_with_type" => "Huyện Văn Yên",
            "path" => "Văn Yên, Yên Bái",
            "path_with_type" => "Huyện Văn Yên, Tỉnh Yên Bái",
            "city_id" => "15"
        ]);
        District::factory()->create([
            "id" => "137",
            "name" => "Mù Căng Chải",
            "type" => "huyen",
            "slug" => "mu-cang-chai",
            "name_with_type" => "Huyện Mù Căng Chải",
            "path" => "Mù Căng Chải, Yên Bái",
            "path_with_type" => "Huyện Mù Căng Chải, Tỉnh Yên Bái",
            "city_id" => "15"
        ]);
        District::factory()->create([
            "id" => "138",
            "name" => "Trấn Yên",
            "type" => "huyen",
            "slug" => "tran-yen",
            "name_with_type" => "Huyện Trấn Yên",
            "path" => "Trấn Yên, Yên Bái",
            "path_with_type" => "Huyện Trấn Yên, Tỉnh Yên Bái",
            "city_id" => "15"
        ]);
        District::factory()->create([
            "id" => "139",
            "name" => "Trạm Tấu",
            "type" => "huyen",
            "slug" => "tram-tau",
            "name_with_type" => "Huyện Trạm Tấu",
            "path" => "Trạm Tấu, Yên Bái",
            "path_with_type" => "Huyện Trạm Tấu, Tỉnh Yên Bái",
            "city_id" => "15"
        ]);
        District::factory()->create([
            "id" => "140",
            "name" => "Văn Chấn",
            "type" => "huyen",
            "slug" => "van-chan",
            "name_with_type" => "Huyện Văn Chấn",
            "path" => "Văn Chấn, Yên Bái",
            "path_with_type" => "Huyện Văn Chấn, Tỉnh Yên Bái",
            "city_id" => "15"
        ]);
        District::factory()->create([
            "id" => "141",
            "name" => "Yên Bình",
            "type" => "huyen",
            "slug" => "yen-binh",
            "name_with_type" => "Huyện Yên Bình",
            "path" => "Yên Bình, Yên Bái",
            "path_with_type" => "Huyện Yên Bình, Tỉnh Yên Bái",
            "city_id" => "15"
        ]);
        District::factory()->create([
            "id" => "148",
            "name" => "Hòa Bình",
            "type" => "thanh-pho",
            "slug" => "hoa-binh",
            "name_with_type" => "Thành phố Hòa Bình",
            "path" => "Hòa Bình, Hoà Bình",
            "path_with_type" => "Thành phố Hòa Bình, Tỉnh Hoà Bình",
            "city_id" => "17"
        ]);
        District::factory()->create([
            "id" => "150",
            "name" => "Đà Bắc",
            "type" => "huyen",
            "slug" => "da-bac",
            "name_with_type" => "Huyện Đà Bắc",
            "path" => "Đà Bắc, Hoà Bình",
            "path_with_type" => "Huyện Đà Bắc, Tỉnh Hoà Bình",
            "city_id" => "17"
        ]);
        District::factory()->create([
            "id" => "152",
            "name" => "Lương Sơn",
            "type" => "huyen",
            "slug" => "luong-son",
            "name_with_type" => "Huyện Lương Sơn",
            "path" => "Lương Sơn, Hoà Bình",
            "path_with_type" => "Huyện Lương Sơn, Tỉnh Hoà Bình",
            "city_id" => "17"
        ]);
        District::factory()->create([
            "id" => "153",
            "name" => "Kim Bôi",
            "type" => "huyen",
            "slug" => "kim-boi",
            "name_with_type" => "Huyện Kim Bôi",
            "path" => "Kim Bôi, Hoà Bình",
            "path_with_type" => "Huyện Kim Bôi, Tỉnh Hoà Bình",
            "city_id" => "17"
        ]);
        District::factory()->create([
            "id" => "154",
            "name" => "Cao Phong",
            "type" => "huyen",
            "slug" => "cao-phong",
            "name_with_type" => "Huyện Cao Phong",
            "path" => "Cao Phong, Hoà Bình",
            "path_with_type" => "Huyện Cao Phong, Tỉnh Hoà Bình",
            "city_id" => "17"
        ]);
        District::factory()->create([
            "id" => "155",
            "name" => "Tân Lạc",
            "type" => "huyen",
            "slug" => "tan-lac",
            "name_with_type" => "Huyện Tân Lạc",
            "path" => "Tân Lạc, Hoà Bình",
            "path_with_type" => "Huyện Tân Lạc, Tỉnh Hoà Bình",
            "city_id" => "17"
        ]);
        District::factory()->create([
            "id" => "156",
            "name" => "Mai Châu",
            "type" => "huyen",
            "slug" => "mai-chau",
            "name_with_type" => "Huyện Mai Châu",
            "path" => "Mai Châu, Hoà Bình",
            "path_with_type" => "Huyện Mai Châu, Tỉnh Hoà Bình",
            "city_id" => "17"
        ]);
        District::factory()->create([
            "id" => "157",
            "name" => "Lạc Sơn",
            "type" => "huyen",
            "slug" => "lac-son",
            "name_with_type" => "Huyện Lạc Sơn",
            "path" => "Lạc Sơn, Hoà Bình",
            "path_with_type" => "Huyện Lạc Sơn, Tỉnh Hoà Bình",
            "city_id" => "17"
        ]);
        District::factory()->create([
            "id" => "158",
            "name" => "Yên Thủy",
            "type" => "huyen",
            "slug" => "yen-thuy",
            "name_with_type" => "Huyện Yên Thủy",
            "path" => "Yên Thủy, Hoà Bình",
            "path_with_type" => "Huyện Yên Thủy, Tỉnh Hoà Bình",
            "city_id" => "17"
        ]);
        District::factory()->create([
            "id" => "159",
            "name" => "Lạc Thủy",
            "type" => "huyen",
            "slug" => "lac-thuy",
            "name_with_type" => "Huyện Lạc Thủy",
            "path" => "Lạc Thủy, Hoà Bình",
            "path_with_type" => "Huyện Lạc Thủy, Tỉnh Hoà Bình",
            "city_id" => "17"
        ]);
        District::factory()->create([
            "id" => "164",
            "name" => "Thái Nguyên",
            "type" => "thanh-pho",
            "slug" => "thai-nguyen",
            "name_with_type" => "Thành phố Thái Nguyên",
            "path" => "Thái Nguyên, Thái Nguyên",
            "path_with_type" => "Thành phố Thái Nguyên, Tỉnh Thái Nguyên",
            "city_id" => "19"
        ]);
        District::factory()->create([
            "id" => "165",
            "name" => "Sông Công",
            "type" => "thanh-pho",
            "slug" => "song-cong",
            "name_with_type" => "Thành phố Sông Công",
            "path" => "Sông Công, Thái Nguyên",
            "path_with_type" => "Thành phố Sông Công, Tỉnh Thái Nguyên",
            "city_id" => "19"
        ]);
        District::factory()->create([
            "id" => "167",
            "name" => "Định Hóa",
            "type" => "huyen",
            "slug" => "dinh-hoa",
            "name_with_type" => "Huyện Định Hóa",
            "path" => "Định Hóa, Thái Nguyên",
            "path_with_type" => "Huyện Định Hóa, Tỉnh Thái Nguyên",
            "city_id" => "19"
        ]);
        District::factory()->create([
            "id" => "168",
            "name" => "Phú Lương",
            "type" => "huyen",
            "slug" => "phu-luong",
            "name_with_type" => "Huyện Phú Lương",
            "path" => "Phú Lương, Thái Nguyên",
            "path_with_type" => "Huyện Phú Lương, Tỉnh Thái Nguyên",
            "city_id" => "19"
        ]);
        District::factory()->create([
            "id" => "169",
            "name" => "Đồng Hỷ",
            "type" => "huyen",
            "slug" => "dong-hy",
            "name_with_type" => "Huyện Đồng Hỷ",
            "path" => "Đồng Hỷ, Thái Nguyên",
            "path_with_type" => "Huyện Đồng Hỷ, Tỉnh Thái Nguyên",
            "city_id" => "19"
        ]);
        District::factory()->create([
            "id" => "170",
            "name" => "Võ Nhai",
            "type" => "huyen",
            "slug" => "vo-nhai",
            "name_with_type" => "Huyện Võ Nhai",
            "path" => "Võ Nhai, Thái Nguyên",
            "path_with_type" => "Huyện Võ Nhai, Tỉnh Thái Nguyên",
            "city_id" => "19"
        ]);
        District::factory()->create([
            "id" => "171",
            "name" => "Đại Từ",
            "type" => "huyen",
            "slug" => "dai-tu",
            "name_with_type" => "Huyện Đại Từ",
            "path" => "Đại Từ, Thái Nguyên",
            "path_with_type" => "Huyện Đại Từ, Tỉnh Thái Nguyên",
            "city_id" => "19"
        ]);
        District::factory()->create([
            "id" => "172",
            "name" => "Phổ Yên",
            "type" => "thanh-pho",
            "slug" => "pho-yen",
            "name_with_type" => "Thành phố Phổ Yên",
            "path" => "Phổ Yên, Thái Nguyên",
            "path_with_type" => "Thành phố Phổ Yên, Tỉnh Thái Nguyên",
            "city_id" => "19"
        ]);
        District::factory()->create([
            "id" => "173",
            "name" => "Phú Bình",
            "type" => "huyen",
            "slug" => "phu-binh",
            "name_with_type" => "Huyện Phú Bình",
            "path" => "Phú Bình, Thái Nguyên",
            "path_with_type" => "Huyện Phú Bình, Tỉnh Thái Nguyên",
            "city_id" => "19"
        ]);
        District::factory()->create([
            "id" => "178",
            "name" => "Lạng Sơn",
            "type" => "thanh-pho",
            "slug" => "lang-son",
            "name_with_type" => "Thành phố Lạng Sơn",
            "path" => "Lạng Sơn, Lạng Sơn",
            "path_with_type" => "Thành phố Lạng Sơn, Tỉnh Lạng Sơn",
            "city_id" => "20"
        ]);
        District::factory()->create([
            "id" => "180",
            "name" => "Tràng Định",
            "type" => "huyen",
            "slug" => "trang-dinh",
            "name_with_type" => "Huyện Tràng Định",
            "path" => "Tràng Định, Lạng Sơn",
            "path_with_type" => "Huyện Tràng Định, Tỉnh Lạng Sơn",
            "city_id" => "20"
        ]);
        District::factory()->create([
            "id" => "181",
            "name" => "Bình Gia",
            "type" => "huyen",
            "slug" => "binh-gia",
            "name_with_type" => "Huyện Bình Gia",
            "path" => "Bình Gia, Lạng Sơn",
            "path_with_type" => "Huyện Bình Gia, Tỉnh Lạng Sơn",
            "city_id" => "20"
        ]);
        District::factory()->create([
            "id" => "182",
            "name" => "Văn Lãng",
            "type" => "huyen",
            "slug" => "van-lang",
            "name_with_type" => "Huyện Văn Lãng",
            "path" => "Văn Lãng, Lạng Sơn",
            "path_with_type" => "Huyện Văn Lãng, Tỉnh Lạng Sơn",
            "city_id" => "20"
        ]);
        District::factory()->create([
            "id" => "183",
            "name" => "Cao Lộc",
            "type" => "huyen",
            "slug" => "cao-loc",
            "name_with_type" => "Huyện Cao Lộc",
            "path" => "Cao Lộc, Lạng Sơn",
            "path_with_type" => "Huyện Cao Lộc, Tỉnh Lạng Sơn",
            "city_id" => "20"
        ]);
        District::factory()->create([
            "id" => "184",
            "name" => "Văn Quan",
            "type" => "huyen",
            "slug" => "van-quan",
            "name_with_type" => "Huyện Văn Quan",
            "path" => "Văn Quan, Lạng Sơn",
            "path_with_type" => "Huyện Văn Quan, Tỉnh Lạng Sơn",
            "city_id" => "20"
        ]);
        District::factory()->create([
            "id" => "185",
            "name" => "Bắc Sơn",
            "type" => "huyen",
            "slug" => "bac-son",
            "name_with_type" => "Huyện Bắc Sơn",
            "path" => "Bắc Sơn, Lạng Sơn",
            "path_with_type" => "Huyện Bắc Sơn, Tỉnh Lạng Sơn",
            "city_id" => "20"
        ]);
        District::factory()->create([
            "id" => "186",
            "name" => "Hữu Lũng",
            "type" => "huyen",
            "slug" => "huu-lung",
            "name_with_type" => "Huyện Hữu Lũng",
            "path" => "Hữu Lũng, Lạng Sơn",
            "path_with_type" => "Huyện Hữu Lũng, Tỉnh Lạng Sơn",
            "city_id" => "20"
        ]);
        District::factory()->create([
            "id" => "187",
            "name" => "Chi Lăng",
            "type" => "huyen",
            "slug" => "chi-lang",
            "name_with_type" => "Huyện Chi Lăng",
            "path" => "Chi Lăng, Lạng Sơn",
            "path_with_type" => "Huyện Chi Lăng, Tỉnh Lạng Sơn",
            "city_id" => "20"
        ]);
        District::factory()->create([
            "id" => "188",
            "name" => "Lộc Bình",
            "type" => "huyen",
            "slug" => "loc-binh",
            "name_with_type" => "Huyện Lộc Bình",
            "path" => "Lộc Bình, Lạng Sơn",
            "path_with_type" => "Huyện Lộc Bình, Tỉnh Lạng Sơn",
            "city_id" => "20"
        ]);
        District::factory()->create([
            "id" => "189",
            "name" => "Đình Lập",
            "type" => "huyen",
            "slug" => "dinh-lap",
            "name_with_type" => "Huyện Đình Lập",
            "path" => "Đình Lập, Lạng Sơn",
            "path_with_type" => "Huyện Đình Lập, Tỉnh Lạng Sơn",
            "city_id" => "20"
        ]);
        District::factory()->create([
            "id" => "193",
            "name" => "Hạ Long",
            "type" => "thanh-pho",
            "slug" => "ha-long",
            "name_with_type" => "Thành phố Hạ Long",
            "path" => "Hạ Long, Quảng Ninh",
            "path_with_type" => "Thành phố Hạ Long, Tỉnh Quảng Ninh",
            "city_id" => "22"
        ]);
        District::factory()->create([
            "id" => "194",
            "name" => "Móng Cái",
            "type" => "thanh-pho",
            "slug" => "mong-cai",
            "name_with_type" => "Thành phố Móng Cái",
            "path" => "Móng Cái, Quảng Ninh",
            "path_with_type" => "Thành phố Móng Cái, Tỉnh Quảng Ninh",
            "city_id" => "22"
        ]);
        District::factory()->create([
            "id" => "195",
            "name" => "Cẩm Phả",
            "type" => "thanh-pho",
            "slug" => "cam-pha",
            "name_with_type" => "Thành phố Cẩm Phả",
            "path" => "Cẩm Phả, Quảng Ninh",
            "path_with_type" => "Thành phố Cẩm Phả, Tỉnh Quảng Ninh",
            "city_id" => "22"
        ]);
        District::factory()->create([
            "id" => "196",
            "name" => "Uông Bí",
            "type" => "thanh-pho",
            "slug" => "uong-bi",
            "name_with_type" => "Thành phố Uông Bí",
            "path" => "Uông Bí, Quảng Ninh",
            "path_with_type" => "Thành phố Uông Bí, Tỉnh Quảng Ninh",
            "city_id" => "22"
        ]);
        District::factory()->create([
            "id" => "198",
            "name" => "Bình Liêu",
            "type" => "huyen",
            "slug" => "binh-lieu",
            "name_with_type" => "Huyện Bình Liêu",
            "path" => "Bình Liêu, Quảng Ninh",
            "path_with_type" => "Huyện Bình Liêu, Tỉnh Quảng Ninh",
            "city_id" => "22"
        ]);
        District::factory()->create([
            "id" => "199",
            "name" => "Tiên Yên",
            "type" => "huyen",
            "slug" => "tien-yen",
            "name_with_type" => "Huyện Tiên Yên",
            "path" => "Tiên Yên, Quảng Ninh",
            "path_with_type" => "Huyện Tiên Yên, Tỉnh Quảng Ninh",
            "city_id" => "22"
        ]);
        District::factory()->create([
            "id" => "200",
            "name" => "Đầm Hà",
            "type" => "huyen",
            "slug" => "dam-ha",
            "name_with_type" => "Huyện Đầm Hà",
            "path" => "Đầm Hà, Quảng Ninh",
            "path_with_type" => "Huyện Đầm Hà, Tỉnh Quảng Ninh",
            "city_id" => "22"
        ]);
        District::factory()->create([
            "id" => "201",
            "name" => "Hải Hà",
            "type" => "huyen",
            "slug" => "hai-ha",
            "name_with_type" => "Huyện Hải Hà",
            "path" => "Hải Hà, Quảng Ninh",
            "path_with_type" => "Huyện Hải Hà, Tỉnh Quảng Ninh",
            "city_id" => "22"
        ]);
        District::factory()->create([
            "id" => "202",
            "name" => "Ba Chẽ",
            "type" => "huyen",
            "slug" => "ba-che",
            "name_with_type" => "Huyện Ba Chẽ",
            "path" => "Ba Chẽ, Quảng Ninh",
            "path_with_type" => "Huyện Ba Chẽ, Tỉnh Quảng Ninh",
            "city_id" => "22"
        ]);
        District::factory()->create([
            "id" => "203",
            "name" => "Vân Đồn",
            "type" => "huyen",
            "slug" => "van-don",
            "name_with_type" => "Huyện Vân Đồn",
            "path" => "Vân Đồn, Quảng Ninh",
            "path_with_type" => "Huyện Vân Đồn, Tỉnh Quảng Ninh",
            "city_id" => "22"
        ]);
        District::factory()->create([
            "id" => "205",
            "name" => "Đông Triều",
            "type" => "thi-xa",
            "slug" => "dong-trieu",
            "name_with_type" => "Thị xã Đông Triều",
            "path" => "Đông Triều, Quảng Ninh",
            "path_with_type" => "Thị xã Đông Triều, Tỉnh Quảng Ninh",
            "city_id" => "22"
        ]);
        District::factory()->create([
            "id" => "206",
            "name" => "Quảng Yên",
            "type" => "thi-xa",
            "slug" => "quang-yen",
            "name_with_type" => "Thị xã Quảng Yên",
            "path" => "Quảng Yên, Quảng Ninh",
            "path_with_type" => "Thị xã Quảng Yên, Tỉnh Quảng Ninh",
            "city_id" => "22"
        ]);
        District::factory()->create([
            "id" => "207",
            "name" => "Cô Tô",
            "type" => "huyen",
            "slug" => "co-to",
            "name_with_type" => "Huyện Cô Tô",
            "path" => "Cô Tô, Quảng Ninh",
            "path_with_type" => "Huyện Cô Tô, Tỉnh Quảng Ninh",
            "city_id" => "22"
        ]);
        District::factory()->create([
            "id" => "213",
            "name" => "Bắc Giang",
            "type" => "thanh-pho",
            "slug" => "bac-giang",
            "name_with_type" => "Thành phố Bắc Giang",
            "path" => "Bắc Giang, Bắc Giang",
            "path_with_type" => "Thành phố Bắc Giang, Tỉnh Bắc Giang",
            "city_id" => "24"
        ]);
        District::factory()->create([
            "id" => "215",
            "name" => "Yên Thế",
            "type" => "huyen",
            "slug" => "yen-the",
            "name_with_type" => "Huyện Yên Thế",
            "path" => "Yên Thế, Bắc Giang",
            "path_with_type" => "Huyện Yên Thế, Tỉnh Bắc Giang",
            "city_id" => "24"
        ]);
        District::factory()->create([
            "id" => "216",
            "name" => "Tân Yên",
            "type" => "huyen",
            "slug" => "tan-yen",
            "name_with_type" => "Huyện Tân Yên",
            "path" => "Tân Yên, Bắc Giang",
            "path_with_type" => "Huyện Tân Yên, Tỉnh Bắc Giang",
            "city_id" => "24"
        ]);
        District::factory()->create([
            "id" => "217",
            "name" => "Lạng Giang",
            "type" => "huyen",
            "slug" => "lang-giang",
            "name_with_type" => "Huyện Lạng Giang",
            "path" => "Lạng Giang, Bắc Giang",
            "path_with_type" => "Huyện Lạng Giang, Tỉnh Bắc Giang",
            "city_id" => "24"
        ]);
        District::factory()->create([
            "id" => "218",
            "name" => "Lục Nam",
            "type" => "huyen",
            "slug" => "luc-nam",
            "name_with_type" => "Huyện Lục Nam",
            "path" => "Lục Nam, Bắc Giang",
            "path_with_type" => "Huyện Lục Nam, Tỉnh Bắc Giang",
            "city_id" => "24"
        ]);
        District::factory()->create([
            "id" => "219",
            "name" => "Lục Ngạn",
            "type" => "huyen",
            "slug" => "luc-ngan",
            "name_with_type" => "Huyện Lục Ngạn",
            "path" => "Lục Ngạn, Bắc Giang",
            "path_with_type" => "Huyện Lục Ngạn, Tỉnh Bắc Giang",
            "city_id" => "24"
        ]);
        District::factory()->create([
            "id" => "220",
            "name" => "Sơn Động",
            "type" => "huyen",
            "slug" => "son-dong",
            "name_with_type" => "Huyện Sơn Động",
            "path" => "Sơn Động, Bắc Giang",
            "path_with_type" => "Huyện Sơn Động, Tỉnh Bắc Giang",
            "city_id" => "24"
        ]);
        District::factory()->create([
            "id" => "221",
            "name" => "Yên Dũng",
            "type" => "huyen",
            "slug" => "yen-dung",
            "name_with_type" => "Huyện Yên Dũng",
            "path" => "Yên Dũng, Bắc Giang",
            "path_with_type" => "Huyện Yên Dũng, Tỉnh Bắc Giang",
            "city_id" => "24"
        ]);
        District::factory()->create([
            "id" => "222",
            "name" => "Việt Yên",
            "type" => "huyen",
            "slug" => "viet-yen",
            "name_with_type" => "Huyện Việt Yên",
            "path" => "Việt Yên, Bắc Giang",
            "path_with_type" => "Huyện Việt Yên, Tỉnh Bắc Giang",
            "city_id" => "24"
        ]);
        District::factory()->create([
            "id" => "223",
            "name" => "Hiệp Hòa",
            "type" => "huyen",
            "slug" => "hiep-hoa",
            "name_with_type" => "Huyện Hiệp Hòa",
            "path" => "Hiệp Hòa, Bắc Giang",
            "path_with_type" => "Huyện Hiệp Hòa, Tỉnh Bắc Giang",
            "city_id" => "24"
        ]);
        District::factory()->create([
            "id" => "227",
            "name" => "Việt Trì",
            "type" => "thanh-pho",
            "slug" => "viet-tri",
            "name_with_type" => "Thành phố Việt Trì",
            "path" => "Việt Trì, Phú Thọ",
            "path_with_type" => "Thành phố Việt Trì, Tỉnh Phú Thọ",
            "city_id" => "25"
        ]);
        District::factory()->create([
            "id" => "228",
            "name" => "Phú Thọ",
            "type" => "thi-xa",
            "slug" => "phu-tho",
            "name_with_type" => "Thị xã Phú Thọ",
            "path" => "Phú Thọ, Phú Thọ",
            "path_with_type" => "Thị xã Phú Thọ, Tỉnh Phú Thọ",
            "city_id" => "25"
        ]);
        District::factory()->create([
            "id" => "230",
            "name" => "Đoan Hùng",
            "type" => "huyen",
            "slug" => "doan-hung",
            "name_with_type" => "Huyện Đoan Hùng",
            "path" => "Đoan Hùng, Phú Thọ",
            "path_with_type" => "Huyện Đoan Hùng, Tỉnh Phú Thọ",
            "city_id" => "25"
        ]);
        District::factory()->create([
            "id" => "231",
            "name" => "Hạ Hoà",
            "type" => "huyen",
            "slug" => "ha-hoa",
            "name_with_type" => "Huyện Hạ Hoà",
            "path" => "Hạ Hoà, Phú Thọ",
            "path_with_type" => "Huyện Hạ Hoà, Tỉnh Phú Thọ",
            "city_id" => "25"
        ]);
        District::factory()->create([
            "id" => "232",
            "name" => "Thanh Ba",
            "type" => "huyen",
            "slug" => "thanh-ba",
            "name_with_type" => "Huyện Thanh Ba",
            "path" => "Thanh Ba, Phú Thọ",
            "path_with_type" => "Huyện Thanh Ba, Tỉnh Phú Thọ",
            "city_id" => "25"
        ]);
        District::factory()->create([
            "id" => "233",
            "name" => "Phù Ninh",
            "type" => "huyen",
            "slug" => "phu-ninh",
            "name_with_type" => "Huyện Phù Ninh",
            "path" => "Phù Ninh, Phú Thọ",
            "path_with_type" => "Huyện Phù Ninh, Tỉnh Phú Thọ",
            "city_id" => "25"
        ]);
        District::factory()->create([
            "id" => "234",
            "name" => "Yên Lập",
            "type" => "huyen",
            "slug" => "yen-lap",
            "name_with_type" => "Huyện Yên Lập",
            "path" => "Yên Lập, Phú Thọ",
            "path_with_type" => "Huyện Yên Lập, Tỉnh Phú Thọ",
            "city_id" => "25"
        ]);
        District::factory()->create([
            "id" => "235",
            "name" => "Cẩm Khê",
            "type" => "huyen",
            "slug" => "cam-khe",
            "name_with_type" => "Huyện Cẩm Khê",
            "path" => "Cẩm Khê, Phú Thọ",
            "path_with_type" => "Huyện Cẩm Khê, Tỉnh Phú Thọ",
            "city_id" => "25"
        ]);
        District::factory()->create([
            "id" => "236",
            "name" => "Tam Nông",
            "type" => "huyen",
            "slug" => "tam-nong",
            "name_with_type" => "Huyện Tam Nông",
            "path" => "Tam Nông, Phú Thọ",
            "path_with_type" => "Huyện Tam Nông, Tỉnh Phú Thọ",
            "city_id" => "25"
        ]);
        District::factory()->create([
            "id" => "237",
            "name" => "Lâm Thao",
            "type" => "huyen",
            "slug" => "lam-thao",
            "name_with_type" => "Huyện Lâm Thao",
            "path" => "Lâm Thao, Phú Thọ",
            "path_with_type" => "Huyện Lâm Thao, Tỉnh Phú Thọ",
            "city_id" => "25"
        ]);
        District::factory()->create([
            "id" => "238",
            "name" => "Thanh Sơn",
            "type" => "huyen",
            "slug" => "thanh-son",
            "name_with_type" => "Huyện Thanh Sơn",
            "path" => "Thanh Sơn, Phú Thọ",
            "path_with_type" => "Huyện Thanh Sơn, Tỉnh Phú Thọ",
            "city_id" => "25"
        ]);
        District::factory()->create([
            "id" => "239",
            "name" => "Thanh Thuỷ",
            "type" => "huyen",
            "slug" => "thanh-thuy",
            "name_with_type" => "Huyện Thanh Thuỷ",
            "path" => "Thanh Thuỷ, Phú Thọ",
            "path_with_type" => "Huyện Thanh Thuỷ, Tỉnh Phú Thọ",
            "city_id" => "25"
        ]);
        District::factory()->create([
            "id" => "240",
            "name" => "Tân Sơn",
            "type" => "huyen",
            "slug" => "tan-son",
            "name_with_type" => "Huyện Tân Sơn",
            "path" => "Tân Sơn, Phú Thọ",
            "path_with_type" => "Huyện Tân Sơn, Tỉnh Phú Thọ",
            "city_id" => "25"
        ]);
        District::factory()->create([
            "id" => "243",
            "name" => "Vĩnh Yên",
            "type" => "thanh-pho",
            "slug" => "vinh-yen",
            "name_with_type" => "Thành phố Vĩnh Yên",
            "path" => "Vĩnh Yên, Vĩnh Phúc",
            "path_with_type" => "Thành phố Vĩnh Yên, Tỉnh Vĩnh Phúc",
            "city_id" => "26"
        ]);
        District::factory()->create([
            "id" => "244",
            "name" => "Phúc Yên",
            "type" => "thanh-pho",
            "slug" => "phuc-yen",
            "name_with_type" => "Thành phố Phúc Yên",
            "path" => "Phúc Yên, Vĩnh Phúc",
            "path_with_type" => "Thành phố Phúc Yên, Tỉnh Vĩnh Phúc",
            "city_id" => "26"
        ]);
        District::factory()->create([
            "id" => "246",
            "name" => "Lập Thạch",
            "type" => "huyen",
            "slug" => "lap-thach",
            "name_with_type" => "Huyện Lập Thạch",
            "path" => "Lập Thạch, Vĩnh Phúc",
            "path_with_type" => "Huyện Lập Thạch, Tỉnh Vĩnh Phúc",
            "city_id" => "26"
        ]);
        District::factory()->create([
            "id" => "247",
            "name" => "Tam Dương",
            "type" => "huyen",
            "slug" => "tam-duong",
            "name_with_type" => "Huyện Tam Dương",
            "path" => "Tam Dương, Vĩnh Phúc",
            "path_with_type" => "Huyện Tam Dương, Tỉnh Vĩnh Phúc",
            "city_id" => "26"
        ]);
        District::factory()->create([
            "id" => "248",
            "name" => "Tam Đảo",
            "type" => "huyen",
            "slug" => "tam-dao",
            "name_with_type" => "Huyện Tam Đảo",
            "path" => "Tam Đảo, Vĩnh Phúc",
            "path_with_type" => "Huyện Tam Đảo, Tỉnh Vĩnh Phúc",
            "city_id" => "26"
        ]);
        District::factory()->create([
            "id" => "249",
            "name" => "Bình Xuyên",
            "type" => "huyen",
            "slug" => "binh-xuyen",
            "name_with_type" => "Huyện Bình Xuyên",
            "path" => "Bình Xuyên, Vĩnh Phúc",
            "path_with_type" => "Huyện Bình Xuyên, Tỉnh Vĩnh Phúc",
            "city_id" => "26"
        ]);
        District::factory()->create([
            "id" => "250",
            "name" => "Mê Linh",
            "type" => "huyen",
            "slug" => "me-linh",
            "name_with_type" => "Huyện Mê Linh",
            "path" => "Mê Linh, Hà Nội",
            "path_with_type" => "Huyện Mê Linh, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "251",
            "name" => "Yên Lạc",
            "type" => "huyen",
            "slug" => "yen-lac",
            "name_with_type" => "Huyện Yên Lạc",
            "path" => "Yên Lạc, Vĩnh Phúc",
            "path_with_type" => "Huyện Yên Lạc, Tỉnh Vĩnh Phúc",
            "city_id" => "26"
        ]);
        District::factory()->create([
            "id" => "252",
            "name" => "Vĩnh Tường",
            "type" => "huyen",
            "slug" => "vinh-tuong",
            "name_with_type" => "Huyện Vĩnh Tường",
            "path" => "Vĩnh Tường, Vĩnh Phúc",
            "path_with_type" => "Huyện Vĩnh Tường, Tỉnh Vĩnh Phúc",
            "city_id" => "26"
        ]);
        District::factory()->create([
            "id" => "253",
            "name" => "Sông Lô",
            "type" => "huyen",
            "slug" => "song-lo",
            "name_with_type" => "Huyện Sông Lô",
            "path" => "Sông Lô, Vĩnh Phúc",
            "path_with_type" => "Huyện Sông Lô, Tỉnh Vĩnh Phúc",
            "city_id" => "26"
        ]);
        District::factory()->create([
            "id" => "256",
            "name" => "Bắc Ninh",
            "type" => "thanh-pho",
            "slug" => "bac-ninh",
            "name_with_type" => "Thành phố Bắc Ninh",
            "path" => "Bắc Ninh, Bắc Ninh",
            "path_with_type" => "Thành phố Bắc Ninh, Tỉnh Bắc Ninh",
            "city_id" => "27"
        ]);
        District::factory()->create([
            "id" => "258",
            "name" => "Yên Phong",
            "type" => "huyen",
            "slug" => "yen-phong",
            "name_with_type" => "Huyện Yên Phong",
            "path" => "Yên Phong, Bắc Ninh",
            "path_with_type" => "Huyện Yên Phong, Tỉnh Bắc Ninh",
            "city_id" => "27"
        ]);
        District::factory()->create([
            "id" => "259",
            "name" => "Quế Võ",
            "type" => "huyen",
            "slug" => "que-vo",
            "name_with_type" => "Huyện Quế Võ",
            "path" => "Quế Võ, Bắc Ninh",
            "path_with_type" => "Huyện Quế Võ, Tỉnh Bắc Ninh",
            "city_id" => "27"
        ]);
        District::factory()->create([
            "id" => "260",
            "name" => "Tiên Du",
            "type" => "huyen",
            "slug" => "tien-du",
            "name_with_type" => "Huyện Tiên Du",
            "path" => "Tiên Du, Bắc Ninh",
            "path_with_type" => "Huyện Tiên Du, Tỉnh Bắc Ninh",
            "city_id" => "27"
        ]);
        District::factory()->create([
            "id" => "261",
            "name" => "Từ Sơn",
            "type" => "thanh-pho",
            "slug" => "tu-son",
            "name_with_type" => "Thành phố Từ Sơn",
            "path" => "Từ Sơn, Bắc Ninh",
            "path_with_type" => "Thành phố Từ Sơn, Tỉnh Bắc Ninh",
            "city_id" => "27"
        ]);
        District::factory()->create([
            "id" => "262",
            "name" => "Thuận Thành",
            "type" => "huyen",
            "slug" => "thuan-thanh",
            "name_with_type" => "Huyện Thuận Thành",
            "path" => "Thuận Thành, Bắc Ninh",
            "path_with_type" => "Huyện Thuận Thành, Tỉnh Bắc Ninh",
            "city_id" => "27"
        ]);
        District::factory()->create([
            "id" => "263",
            "name" => "Gia Bình",
            "type" => "huyen",
            "slug" => "gia-binh",
            "name_with_type" => "Huyện Gia Bình",
            "path" => "Gia Bình, Bắc Ninh",
            "path_with_type" => "Huyện Gia Bình, Tỉnh Bắc Ninh",
            "city_id" => "27"
        ]);
        District::factory()->create([
            "id" => "264",
            "name" => "Lương Tài",
            "type" => "huyen",
            "slug" => "luong-tai",
            "name_with_type" => "Huyện Lương Tài",
            "path" => "Lương Tài, Bắc Ninh",
            "path_with_type" => "Huyện Lương Tài, Tỉnh Bắc Ninh",
            "city_id" => "27"
        ]);
        District::factory()->create([
            "id" => "268",
            "name" => "Hà Đông",
            "type" => "quan",
            "slug" => "ha-dong",
            "name_with_type" => "Quận Hà Đông",
            "path" => "Hà Đông, Hà Nội",
            "path_with_type" => "Quận Hà Đông, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "269",
            "name" => "Sơn Tây",
            "type" => "thi-xa",
            "slug" => "son-tay",
            "name_with_type" => "Thị xã Sơn Tây",
            "path" => "Sơn Tây, Hà Nội",
            "path_with_type" => "Thị xã Sơn Tây, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "271",
            "name" => "Ba Vì",
            "type" => "huyen",
            "slug" => "ba-vi",
            "name_with_type" => "Huyện Ba Vì",
            "path" => "Ba Vì, Hà Nội",
            "path_with_type" => "Huyện Ba Vì, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "272",
            "name" => "Phúc Thọ",
            "type" => "huyen",
            "slug" => "phuc-tho",
            "name_with_type" => "Huyện Phúc Thọ",
            "path" => "Phúc Thọ, Hà Nội",
            "path_with_type" => "Huyện Phúc Thọ, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "273",
            "name" => "Đan Phượng",
            "type" => "huyen",
            "slug" => "dan-phuong",
            "name_with_type" => "Huyện Đan Phượng",
            "path" => "Đan Phượng, Hà Nội",
            "path_with_type" => "Huyện Đan Phượng, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "274",
            "name" => "Hoài Đức",
            "type" => "huyen",
            "slug" => "hoai-duc",
            "name_with_type" => "Huyện Hoài Đức",
            "path" => "Hoài Đức, Hà Nội",
            "path_with_type" => "Huyện Hoài Đức, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "275",
            "name" => "Quốc Oai",
            "type" => "huyen",
            "slug" => "quoc-oai",
            "name_with_type" => "Huyện Quốc Oai",
            "path" => "Quốc Oai, Hà Nội",
            "path_with_type" => "Huyện Quốc Oai, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "276",
            "name" => "Thạch Thất",
            "type" => "huyen",
            "slug" => "thach-that",
            "name_with_type" => "Huyện Thạch Thất",
            "path" => "Thạch Thất, Hà Nội",
            "path_with_type" => "Huyện Thạch Thất, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "277",
            "name" => "Chương Mỹ",
            "type" => "huyen",
            "slug" => "chuong-my",
            "name_with_type" => "Huyện Chương Mỹ",
            "path" => "Chương Mỹ, Hà Nội",
            "path_with_type" => "Huyện Chương Mỹ, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "278",
            "name" => "Thanh Oai",
            "type" => "huyen",
            "slug" => "thanh-oai",
            "name_with_type" => "Huyện Thanh Oai",
            "path" => "Thanh Oai, Hà Nội",
            "path_with_type" => "Huyện Thanh Oai, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "279",
            "name" => "Thường Tín",
            "type" => "huyen",
            "slug" => "thuong-tin",
            "name_with_type" => "Huyện Thường Tín",
            "path" => "Thường Tín, Hà Nội",
            "path_with_type" => "Huyện Thường Tín, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "280",
            "name" => "Phú Xuyên",
            "type" => "huyen",
            "slug" => "phu-xuyen",
            "name_with_type" => "Huyện Phú Xuyên",
            "path" => "Phú Xuyên, Hà Nội",
            "path_with_type" => "Huyện Phú Xuyên, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "281",
            "name" => "Ứng Hòa",
            "type" => "huyen",
            "slug" => "ung-hoa",
            "name_with_type" => "Huyện Ứng Hòa",
            "path" => "Ứng Hòa, Hà Nội",
            "path_with_type" => "Huyện Ứng Hòa, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "282",
            "name" => "Mỹ Đức",
            "type" => "huyen",
            "slug" => "my-duc",
            "name_with_type" => "Huyện Mỹ Đức",
            "path" => "Mỹ Đức, Hà Nội",
            "path_with_type" => "Huyện Mỹ Đức, Thành phố Hà Nội",
            "city_id" => "01"
        ]);
        District::factory()->create([
            "id" => "288",
            "name" => "Hải Dương",
            "type" => "thanh-pho",
            "slug" => "hai-duong",
            "name_with_type" => "Thành phố Hải Dương",
            "path" => "Hải Dương, Hải Dương",
            "path_with_type" => "Thành phố Hải Dương, Tỉnh Hải Dương",
            "city_id" => "30"
        ]);
        District::factory()->create([
            "id" => "290",
            "name" => "Chí Linh",
            "type" => "thanh-pho",
            "slug" => "chi-linh",
            "name_with_type" => "Thành phố Chí Linh",
            "path" => "Chí Linh, Hải Dương",
            "path_with_type" => "Thành phố Chí Linh, Tỉnh Hải Dương",
            "city_id" => "30"
        ]);
        District::factory()->create([
            "id" => "291",
            "name" => "Nam Sách",
            "type" => "huyen",
            "slug" => "nam-sach",
            "name_with_type" => "Huyện Nam Sách",
            "path" => "Nam Sách, Hải Dương",
            "path_with_type" => "Huyện Nam Sách, Tỉnh Hải Dương",
            "city_id" => "30"
        ]);
        District::factory()->create([
            "id" => "292",
            "name" => "Kinh Môn",
            "type" => "thi-xa",
            "slug" => "kinh-mon",
            "name_with_type" => "Thị xã Kinh Môn",
            "path" => "Kinh Môn, Hải Dương",
            "path_with_type" => "Thị xã Kinh Môn, Tỉnh Hải Dương",
            "city_id" => "30"
        ]);
        District::factory()->create([
            "id" => "293",
            "name" => "Kim Thành",
            "type" => "huyen",
            "slug" => "kim-thanh",
            "name_with_type" => "Huyện Kim Thành",
            "path" => "Kim Thành, Hải Dương",
            "path_with_type" => "Huyện Kim Thành, Tỉnh Hải Dương",
            "city_id" => "30"
        ]);
        District::factory()->create([
            "id" => "294",
            "name" => "Thanh Hà",
            "type" => "huyen",
            "slug" => "thanh-ha",
            "name_with_type" => "Huyện Thanh Hà",
            "path" => "Thanh Hà, Hải Dương",
            "path_with_type" => "Huyện Thanh Hà, Tỉnh Hải Dương",
            "city_id" => "30"
        ]);
        District::factory()->create([
            "id" => "295",
            "name" => "Cẩm Giàng",
            "type" => "huyen",
            "slug" => "cam-giang",
            "name_with_type" => "Huyện Cẩm Giàng",
            "path" => "Cẩm Giàng, Hải Dương",
            "path_with_type" => "Huyện Cẩm Giàng, Tỉnh Hải Dương",
            "city_id" => "30"
        ]);
        District::factory()->create([
            "id" => "296",
            "name" => "Bình Giang",
            "type" => "huyen",
            "slug" => "binh-giang",
            "name_with_type" => "Huyện Bình Giang",
            "path" => "Bình Giang, Hải Dương",
            "path_with_type" => "Huyện Bình Giang, Tỉnh Hải Dương",
            "city_id" => "30"
        ]);
        District::factory()->create([
            "id" => "297",
            "name" => "Gia Lộc",
            "type" => "huyen",
            "slug" => "gia-loc",
            "name_with_type" => "Huyện Gia Lộc",
            "path" => "Gia Lộc, Hải Dương",
            "path_with_type" => "Huyện Gia Lộc, Tỉnh Hải Dương",
            "city_id" => "30"
        ]);
        District::factory()->create([
            "id" => "298",
            "name" => "Tứ Kỳ",
            "type" => "huyen",
            "slug" => "tu-ky",
            "name_with_type" => "Huyện Tứ Kỳ",
            "path" => "Tứ Kỳ, Hải Dương",
            "path_with_type" => "Huyện Tứ Kỳ, Tỉnh Hải Dương",
            "city_id" => "30"
        ]);
        District::factory()->create([
            "id" => "299",
            "name" => "Ninh Giang",
            "type" => "huyen",
            "slug" => "ninh-giang",
            "name_with_type" => "Huyện Ninh Giang",
            "path" => "Ninh Giang, Hải Dương",
            "path_with_type" => "Huyện Ninh Giang, Tỉnh Hải Dương",
            "city_id" => "30"
        ]);
        District::factory()->create([
            "id" => "300",
            "name" => "Thanh Miện",
            "type" => "huyen",
            "slug" => "thanh-mien",
            "name_with_type" => "Huyện Thanh Miện",
            "path" => "Thanh Miện, Hải Dương",
            "path_with_type" => "Huyện Thanh Miện, Tỉnh Hải Dương",
            "city_id" => "30"
        ]);
        District::factory()->create([
            "id" => "303",
            "name" => "Hồng Bàng",
            "type" => "quan",
            "slug" => "hong-bang",
            "name_with_type" => "Quận Hồng Bàng",
            "path" => "Hồng Bàng, Hải Phòng",
            "path_with_type" => "Quận Hồng Bàng, Thành phố Hải Phòng",
            "city_id" => "31"
        ]);
        District::factory()->create([
            "id" => "304",
            "name" => "Ngô Quyền",
            "type" => "quan",
            "slug" => "ngo-quyen",
            "name_with_type" => "Quận Ngô Quyền",
            "path" => "Ngô Quyền, Hải Phòng",
            "path_with_type" => "Quận Ngô Quyền, Thành phố Hải Phòng",
            "city_id" => "31"
        ]);
        District::factory()->create([
            "id" => "305",
            "name" => "Lê Chân",
            "type" => "quan",
            "slug" => "le-chan",
            "name_with_type" => "Quận Lê Chân",
            "path" => "Lê Chân, Hải Phòng",
            "path_with_type" => "Quận Lê Chân, Thành phố Hải Phòng",
            "city_id" => "31"
        ]);
        District::factory()->create([
            "id" => "306",
            "name" => "Hải An",
            "type" => "quan",
            "slug" => "hai-an",
            "name_with_type" => "Quận Hải An",
            "path" => "Hải An, Hải Phòng",
            "path_with_type" => "Quận Hải An, Thành phố Hải Phòng",
            "city_id" => "31"
        ]);
        District::factory()->create([
            "id" => "307",
            "name" => "Kiến An",
            "type" => "quan",
            "slug" => "kien-an",
            "name_with_type" => "Quận Kiến An",
            "path" => "Kiến An, Hải Phòng",
            "path_with_type" => "Quận Kiến An, Thành phố Hải Phòng",
            "city_id" => "31"
        ]);
        District::factory()->create([
            "id" => "308",
            "name" => "Đồ Sơn",
            "type" => "quan",
            "slug" => "do-son",
            "name_with_type" => "Quận Đồ Sơn",
            "path" => "Đồ Sơn, Hải Phòng",
            "path_with_type" => "Quận Đồ Sơn, Thành phố Hải Phòng",
            "city_id" => "31"
        ]);
        District::factory()->create([
            "id" => "309",
            "name" => "Dương Kinh",
            "type" => "quan",
            "slug" => "duong-kinh",
            "name_with_type" => "Quận Dương Kinh",
            "path" => "Dương Kinh, Hải Phòng",
            "path_with_type" => "Quận Dương Kinh, Thành phố Hải Phòng",
            "city_id" => "31"
        ]);
        District::factory()->create([
            "id" => "311",
            "name" => "Thuỷ Nguyên",
            "type" => "huyen",
            "slug" => "thuy-nguyen",
            "name_with_type" => "Huyện Thuỷ Nguyên",
            "path" => "Thuỷ Nguyên, Hải Phòng",
            "path_with_type" => "Huyện Thuỷ Nguyên, Thành phố Hải Phòng",
            "city_id" => "31"
        ]);
        District::factory()->create([
            "id" => "312",
            "name" => "An Dương",
            "type" => "huyen",
            "slug" => "an-duong",
            "name_with_type" => "Huyện An Dương",
            "path" => "An Dương, Hải Phòng",
            "path_with_type" => "Huyện An Dương, Thành phố Hải Phòng",
            "city_id" => "31"
        ]);
        District::factory()->create([
            "id" => "313",
            "name" => "An Lão",
            "type" => "huyen",
            "slug" => "an-lao",
            "name_with_type" => "Huyện An Lão",
            "path" => "An Lão, Hải Phòng",
            "path_with_type" => "Huyện An Lão, Thành phố Hải Phòng",
            "city_id" => "31"
        ]);
        District::factory()->create([
            "id" => "314",
            "name" => "Kiến Thuỵ",
            "type" => "huyen",
            "slug" => "kien-thuy",
            "name_with_type" => "Huyện Kiến Thuỵ",
            "path" => "Kiến Thuỵ, Hải Phòng",
            "path_with_type" => "Huyện Kiến Thuỵ, Thành phố Hải Phòng",
            "city_id" => "31"
        ]);
        District::factory()->create([
            "id" => "315",
            "name" => "Tiên Lãng",
            "type" => "huyen",
            "slug" => "tien-lang",
            "name_with_type" => "Huyện Tiên Lãng",
            "path" => "Tiên Lãng, Hải Phòng",
            "path_with_type" => "Huyện Tiên Lãng, Thành phố Hải Phòng",
            "city_id" => "31"
        ]);
        District::factory()->create([
            "id" => "316",
            "name" => "Vĩnh Bảo",
            "type" => "huyen",
            "slug" => "vinh-bao",
            "name_with_type" => "Huyện Vĩnh Bảo",
            "path" => "Vĩnh Bảo, Hải Phòng",
            "path_with_type" => "Huyện Vĩnh Bảo, Thành phố Hải Phòng",
            "city_id" => "31"
        ]);
        District::factory()->create([
            "id" => "317",
            "name" => "Cát Hải",
            "type" => "huyen",
            "slug" => "cat-hai",
            "name_with_type" => "Huyện Cát Hải",
            "path" => "Cát Hải, Hải Phòng",
            "path_with_type" => "Huyện Cát Hải, Thành phố Hải Phòng",
            "city_id" => "31"
        ]);
        District::factory()->create([
            "id" => "318",
            "name" => "Bạch Long Vĩ",
            "type" => "huyen",
            "slug" => "bach-long-vi",
            "name_with_type" => "Huyện Bạch Long Vĩ",
            "path" => "Bạch Long Vĩ, Hải Phòng",
            "path_with_type" => "Huyện Bạch Long Vĩ, Thành phố Hải Phòng",
            "city_id" => "31"
        ]);
        District::factory()->create([
            "id" => "323",
            "name" => "Hưng Yên",
            "type" => "thanh-pho",
            "slug" => "hung-yen",
            "name_with_type" => "Thành phố Hưng Yên",
            "path" => "Hưng Yên, Hưng Yên",
            "path_with_type" => "Thành phố Hưng Yên, Tỉnh Hưng Yên",
            "city_id" => "33"
        ]);
        District::factory()->create([
            "id" => "325",
            "name" => "Văn Lâm",
            "type" => "huyen",
            "slug" => "van-lam",
            "name_with_type" => "Huyện Văn Lâm",
            "path" => "Văn Lâm, Hưng Yên",
            "path_with_type" => "Huyện Văn Lâm, Tỉnh Hưng Yên",
            "city_id" => "33"
        ]);
        District::factory()->create([
            "id" => "326",
            "name" => "Văn Giang",
            "type" => "huyen",
            "slug" => "van-giang",
            "name_with_type" => "Huyện Văn Giang",
            "path" => "Văn Giang, Hưng Yên",
            "path_with_type" => "Huyện Văn Giang, Tỉnh Hưng Yên",
            "city_id" => "33"
        ]);
        District::factory()->create([
            "id" => "327",
            "name" => "Yên Mỹ",
            "type" => "huyen",
            "slug" => "yen-my",
            "name_with_type" => "Huyện Yên Mỹ",
            "path" => "Yên Mỹ, Hưng Yên",
            "path_with_type" => "Huyện Yên Mỹ, Tỉnh Hưng Yên",
            "city_id" => "33"
        ]);
        District::factory()->create([
            "id" => "328",
            "name" => "Mỹ Hào",
            "type" => "thi-xa",
            "slug" => "my-hao",
            "name_with_type" => "Thị xã Mỹ Hào",
            "path" => "Mỹ Hào, Hưng Yên",
            "path_with_type" => "Thị xã Mỹ Hào, Tỉnh Hưng Yên",
            "city_id" => "33"
        ]);
        District::factory()->create([
            "id" => "329",
            "name" => "Ân Thi",
            "type" => "huyen",
            "slug" => "an-thi",
            "name_with_type" => "Huyện Ân Thi",
            "path" => "Ân Thi, Hưng Yên",
            "path_with_type" => "Huyện Ân Thi, Tỉnh Hưng Yên",
            "city_id" => "33"
        ]);
        District::factory()->create([
            "id" => "330",
            "name" => "Khoái Châu",
            "type" => "huyen",
            "slug" => "khoai-chau",
            "name_with_type" => "Huyện Khoái Châu",
            "path" => "Khoái Châu, Hưng Yên",
            "path_with_type" => "Huyện Khoái Châu, Tỉnh Hưng Yên",
            "city_id" => "33"
        ]);
        District::factory()->create([
            "id" => "331",
            "name" => "Kim Động",
            "type" => "huyen",
            "slug" => "kim-dong",
            "name_with_type" => "Huyện Kim Động",
            "path" => "Kim Động, Hưng Yên",
            "path_with_type" => "Huyện Kim Động, Tỉnh Hưng Yên",
            "city_id" => "33"
        ]);
        District::factory()->create([
            "id" => "332",
            "name" => "Tiên Lữ",
            "type" => "huyen",
            "slug" => "tien-lu",
            "name_with_type" => "Huyện Tiên Lữ",
            "path" => "Tiên Lữ, Hưng Yên",
            "path_with_type" => "Huyện Tiên Lữ, Tỉnh Hưng Yên",
            "city_id" => "33"
        ]);
        District::factory()->create([
            "id" => "333",
            "name" => "Phù Cừ",
            "type" => "huyen",
            "slug" => "phu-cu",
            "name_with_type" => "Huyện Phù Cừ",
            "path" => "Phù Cừ, Hưng Yên",
            "path_with_type" => "Huyện Phù Cừ, Tỉnh Hưng Yên",
            "city_id" => "33"
        ]);
        District::factory()->create([
            "id" => "336",
            "name" => "Thái Bình",
            "type" => "thanh-pho",
            "slug" => "thai-binh",
            "name_with_type" => "Thành phố Thái Bình",
            "path" => "Thái Bình, Thái Bình",
            "path_with_type" => "Thành phố Thái Bình, Tỉnh Thái Bình",
            "city_id" => "34"
        ]);
        District::factory()->create([
            "id" => "338",
            "name" => "Quỳnh Phụ",
            "type" => "huyen",
            "slug" => "quynh-phu",
            "name_with_type" => "Huyện Quỳnh Phụ",
            "path" => "Quỳnh Phụ, Thái Bình",
            "path_with_type" => "Huyện Quỳnh Phụ, Tỉnh Thái Bình",
            "city_id" => "34"
        ]);
        District::factory()->create([
            "id" => "339",
            "name" => "Hưng Hà",
            "type" => "huyen",
            "slug" => "hung-ha",
            "name_with_type" => "Huyện Hưng Hà",
            "path" => "Hưng Hà, Thái Bình",
            "path_with_type" => "Huyện Hưng Hà, Tỉnh Thái Bình",
            "city_id" => "34"
        ]);
        District::factory()->create([
            "id" => "340",
            "name" => "Đông Hưng",
            "type" => "huyen",
            "slug" => "dong-hung",
            "name_with_type" => "Huyện Đông Hưng",
            "path" => "Đông Hưng, Thái Bình",
            "path_with_type" => "Huyện Đông Hưng, Tỉnh Thái Bình",
            "city_id" => "34"
        ]);
        District::factory()->create([
            "id" => "341",
            "name" => "Thái Thụy",
            "type" => "huyen",
            "slug" => "thai-thuy",
            "name_with_type" => "Huyện Thái Thụy",
            "path" => "Thái Thụy, Thái Bình",
            "path_with_type" => "Huyện Thái Thụy, Tỉnh Thái Bình",
            "city_id" => "34"
        ]);
        District::factory()->create([
            "id" => "342",
            "name" => "Tiền Hải",
            "type" => "huyen",
            "slug" => "tien-hai",
            "name_with_type" => "Huyện Tiền Hải",
            "path" => "Tiền Hải, Thái Bình",
            "path_with_type" => "Huyện Tiền Hải, Tỉnh Thái Bình",
            "city_id" => "34"
        ]);
        District::factory()->create([
            "id" => "343",
            "name" => "Kiến Xương",
            "type" => "huyen",
            "slug" => "kien-xuong",
            "name_with_type" => "Huyện Kiến Xương",
            "path" => "Kiến Xương, Thái Bình",
            "path_with_type" => "Huyện Kiến Xương, Tỉnh Thái Bình",
            "city_id" => "34"
        ]);
        District::factory()->create([
            "id" => "344",
            "name" => "Vũ Thư",
            "type" => "huyen",
            "slug" => "vu-thu",
            "name_with_type" => "Huyện Vũ Thư",
            "path" => "Vũ Thư, Thái Bình",
            "path_with_type" => "Huyện Vũ Thư, Tỉnh Thái Bình",
            "city_id" => "34"
        ]);
        District::factory()->create([
            "id" => "347",
            "name" => "Phủ Lý",
            "type" => "thanh-pho",
            "slug" => "phu-ly",
            "name_with_type" => "Thành phố Phủ Lý",
            "path" => "Phủ Lý, Hà Nam",
            "path_with_type" => "Thành phố Phủ Lý, Tỉnh Hà Nam",
            "city_id" => "35"
        ]);
        District::factory()->create([
            "id" => "349",
            "name" => "Duy Tiên",
            "type" => "thi-xa",
            "slug" => "duy-tien",
            "name_with_type" => "Thị xã Duy Tiên",
            "path" => "Duy Tiên, Hà Nam",
            "path_with_type" => "Thị xã Duy Tiên, Tỉnh Hà Nam",
            "city_id" => "35"
        ]);
        District::factory()->create([
            "id" => "350",
            "name" => "Kim Bảng",
            "type" => "huyen",
            "slug" => "kim-bang",
            "name_with_type" => "Huyện Kim Bảng",
            "path" => "Kim Bảng, Hà Nam",
            "path_with_type" => "Huyện Kim Bảng, Tỉnh Hà Nam",
            "city_id" => "35"
        ]);
        District::factory()->create([
            "id" => "351",
            "name" => "Thanh Liêm",
            "type" => "huyen",
            "slug" => "thanh-liem",
            "name_with_type" => "Huyện Thanh Liêm",
            "path" => "Thanh Liêm, Hà Nam",
            "path_with_type" => "Huyện Thanh Liêm, Tỉnh Hà Nam",
            "city_id" => "35"
        ]);
        District::factory()->create([
            "id" => "352",
            "name" => "Bình Lục",
            "type" => "huyen",
            "slug" => "binh-luc",
            "name_with_type" => "Huyện Bình Lục",
            "path" => "Bình Lục, Hà Nam",
            "path_with_type" => "Huyện Bình Lục, Tỉnh Hà Nam",
            "city_id" => "35"
        ]);
        District::factory()->create([
            "id" => "353",
            "name" => "Lý Nhân",
            "type" => "huyen",
            "slug" => "ly-nhan",
            "name_with_type" => "Huyện Lý Nhân",
            "path" => "Lý Nhân, Hà Nam",
            "path_with_type" => "Huyện Lý Nhân, Tỉnh Hà Nam",
            "city_id" => "35"
        ]);
        District::factory()->create([
            "id" => "356",
            "name" => "Nam Định",
            "type" => "thanh-pho",
            "slug" => "nam-dinh",
            "name_with_type" => "Thành phố Nam Định",
            "path" => "Nam Định, Nam Định",
            "path_with_type" => "Thành phố Nam Định, Tỉnh Nam Định",
            "city_id" => "36"
        ]);
        District::factory()->create([
            "id" => "358",
            "name" => "Mỹ Lộc",
            "type" => "huyen",
            "slug" => "my-loc",
            "name_with_type" => "Huyện Mỹ Lộc",
            "path" => "Mỹ Lộc, Nam Định",
            "path_with_type" => "Huyện Mỹ Lộc, Tỉnh Nam Định",
            "city_id" => "36"
        ]);
        District::factory()->create([
            "id" => "359",
            "name" => "Vụ Bản",
            "type" => "huyen",
            "slug" => "vu-ban",
            "name_with_type" => "Huyện Vụ Bản",
            "path" => "Vụ Bản, Nam Định",
            "path_with_type" => "Huyện Vụ Bản, Tỉnh Nam Định",
            "city_id" => "36"
        ]);
        District::factory()->create([
            "id" => "360",
            "name" => "Ý Yên",
            "type" => "huyen",
            "slug" => "y-yen",
            "name_with_type" => "Huyện Ý Yên",
            "path" => "Ý Yên, Nam Định",
            "path_with_type" => "Huyện Ý Yên, Tỉnh Nam Định",
            "city_id" => "36"
        ]);
        District::factory()->create([
            "id" => "361",
            "name" => "Nghĩa Hưng",
            "type" => "huyen",
            "slug" => "nghia-hung",
            "name_with_type" => "Huyện Nghĩa Hưng",
            "path" => "Nghĩa Hưng, Nam Định",
            "path_with_type" => "Huyện Nghĩa Hưng, Tỉnh Nam Định",
            "city_id" => "36"
        ]);
        District::factory()->create([
            "id" => "362",
            "name" => "Nam Trực",
            "type" => "huyen",
            "slug" => "nam-truc",
            "name_with_type" => "Huyện Nam Trực",
            "path" => "Nam Trực, Nam Định",
            "path_with_type" => "Huyện Nam Trực, Tỉnh Nam Định",
            "city_id" => "36"
        ]);
        District::factory()->create([
            "id" => "363",
            "name" => "Trực Ninh",
            "type" => "huyen",
            "slug" => "truc-ninh",
            "name_with_type" => "Huyện Trực Ninh",
            "path" => "Trực Ninh, Nam Định",
            "path_with_type" => "Huyện Trực Ninh, Tỉnh Nam Định",
            "city_id" => "36"
        ]);
        District::factory()->create([
            "id" => "364",
            "name" => "Xuân Trường",
            "type" => "huyen",
            "slug" => "xuan-truong",
            "name_with_type" => "Huyện Xuân Trường",
            "path" => "Xuân Trường, Nam Định",
            "path_with_type" => "Huyện Xuân Trường, Tỉnh Nam Định",
            "city_id" => "36"
        ]);
        District::factory()->create([
            "id" => "365",
            "name" => "Giao Thủy",
            "type" => "huyen",
            "slug" => "giao-thuy",
            "name_with_type" => "Huyện Giao Thủy",
            "path" => "Giao Thủy, Nam Định",
            "path_with_type" => "Huyện Giao Thủy, Tỉnh Nam Định",
            "city_id" => "36"
        ]);
        District::factory()->create([
            "id" => "366",
            "name" => "Hải Hậu",
            "type" => "huyen",
            "slug" => "hai-hau",
            "name_with_type" => "Huyện Hải Hậu",
            "path" => "Hải Hậu, Nam Định",
            "path_with_type" => "Huyện Hải Hậu, Tỉnh Nam Định",
            "city_id" => "36"
        ]);
        District::factory()->create([
            "id" => "369",
            "name" => "Ninh Bình",
            "type" => "thanh-pho",
            "slug" => "ninh-binh",
            "name_with_type" => "Thành phố Ninh Bình",
            "path" => "Ninh Bình, Ninh Bình",
            "path_with_type" => "Thành phố Ninh Bình, Tỉnh Ninh Bình",
            "city_id" => "37"
        ]);
        District::factory()->create([
            "id" => "370",
            "name" => "Tam Điệp",
            "type" => "thanh-pho",
            "slug" => "tam-diep",
            "name_with_type" => "Thành phố Tam Điệp",
            "path" => "Tam Điệp, Ninh Bình",
            "path_with_type" => "Thành phố Tam Điệp, Tỉnh Ninh Bình",
            "city_id" => "37"
        ]);
        District::factory()->create([
            "id" => "372",
            "name" => "Nho Quan",
            "type" => "huyen",
            "slug" => "nho-quan",
            "name_with_type" => "Huyện Nho Quan",
            "path" => "Nho Quan, Ninh Bình",
            "path_with_type" => "Huyện Nho Quan, Tỉnh Ninh Bình",
            "city_id" => "37"
        ]);
        District::factory()->create([
            "id" => "373",
            "name" => "Gia Viễn",
            "type" => "huyen",
            "slug" => "gia-vien",
            "name_with_type" => "Huyện Gia Viễn",
            "path" => "Gia Viễn, Ninh Bình",
            "path_with_type" => "Huyện Gia Viễn, Tỉnh Ninh Bình",
            "city_id" => "37"
        ]);
        District::factory()->create([
            "id" => "374",
            "name" => "Hoa Lư",
            "type" => "huyen",
            "slug" => "hoa-lu",
            "name_with_type" => "Huyện Hoa Lư",
            "path" => "Hoa Lư, Ninh Bình",
            "path_with_type" => "Huyện Hoa Lư, Tỉnh Ninh Bình",
            "city_id" => "37"
        ]);
        District::factory()->create([
            "id" => "375",
            "name" => "Yên Khánh",
            "type" => "huyen",
            "slug" => "yen-khanh",
            "name_with_type" => "Huyện Yên Khánh",
            "path" => "Yên Khánh, Ninh Bình",
            "path_with_type" => "Huyện Yên Khánh, Tỉnh Ninh Bình",
            "city_id" => "37"
        ]);
        District::factory()->create([
            "id" => "376",
            "name" => "Kim Sơn",
            "type" => "huyen",
            "slug" => "kim-son",
            "name_with_type" => "Huyện Kim Sơn",
            "path" => "Kim Sơn, Ninh Bình",
            "path_with_type" => "Huyện Kim Sơn, Tỉnh Ninh Bình",
            "city_id" => "37"
        ]);
        District::factory()->create([
            "id" => "377",
            "name" => "Yên Mô",
            "type" => "huyen",
            "slug" => "yen-mo",
            "name_with_type" => "Huyện Yên Mô",
            "path" => "Yên Mô, Ninh Bình",
            "path_with_type" => "Huyện Yên Mô, Tỉnh Ninh Bình",
            "city_id" => "37"
        ]);
        District::factory()->create([
            "id" => "380",
            "name" => "Thanh Hóa",
            "type" => "thanh-pho",
            "slug" => "thanh-hoa",
            "name_with_type" => "Thành phố Thanh Hóa",
            "path" => "Thanh Hóa, Thanh Hóa",
            "path_with_type" => "Thành phố Thanh Hóa, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "381",
            "name" => "Bỉm Sơn",
            "type" => "thi-xa",
            "slug" => "bim-son",
            "name_with_type" => "Thị xã Bỉm Sơn",
            "path" => "Bỉm Sơn, Thanh Hóa",
            "path_with_type" => "Thị xã Bỉm Sơn, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "382",
            "name" => "Sầm Sơn",
            "type" => "thanh-pho",
            "slug" => "sam-son",
            "name_with_type" => "Thành phố Sầm Sơn",
            "path" => "Sầm Sơn, Thanh Hóa",
            "path_with_type" => "Thành phố Sầm Sơn, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "384",
            "name" => "Mường Lát",
            "type" => "huyen",
            "slug" => "muong-lat",
            "name_with_type" => "Huyện Mường Lát",
            "path" => "Mường Lát, Thanh Hóa",
            "path_with_type" => "Huyện Mường Lát, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "385",
            "name" => "Quan Hóa",
            "type" => "huyen",
            "slug" => "quan-hoa",
            "name_with_type" => "Huyện Quan Hóa",
            "path" => "Quan Hóa, Thanh Hóa",
            "path_with_type" => "Huyện Quan Hóa, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "386",
            "name" => "Bá Thước",
            "type" => "huyen",
            "slug" => "ba-thuoc",
            "name_with_type" => "Huyện Bá Thước",
            "path" => "Bá Thước, Thanh Hóa",
            "path_with_type" => "Huyện Bá Thước, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "387",
            "name" => "Quan Sơn",
            "type" => "huyen",
            "slug" => "quan-son",
            "name_with_type" => "Huyện Quan Sơn",
            "path" => "Quan Sơn, Thanh Hóa",
            "path_with_type" => "Huyện Quan Sơn, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "388",
            "name" => "Lang Chánh",
            "type" => "huyen",
            "slug" => "lang-chanh",
            "name_with_type" => "Huyện Lang Chánh",
            "path" => "Lang Chánh, Thanh Hóa",
            "path_with_type" => "Huyện Lang Chánh, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "389",
            "name" => "Ngọc Lặc",
            "type" => "huyen",
            "slug" => "ngoc-lac",
            "name_with_type" => "Huyện Ngọc Lặc",
            "path" => "Ngọc Lặc, Thanh Hóa",
            "path_with_type" => "Huyện Ngọc Lặc, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "390",
            "name" => "Cẩm Thủy",
            "type" => "huyen",
            "slug" => "cam-thuy",
            "name_with_type" => "Huyện Cẩm Thủy",
            "path" => "Cẩm Thủy, Thanh Hóa",
            "path_with_type" => "Huyện Cẩm Thủy, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "391",
            "name" => "Thạch Thành",
            "type" => "huyen",
            "slug" => "thach-thanh",
            "name_with_type" => "Huyện Thạch Thành",
            "path" => "Thạch Thành, Thanh Hóa",
            "path_with_type" => "Huyện Thạch Thành, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "392",
            "name" => "Hà Trung",
            "type" => "huyen",
            "slug" => "ha-trung",
            "name_with_type" => "Huyện Hà Trung",
            "path" => "Hà Trung, Thanh Hóa",
            "path_with_type" => "Huyện Hà Trung, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "393",
            "name" => "Vĩnh Lộc",
            "type" => "huyen",
            "slug" => "vinh-loc",
            "name_with_type" => "Huyện Vĩnh Lộc",
            "path" => "Vĩnh Lộc, Thanh Hóa",
            "path_with_type" => "Huyện Vĩnh Lộc, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "394",
            "name" => "Yên Định",
            "type" => "huyen",
            "slug" => "yen-dinh",
            "name_with_type" => "Huyện Yên Định",
            "path" => "Yên Định, Thanh Hóa",
            "path_with_type" => "Huyện Yên Định, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "395",
            "name" => "Thọ Xuân",
            "type" => "huyen",
            "slug" => "tho-xuan",
            "name_with_type" => "Huyện Thọ Xuân",
            "path" => "Thọ Xuân, Thanh Hóa",
            "path_with_type" => "Huyện Thọ Xuân, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "396",
            "name" => "Thường Xuân",
            "type" => "huyen",
            "slug" => "thuong-xuan",
            "name_with_type" => "Huyện Thường Xuân",
            "path" => "Thường Xuân, Thanh Hóa",
            "path_with_type" => "Huyện Thường Xuân, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "397",
            "name" => "Triệu Sơn",
            "type" => "huyen",
            "slug" => "trieu-son",
            "name_with_type" => "Huyện Triệu Sơn",
            "path" => "Triệu Sơn, Thanh Hóa",
            "path_with_type" => "Huyện Triệu Sơn, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "398",
            "name" => "Thiệu Hóa",
            "type" => "huyen",
            "slug" => "thieu-hoa",
            "name_with_type" => "Huyện Thiệu Hóa",
            "path" => "Thiệu Hóa, Thanh Hóa",
            "path_with_type" => "Huyện Thiệu Hóa, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "399",
            "name" => "Hoằng Hóa",
            "type" => "huyen",
            "slug" => "hoang-hoa",
            "name_with_type" => "Huyện Hoằng Hóa",
            "path" => "Hoằng Hóa, Thanh Hóa",
            "path_with_type" => "Huyện Hoằng Hóa, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "400",
            "name" => "Hậu Lộc",
            "type" => "huyen",
            "slug" => "hau-loc",
            "name_with_type" => "Huyện Hậu Lộc",
            "path" => "Hậu Lộc, Thanh Hóa",
            "path_with_type" => "Huyện Hậu Lộc, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "401",
            "name" => "Nga Sơn",
            "type" => "huyen",
            "slug" => "nga-son",
            "name_with_type" => "Huyện Nga Sơn",
            "path" => "Nga Sơn, Thanh Hóa",
            "path_with_type" => "Huyện Nga Sơn, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "402",
            "name" => "Như Xuân",
            "type" => "huyen",
            "slug" => "nhu-xuan",
            "name_with_type" => "Huyện Như Xuân",
            "path" => "Như Xuân, Thanh Hóa",
            "path_with_type" => "Huyện Như Xuân, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "403",
            "name" => "Như Thanh",
            "type" => "huyen",
            "slug" => "nhu-thanh",
            "name_with_type" => "Huyện Như Thanh",
            "path" => "Như Thanh, Thanh Hóa",
            "path_with_type" => "Huyện Như Thanh, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "404",
            "name" => "Nông Cống",
            "type" => "huyen",
            "slug" => "nong-cong",
            "name_with_type" => "Huyện Nông Cống",
            "path" => "Nông Cống, Thanh Hóa",
            "path_with_type" => "Huyện Nông Cống, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "405",
            "name" => "Đông Sơn",
            "type" => "huyen",
            "slug" => "dong-son",
            "name_with_type" => "Huyện Đông Sơn",
            "path" => "Đông Sơn, Thanh Hóa",
            "path_with_type" => "Huyện Đông Sơn, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "406",
            "name" => "Quảng Xương",
            "type" => "huyen",
            "slug" => "quang-xuong",
            "name_with_type" => "Huyện Quảng Xương",
            "path" => "Quảng Xương, Thanh Hóa",
            "path_with_type" => "Huyện Quảng Xương, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "407",
            "name" => "Nghi Sơn",
            "type" => "thi-xa",
            "slug" => "nghi-son",
            "name_with_type" => "Thị xã Nghi Sơn",
            "path" => "Nghi Sơn, Thanh Hóa",
            "path_with_type" => "Thị xã Nghi Sơn, Tỉnh Thanh Hóa",
            "city_id" => "38"
        ]);
        District::factory()->create([
            "id" => "412",
            "name" => "Vinh",
            "type" => "thanh-pho",
            "slug" => "vinh",
            "name_with_type" => "Thành phố Vinh",
            "path" => "Vinh, Nghệ An",
            "path_with_type" => "Thành phố Vinh, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "413",
            "name" => "Cửa Lò",
            "type" => "thi-xa",
            "slug" => "cua-lo",
            "name_with_type" => "Thị xã Cửa Lò",
            "path" => "Cửa Lò, Nghệ An",
            "path_with_type" => "Thị xã Cửa Lò, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "414",
            "name" => "Thái Hoà",
            "type" => "thi-xa",
            "slug" => "thai-hoa",
            "name_with_type" => "Thị xã Thái Hoà",
            "path" => "Thái Hoà, Nghệ An",
            "path_with_type" => "Thị xã Thái Hoà, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "415",
            "name" => "Quế Phong",
            "type" => "huyen",
            "slug" => "que-phong",
            "name_with_type" => "Huyện Quế Phong",
            "path" => "Quế Phong, Nghệ An",
            "path_with_type" => "Huyện Quế Phong, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "416",
            "name" => "Quỳ Châu",
            "type" => "huyen",
            "slug" => "quy-chau",
            "name_with_type" => "Huyện Quỳ Châu",
            "path" => "Quỳ Châu, Nghệ An",
            "path_with_type" => "Huyện Quỳ Châu, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "417",
            "name" => "Kỳ Sơn",
            "type" => "huyen",
            "slug" => "ky-son",
            "name_with_type" => "Huyện Kỳ Sơn",
            "path" => "Kỳ Sơn, Nghệ An",
            "path_with_type" => "Huyện Kỳ Sơn, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "418",
            "name" => "Tương Dương",
            "type" => "huyen",
            "slug" => "tuong-duong",
            "name_with_type" => "Huyện Tương Dương",
            "path" => "Tương Dương, Nghệ An",
            "path_with_type" => "Huyện Tương Dương, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "419",
            "name" => "Nghĩa Đàn",
            "type" => "huyen",
            "slug" => "nghia-dan",
            "name_with_type" => "Huyện Nghĩa Đàn",
            "path" => "Nghĩa Đàn, Nghệ An",
            "path_with_type" => "Huyện Nghĩa Đàn, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "420",
            "name" => "Quỳ Hợp",
            "type" => "huyen",
            "slug" => "quy-hop",
            "name_with_type" => "Huyện Quỳ Hợp",
            "path" => "Quỳ Hợp, Nghệ An",
            "path_with_type" => "Huyện Quỳ Hợp, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "421",
            "name" => "Quỳnh Lưu",
            "type" => "huyen",
            "slug" => "quynh-luu",
            "name_with_type" => "Huyện Quỳnh Lưu",
            "path" => "Quỳnh Lưu, Nghệ An",
            "path_with_type" => "Huyện Quỳnh Lưu, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "422",
            "name" => "Con Cuông",
            "type" => "huyen",
            "slug" => "con-cuong",
            "name_with_type" => "Huyện Con Cuông",
            "path" => "Con Cuông, Nghệ An",
            "path_with_type" => "Huyện Con Cuông, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "423",
            "name" => "Tân Kỳ",
            "type" => "huyen",
            "slug" => "tan-ky",
            "name_with_type" => "Huyện Tân Kỳ",
            "path" => "Tân Kỳ, Nghệ An",
            "path_with_type" => "Huyện Tân Kỳ, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "424",
            "name" => "Anh Sơn",
            "type" => "huyen",
            "slug" => "anh-son",
            "name_with_type" => "Huyện Anh Sơn",
            "path" => "Anh Sơn, Nghệ An",
            "path_with_type" => "Huyện Anh Sơn, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "425",
            "name" => "Diễn Châu",
            "type" => "huyen",
            "slug" => "dien-chau",
            "name_with_type" => "Huyện Diễn Châu",
            "path" => "Diễn Châu, Nghệ An",
            "path_with_type" => "Huyện Diễn Châu, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "426",
            "name" => "Yên Thành",
            "type" => "huyen",
            "slug" => "yen-thanh",
            "name_with_type" => "Huyện Yên Thành",
            "path" => "Yên Thành, Nghệ An",
            "path_with_type" => "Huyện Yên Thành, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "427",
            "name" => "Đô Lương",
            "type" => "huyen",
            "slug" => "do-luong",
            "name_with_type" => "Huyện Đô Lương",
            "path" => "Đô Lương, Nghệ An",
            "path_with_type" => "Huyện Đô Lương, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "428",
            "name" => "Thanh Chương",
            "type" => "huyen",
            "slug" => "thanh-chuong",
            "name_with_type" => "Huyện Thanh Chương",
            "path" => "Thanh Chương, Nghệ An",
            "path_with_type" => "Huyện Thanh Chương, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "429",
            "name" => "Nghi Lộc",
            "type" => "huyen",
            "slug" => "nghi-loc",
            "name_with_type" => "Huyện Nghi Lộc",
            "path" => "Nghi Lộc, Nghệ An",
            "path_with_type" => "Huyện Nghi Lộc, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "430",
            "name" => "Nam Đàn",
            "type" => "huyen",
            "slug" => "nam-dan",
            "name_with_type" => "Huyện Nam Đàn",
            "path" => "Nam Đàn, Nghệ An",
            "path_with_type" => "Huyện Nam Đàn, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "431",
            "name" => "Hưng Nguyên",
            "type" => "huyen",
            "slug" => "hung-nguyen",
            "name_with_type" => "Huyện Hưng Nguyên",
            "path" => "Hưng Nguyên, Nghệ An",
            "path_with_type" => "Huyện Hưng Nguyên, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "432",
            "name" => "Hoàng Mai",
            "type" => "thi-xa",
            "slug" => "hoang-mai",
            "name_with_type" => "Thị xã Hoàng Mai",
            "path" => "Hoàng Mai, Nghệ An",
            "path_with_type" => "Thị xã Hoàng Mai, Tỉnh Nghệ An",
            "city_id" => "40"
        ]);
        District::factory()->create([
            "id" => "436",
            "name" => "Hà Tĩnh",
            "type" => "thanh-pho",
            "slug" => "ha-tinh",
            "name_with_type" => "Thành phố Hà Tĩnh",
            "path" => "Hà Tĩnh, Hà Tĩnh",
            "path_with_type" => "Thành phố Hà Tĩnh, Tỉnh Hà Tĩnh",
            "city_id" => "42"
        ]);
        District::factory()->create([
            "id" => "437",
            "name" => "Hồng Lĩnh",
            "type" => "thi-xa",
            "slug" => "hong-linh",
            "name_with_type" => "Thị xã Hồng Lĩnh",
            "path" => "Hồng Lĩnh, Hà Tĩnh",
            "path_with_type" => "Thị xã Hồng Lĩnh, Tỉnh Hà Tĩnh",
            "city_id" => "42"
        ]);
        District::factory()->create([
            "id" => "439",
            "name" => "Hương Sơn",
            "type" => "huyen",
            "slug" => "huong-son",
            "name_with_type" => "Huyện Hương Sơn",
            "path" => "Hương Sơn, Hà Tĩnh",
            "path_with_type" => "Huyện Hương Sơn, Tỉnh Hà Tĩnh",
            "city_id" => "42"
        ]);
        District::factory()->create([
            "id" => "440",
            "name" => "Đức Thọ",
            "type" => "huyen",
            "slug" => "duc-tho",
            "name_with_type" => "Huyện Đức Thọ",
            "path" => "Đức Thọ, Hà Tĩnh",
            "path_with_type" => "Huyện Đức Thọ, Tỉnh Hà Tĩnh",
            "city_id" => "42"
        ]);
        District::factory()->create([
            "id" => "441",
            "name" => "Vũ Quang",
            "type" => "huyen",
            "slug" => "vu-quang",
            "name_with_type" => "Huyện Vũ Quang",
            "path" => "Vũ Quang, Hà Tĩnh",
            "path_with_type" => "Huyện Vũ Quang, Tỉnh Hà Tĩnh",
            "city_id" => "42"
        ]);
        District::factory()->create([
            "id" => "442",
            "name" => "Nghi Xuân",
            "type" => "huyen",
            "slug" => "nghi-xuan",
            "name_with_type" => "Huyện Nghi Xuân",
            "path" => "Nghi Xuân, Hà Tĩnh",
            "path_with_type" => "Huyện Nghi Xuân, Tỉnh Hà Tĩnh",
            "city_id" => "42"
        ]);
        District::factory()->create([
            "id" => "443",
            "name" => "Can Lộc",
            "type" => "huyen",
            "slug" => "can-loc",
            "name_with_type" => "Huyện Can Lộc",
            "path" => "Can Lộc, Hà Tĩnh",
            "path_with_type" => "Huyện Can Lộc, Tỉnh Hà Tĩnh",
            "city_id" => "42"
        ]);
        District::factory()->create([
            "id" => "444",
            "name" => "Hương Khê",
            "type" => "huyen",
            "slug" => "huong-khe",
            "name_with_type" => "Huyện Hương Khê",
            "path" => "Hương Khê, Hà Tĩnh",
            "path_with_type" => "Huyện Hương Khê, Tỉnh Hà Tĩnh",
            "city_id" => "42"
        ]);
        District::factory()->create([
            "id" => "445",
            "name" => "Thạch Hà",
            "type" => "huyen",
            "slug" => "thach-ha",
            "name_with_type" => "Huyện Thạch Hà",
            "path" => "Thạch Hà, Hà Tĩnh",
            "path_with_type" => "Huyện Thạch Hà, Tỉnh Hà Tĩnh",
            "city_id" => "42"
        ]);
        District::factory()->create([
            "id" => "446",
            "name" => "Cẩm Xuyên",
            "type" => "huyen",
            "slug" => "cam-xuyen",
            "name_with_type" => "Huyện Cẩm Xuyên",
            "path" => "Cẩm Xuyên, Hà Tĩnh",
            "path_with_type" => "Huyện Cẩm Xuyên, Tỉnh Hà Tĩnh",
            "city_id" => "42"
        ]);
        District::factory()->create([
            "id" => "447",
            "name" => "Kỳ Anh",
            "type" => "huyen",
            "slug" => "ky-anh",
            "name_with_type" => "Huyện Kỳ Anh",
            "path" => "Kỳ Anh, Hà Tĩnh",
            "path_with_type" => "Huyện Kỳ Anh, Tỉnh Hà Tĩnh",
            "city_id" => "42"
        ]);
        District::factory()->create([
            "id" => "448",
            "name" => "Lộc Hà",
            "type" => "huyen",
            "slug" => "loc-ha",
            "name_with_type" => "Huyện Lộc Hà",
            "path" => "Lộc Hà, Hà Tĩnh",
            "path_with_type" => "Huyện Lộc Hà, Tỉnh Hà Tĩnh",
            "city_id" => "42"
        ]);
        District::factory()->create([
            "id" => "449",
            "name" => "Kỳ Anh",
            "type" => "thi-xa",
            "slug" => "ky-anh",
            "name_with_type" => "Thị xã Kỳ Anh",
            "path" => "Kỳ Anh, Hà Tĩnh",
            "path_with_type" => "Thị xã Kỳ Anh, Tỉnh Hà Tĩnh",
            "city_id" => "42"
        ]);
        District::factory()->create([
            "id" => "450",
            "name" => "Đồng Hới",
            "type" => "thanh-pho",
            "slug" => "dong-hoi",
            "name_with_type" => "Thành Phố Đồng Hới",
            "path" => "Đồng Hới, Quảng Bình",
            "path_with_type" => "Thành Phố Đồng Hới, Tỉnh Quảng Bình",
            "city_id" => "44"
        ]);
        District::factory()->create([
            "id" => "452",
            "name" => "Minh Hóa",
            "type" => "huyen",
            "slug" => "minh-hoa",
            "name_with_type" => "Huyện Minh Hóa",
            "path" => "Minh Hóa, Quảng Bình",
            "path_with_type" => "Huyện Minh Hóa, Tỉnh Quảng Bình",
            "city_id" => "44"
        ]);
        District::factory()->create([
            "id" => "453",
            "name" => "Tuyên Hóa",
            "type" => "huyen",
            "slug" => "tuyen-hoa",
            "name_with_type" => "Huyện Tuyên Hóa",
            "path" => "Tuyên Hóa, Quảng Bình",
            "path_with_type" => "Huyện Tuyên Hóa, Tỉnh Quảng Bình",
            "city_id" => "44"
        ]);
        District::factory()->create([
            "id" => "454",
            "name" => "Quảng Trạch",
            "type" => "huyen",
            "slug" => "quang-trach",
            "name_with_type" => "Huyện Quảng Trạch",
            "path" => "Quảng Trạch, Quảng Bình",
            "path_with_type" => "Huyện Quảng Trạch, Tỉnh Quảng Bình",
            "city_id" => "44"
        ]);
        District::factory()->create([
            "id" => "455",
            "name" => "Bố Trạch",
            "type" => "huyen",
            "slug" => "bo-trach",
            "name_with_type" => "Huyện Bố Trạch",
            "path" => "Bố Trạch, Quảng Bình",
            "path_with_type" => "Huyện Bố Trạch, Tỉnh Quảng Bình",
            "city_id" => "44"
        ]);
        District::factory()->create([
            "id" => "456",
            "name" => "Quảng Ninh",
            "type" => "huyen",
            "slug" => "quang-ninh",
            "name_with_type" => "Huyện Quảng Ninh",
            "path" => "Quảng Ninh, Quảng Bình",
            "path_with_type" => "Huyện Quảng Ninh, Tỉnh Quảng Bình",
            "city_id" => "44"
        ]);
        District::factory()->create([
            "id" => "457",
            "name" => "Lệ Thủy",
            "type" => "huyen",
            "slug" => "le-thuy",
            "name_with_type" => "Huyện Lệ Thủy",
            "path" => "Lệ Thủy, Quảng Bình",
            "path_with_type" => "Huyện Lệ Thủy, Tỉnh Quảng Bình",
            "city_id" => "44"
        ]);
        District::factory()->create([
            "id" => "458",
            "name" => "Ba Đồn",
            "type" => "thi-xa",
            "slug" => "ba-don",
            "name_with_type" => "Thị xã Ba Đồn",
            "path" => "Ba Đồn, Quảng Bình",
            "path_with_type" => "Thị xã Ba Đồn, Tỉnh Quảng Bình",
            "city_id" => "44"
        ]);
        District::factory()->create([
            "id" => "461",
            "name" => "Đông Hà",
            "type" => "thanh-pho",
            "slug" => "dong-ha",
            "name_with_type" => "Thành phố Đông Hà",
            "path" => "Đông Hà, Quảng Trị",
            "path_with_type" => "Thành phố Đông Hà, Tỉnh Quảng Trị",
            "city_id" => "45"
        ]);
        District::factory()->create([
            "id" => "462",
            "name" => "Quảng Trị",
            "type" => "thi-xa",
            "slug" => "quang-tri",
            "name_with_type" => "Thị xã Quảng Trị",
            "path" => "Quảng Trị, Quảng Trị",
            "path_with_type" => "Thị xã Quảng Trị, Tỉnh Quảng Trị",
            "city_id" => "45"
        ]);
        District::factory()->create([
            "id" => "464",
            "name" => "Vĩnh Linh",
            "type" => "huyen",
            "slug" => "vinh-linh",
            "name_with_type" => "Huyện Vĩnh Linh",
            "path" => "Vĩnh Linh, Quảng Trị",
            "path_with_type" => "Huyện Vĩnh Linh, Tỉnh Quảng Trị",
            "city_id" => "45"
        ]);
        District::factory()->create([
            "id" => "465",
            "name" => "Hướng Hóa",
            "type" => "huyen",
            "slug" => "huong-hoa",
            "name_with_type" => "Huyện Hướng Hóa",
            "path" => "Hướng Hóa, Quảng Trị",
            "path_with_type" => "Huyện Hướng Hóa, Tỉnh Quảng Trị",
            "city_id" => "45"
        ]);
        District::factory()->create([
            "id" => "466",
            "name" => "Gio Linh",
            "type" => "huyen",
            "slug" => "gio-linh",
            "name_with_type" => "Huyện Gio Linh",
            "path" => "Gio Linh, Quảng Trị",
            "path_with_type" => "Huyện Gio Linh, Tỉnh Quảng Trị",
            "city_id" => "45"
        ]);
        District::factory()->create([
            "id" => "467",
            "name" => "Đa Krông",
            "type" => "huyen",
            "slug" => "da-krong",
            "name_with_type" => "Huyện Đa Krông",
            "path" => "Đa Krông, Quảng Trị",
            "path_with_type" => "Huyện Đa Krông, Tỉnh Quảng Trị",
            "city_id" => "45"
        ]);
        District::factory()->create([
            "id" => "468",
            "name" => "Cam Lộ",
            "type" => "huyen",
            "slug" => "cam-lo",
            "name_with_type" => "Huyện Cam Lộ",
            "path" => "Cam Lộ, Quảng Trị",
            "path_with_type" => "Huyện Cam Lộ, Tỉnh Quảng Trị",
            "city_id" => "45"
        ]);
        District::factory()->create([
            "id" => "469",
            "name" => "Triệu Phong",
            "type" => "huyen",
            "slug" => "trieu-phong",
            "name_with_type" => "Huyện Triệu Phong",
            "path" => "Triệu Phong, Quảng Trị",
            "path_with_type" => "Huyện Triệu Phong, Tỉnh Quảng Trị",
            "city_id" => "45"
        ]);
        District::factory()->create([
            "id" => "470",
            "name" => "Hải Lăng",
            "type" => "huyen",
            "slug" => "hai-lang",
            "name_with_type" => "Huyện Hải Lăng",
            "path" => "Hải Lăng, Quảng Trị",
            "path_with_type" => "Huyện Hải Lăng, Tỉnh Quảng Trị",
            "city_id" => "45"
        ]);
        District::factory()->create([
            "id" => "471",
            "name" => "Cồn Cỏ",
            "type" => "huyen",
            "slug" => "con-co",
            "name_with_type" => "Huyện Cồn Cỏ",
            "path" => "Cồn Cỏ, Quảng Trị",
            "path_with_type" => "Huyện Cồn Cỏ, Tỉnh Quảng Trị",
            "city_id" => "45"
        ]);
        District::factory()->create([
            "id" => "474",
            "name" => "Huế",
            "type" => "thanh-pho",
            "slug" => "hue",
            "name_with_type" => "Thành phố Huế",
            "path" => "Huế, Thừa Thiên Huế",
            "path_with_type" => "Thành phố Huế, Tỉnh Thừa Thiên Huế",
            "city_id" => "46"
        ]);
        District::factory()->create([
            "id" => "476",
            "name" => "Phong Điền",
            "type" => "huyen",
            "slug" => "phong-dien",
            "name_with_type" => "Huyện Phong Điền",
            "path" => "Phong Điền, Thừa Thiên Huế",
            "path_with_type" => "Huyện Phong Điền, Tỉnh Thừa Thiên Huế",
            "city_id" => "46"
        ]);
        District::factory()->create([
            "id" => "477",
            "name" => "Quảng Điền",
            "type" => "huyen",
            "slug" => "quang-dien",
            "name_with_type" => "Huyện Quảng Điền",
            "path" => "Quảng Điền, Thừa Thiên Huế",
            "path_with_type" => "Huyện Quảng Điền, Tỉnh Thừa Thiên Huế",
            "city_id" => "46"
        ]);
        District::factory()->create([
            "id" => "478",
            "name" => "Phú Vang",
            "type" => "huyen",
            "slug" => "phu-vang",
            "name_with_type" => "Huyện Phú Vang",
            "path" => "Phú Vang, Thừa Thiên Huế",
            "path_with_type" => "Huyện Phú Vang, Tỉnh Thừa Thiên Huế",
            "city_id" => "46"
        ]);
        District::factory()->create([
            "id" => "479",
            "name" => "Hương Thủy",
            "type" => "thi-xa",
            "slug" => "huong-thuy",
            "name_with_type" => "Thị xã Hương Thủy",
            "path" => "Hương Thủy, Thừa Thiên Huế",
            "path_with_type" => "Thị xã Hương Thủy, Tỉnh Thừa Thiên Huế",
            "city_id" => "46"
        ]);
        District::factory()->create([
            "id" => "480",
            "name" => "Hương Trà",
            "type" => "thi-xa",
            "slug" => "huong-tra",
            "name_with_type" => "Thị xã Hương Trà",
            "path" => "Hương Trà, Thừa Thiên Huế",
            "path_with_type" => "Thị xã Hương Trà, Tỉnh Thừa Thiên Huế",
            "city_id" => "46"
        ]);
        District::factory()->create([
            "id" => "481",
            "name" => "A Lưới",
            "type" => "huyen",
            "slug" => "a-luoi",
            "name_with_type" => "Huyện A Lưới",
            "path" => "A Lưới, Thừa Thiên Huế",
            "path_with_type" => "Huyện A Lưới, Tỉnh Thừa Thiên Huế",
            "city_id" => "46"
        ]);
        District::factory()->create([
            "id" => "482",
            "name" => "Phú Lộc",
            "type" => "huyen",
            "slug" => "phu-loc",
            "name_with_type" => "Huyện Phú Lộc",
            "path" => "Phú Lộc, Thừa Thiên Huế",
            "path_with_type" => "Huyện Phú Lộc, Tỉnh Thừa Thiên Huế",
            "city_id" => "46"
        ]);
        District::factory()->create([
            "id" => "483",
            "name" => "Nam Đông",
            "type" => "huyen",
            "slug" => "nam-dong",
            "name_with_type" => "Huyện Nam Đông",
            "path" => "Nam Đông, Thừa Thiên Huế",
            "path_with_type" => "Huyện Nam Đông, Tỉnh Thừa Thiên Huế",
            "city_id" => "46"
        ]);
        District::factory()->create([
            "id" => "490",
            "name" => "Liên Chiểu",
            "type" => "quan",
            "slug" => "lien-chieu",
            "name_with_type" => "Quận Liên Chiểu",
            "path" => "Liên Chiểu, Đà Nẵng",
            "path_with_type" => "Quận Liên Chiểu, Thành phố Đà Nẵng",
            "city_id" => "48"
        ]);
        District::factory()->create([
            "id" => "491",
            "name" => "Thanh Khê",
            "type" => "quan",
            "slug" => "thanh-khe",
            "name_with_type" => "Quận Thanh Khê",
            "path" => "Thanh Khê, Đà Nẵng",
            "path_with_type" => "Quận Thanh Khê, Thành phố Đà Nẵng",
            "city_id" => "48"
        ]);
        District::factory()->create([
            "id" => "492",
            "name" => "Hải Châu",
            "type" => "quan",
            "slug" => "hai-chau",
            "name_with_type" => "Quận Hải Châu",
            "path" => "Hải Châu, Đà Nẵng",
            "path_with_type" => "Quận Hải Châu, Thành phố Đà Nẵng",
            "city_id" => "48"
        ]);
        District::factory()->create([
            "id" => "493",
            "name" => "Sơn Trà",
            "type" => "quan",
            "slug" => "son-tra",
            "name_with_type" => "Quận Sơn Trà",
            "path" => "Sơn Trà, Đà Nẵng",
            "path_with_type" => "Quận Sơn Trà, Thành phố Đà Nẵng",
            "city_id" => "48"
        ]);
        District::factory()->create([
            "id" => "494",
            "name" => "Ngũ Hành Sơn",
            "type" => "quan",
            "slug" => "ngu-hanh-son",
            "name_with_type" => "Quận Ngũ Hành Sơn",
            "path" => "Ngũ Hành Sơn, Đà Nẵng",
            "path_with_type" => "Quận Ngũ Hành Sơn, Thành phố Đà Nẵng",
            "city_id" => "48"
        ]);
        District::factory()->create([
            "id" => "495",
            "name" => "Cẩm Lệ",
            "type" => "quan",
            "slug" => "cam-le",
            "name_with_type" => "Quận Cẩm Lệ",
            "path" => "Cẩm Lệ, Đà Nẵng",
            "path_with_type" => "Quận Cẩm Lệ, Thành phố Đà Nẵng",
            "city_id" => "48"
        ]);
        District::factory()->create([
            "id" => "497",
            "name" => "Hòa Vang",
            "type" => "huyen",
            "slug" => "hoa-vang",
            "name_with_type" => "Huyện Hòa Vang",
            "path" => "Hòa Vang, Đà Nẵng",
            "path_with_type" => "Huyện Hòa Vang, Thành phố Đà Nẵng",
            "city_id" => "48"
        ]);
        District::factory()->create([
            "id" => "498",
            "name" => "Hoàng Sa",
            "type" => "huyen",
            "slug" => "hoang-sa",
            "name_with_type" => "Huyện Hoàng Sa",
            "path" => "Hoàng Sa, Đà Nẵng",
            "path_with_type" => "Huyện Hoàng Sa, Thành phố Đà Nẵng",
            "city_id" => "48"
        ]);
        District::factory()->create([
            "id" => "502",
            "name" => "Tam Kỳ",
            "type" => "thanh-pho",
            "slug" => "tam-ky",
            "name_with_type" => "Thành phố Tam Kỳ",
            "path" => "Tam Kỳ, Quảng Nam",
            "path_with_type" => "Thành phố Tam Kỳ, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "503",
            "name" => "Hội An",
            "type" => "thanh-pho",
            "slug" => "hoi-an",
            "name_with_type" => "Thành phố Hội An",
            "path" => "Hội An, Quảng Nam",
            "path_with_type" => "Thành phố Hội An, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "504",
            "name" => "Tây Giang",
            "type" => "huyen",
            "slug" => "tay-giang",
            "name_with_type" => "Huyện Tây Giang",
            "path" => "Tây Giang, Quảng Nam",
            "path_with_type" => "Huyện Tây Giang, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "505",
            "name" => "Đông Giang",
            "type" => "huyen",
            "slug" => "dong-giang",
            "name_with_type" => "Huyện Đông Giang",
            "path" => "Đông Giang, Quảng Nam",
            "path_with_type" => "Huyện Đông Giang, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "506",
            "name" => "Đại Lộc",
            "type" => "huyen",
            "slug" => "dai-loc",
            "name_with_type" => "Huyện Đại Lộc",
            "path" => "Đại Lộc, Quảng Nam",
            "path_with_type" => "Huyện Đại Lộc, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "507",
            "name" => "Điện Bàn",
            "type" => "thi-xa",
            "slug" => "dien-ban",
            "name_with_type" => "Thị xã Điện Bàn",
            "path" => "Điện Bàn, Quảng Nam",
            "path_with_type" => "Thị xã Điện Bàn, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "508",
            "name" => "Duy Xuyên",
            "type" => "huyen",
            "slug" => "duy-xuyen",
            "name_with_type" => "Huyện Duy Xuyên",
            "path" => "Duy Xuyên, Quảng Nam",
            "path_with_type" => "Huyện Duy Xuyên, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "509",
            "name" => "Quế Sơn",
            "type" => "huyen",
            "slug" => "que-son",
            "name_with_type" => "Huyện Quế Sơn",
            "path" => "Quế Sơn, Quảng Nam",
            "path_with_type" => "Huyện Quế Sơn, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "510",
            "name" => "Nam Giang",
            "type" => "huyen",
            "slug" => "nam-giang",
            "name_with_type" => "Huyện Nam Giang",
            "path" => "Nam Giang, Quảng Nam",
            "path_with_type" => "Huyện Nam Giang, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "511",
            "name" => "Phước Sơn",
            "type" => "huyen",
            "slug" => "phuoc-son",
            "name_with_type" => "Huyện Phước Sơn",
            "path" => "Phước Sơn, Quảng Nam",
            "path_with_type" => "Huyện Phước Sơn, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "512",
            "name" => "Hiệp Đức",
            "type" => "huyen",
            "slug" => "hiep-duc",
            "name_with_type" => "Huyện Hiệp Đức",
            "path" => "Hiệp Đức, Quảng Nam",
            "path_with_type" => "Huyện Hiệp Đức, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "513",
            "name" => "Thăng Bình",
            "type" => "huyen",
            "slug" => "thang-binh",
            "name_with_type" => "Huyện Thăng Bình",
            "path" => "Thăng Bình, Quảng Nam",
            "path_with_type" => "Huyện Thăng Bình, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "514",
            "name" => "Tiên Phước",
            "type" => "huyen",
            "slug" => "tien-phuoc",
            "name_with_type" => "Huyện Tiên Phước",
            "path" => "Tiên Phước, Quảng Nam",
            "path_with_type" => "Huyện Tiên Phước, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "515",
            "name" => "Bắc Trà My",
            "type" => "huyen",
            "slug" => "bac-tra-my",
            "name_with_type" => "Huyện Bắc Trà My",
            "path" => "Bắc Trà My, Quảng Nam",
            "path_with_type" => "Huyện Bắc Trà My, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "516",
            "name" => "Nam Trà My",
            "type" => "huyen",
            "slug" => "nam-tra-my",
            "name_with_type" => "Huyện Nam Trà My",
            "path" => "Nam Trà My, Quảng Nam",
            "path_with_type" => "Huyện Nam Trà My, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "517",
            "name" => "Núi Thành",
            "type" => "huyen",
            "slug" => "nui-thanh",
            "name_with_type" => "Huyện Núi Thành",
            "path" => "Núi Thành, Quảng Nam",
            "path_with_type" => "Huyện Núi Thành, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "518",
            "name" => "Phú Ninh",
            "type" => "huyen",
            "slug" => "phu-ninh",
            "name_with_type" => "Huyện Phú Ninh",
            "path" => "Phú Ninh, Quảng Nam",
            "path_with_type" => "Huyện Phú Ninh, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "519",
            "name" => "Nông Sơn",
            "type" => "huyen",
            "slug" => "nong-son",
            "name_with_type" => "Huyện Nông Sơn",
            "path" => "Nông Sơn, Quảng Nam",
            "path_with_type" => "Huyện Nông Sơn, Tỉnh Quảng Nam",
            "city_id" => "49"
        ]);
        District::factory()->create([
            "id" => "522",
            "name" => "Quảng Ngãi",
            "type" => "thanh-pho",
            "slug" => "quang-ngai",
            "name_with_type" => "Thành phố Quảng Ngãi",
            "path" => "Quảng Ngãi, Quảng Ngãi",
            "path_with_type" => "Thành phố Quảng Ngãi, Tỉnh Quảng Ngãi",
            "city_id" => "51"
        ]);
        District::factory()->create([
            "id" => "524",
            "name" => "Bình Sơn",
            "type" => "huyen",
            "slug" => "binh-son",
            "name_with_type" => "Huyện Bình Sơn",
            "path" => "Bình Sơn, Quảng Ngãi",
            "path_with_type" => "Huyện Bình Sơn, Tỉnh Quảng Ngãi",
            "city_id" => "51"
        ]);
        District::factory()->create([
            "id" => "525",
            "name" => "Trà Bồng",
            "type" => "huyen",
            "slug" => "tra-bong",
            "name_with_type" => "Huyện Trà Bồng",
            "path" => "Trà Bồng, Quảng Ngãi",
            "path_with_type" => "Huyện Trà Bồng, Tỉnh Quảng Ngãi",
            "city_id" => "51"
        ]);
        District::factory()->create([
            "id" => "527",
            "name" => "Sơn Tịnh",
            "type" => "huyen",
            "slug" => "son-tinh",
            "name_with_type" => "Huyện Sơn Tịnh",
            "path" => "Sơn Tịnh, Quảng Ngãi",
            "path_with_type" => "Huyện Sơn Tịnh, Tỉnh Quảng Ngãi",
            "city_id" => "51"
        ]);
        District::factory()->create([
            "id" => "528",
            "name" => "Tư Nghĩa",
            "type" => "huyen",
            "slug" => "tu-nghia",
            "name_with_type" => "Huyện Tư Nghĩa",
            "path" => "Tư Nghĩa, Quảng Ngãi",
            "path_with_type" => "Huyện Tư Nghĩa, Tỉnh Quảng Ngãi",
            "city_id" => "51"
        ]);
        District::factory()->create([
            "id" => "529",
            "name" => "Sơn Hà",
            "type" => "huyen",
            "slug" => "son-ha",
            "name_with_type" => "Huyện Sơn Hà",
            "path" => "Sơn Hà, Quảng Ngãi",
            "path_with_type" => "Huyện Sơn Hà, Tỉnh Quảng Ngãi",
            "city_id" => "51"
        ]);
        District::factory()->create([
            "id" => "530",
            "name" => "Sơn Tây",
            "type" => "huyen",
            "slug" => "son-tay",
            "name_with_type" => "Huyện Sơn Tây",
            "path" => "Sơn Tây, Quảng Ngãi",
            "path_with_type" => "Huyện Sơn Tây, Tỉnh Quảng Ngãi",
            "city_id" => "51"
        ]);
        District::factory()->create([
            "id" => "531",
            "name" => "Minh Long",
            "type" => "huyen",
            "slug" => "minh-long",
            "name_with_type" => "Huyện Minh Long",
            "path" => "Minh Long, Quảng Ngãi",
            "path_with_type" => "Huyện Minh Long, Tỉnh Quảng Ngãi",
            "city_id" => "51"
        ]);
        District::factory()->create([
            "id" => "532",
            "name" => "Nghĩa Hành",
            "type" => "huyen",
            "slug" => "nghia-hanh",
            "name_with_type" => "Huyện Nghĩa Hành",
            "path" => "Nghĩa Hành, Quảng Ngãi",
            "path_with_type" => "Huyện Nghĩa Hành, Tỉnh Quảng Ngãi",
            "city_id" => "51"
        ]);
        District::factory()->create([
            "id" => "533",
            "name" => "Mộ Đức",
            "type" => "huyen",
            "slug" => "mo-duc",
            "name_with_type" => "Huyện Mộ Đức",
            "path" => "Mộ Đức, Quảng Ngãi",
            "path_with_type" => "Huyện Mộ Đức, Tỉnh Quảng Ngãi",
            "city_id" => "51"
        ]);
        District::factory()->create([
            "id" => "534",
            "name" => "Đức Phổ",
            "type" => "thi-xa",
            "slug" => "duc-pho",
            "name_with_type" => "Thị xã Đức Phổ",
            "path" => "Đức Phổ, Quảng Ngãi",
            "path_with_type" => "Thị xã Đức Phổ, Tỉnh Quảng Ngãi",
            "city_id" => "51"
        ]);
        District::factory()->create([
            "id" => "535",
            "name" => "Ba Tơ",
            "type" => "huyen",
            "slug" => "ba-to",
            "name_with_type" => "Huyện Ba Tơ",
            "path" => "Ba Tơ, Quảng Ngãi",
            "path_with_type" => "Huyện Ba Tơ, Tỉnh Quảng Ngãi",
            "city_id" => "51"
        ]);
        District::factory()->create([
            "id" => "536",
            "name" => "Lý Sơn",
            "type" => "huyen",
            "slug" => "ly-son",
            "name_with_type" => "Huyện Lý Sơn",
            "path" => "Lý Sơn, Quảng Ngãi",
            "path_with_type" => "Huyện Lý Sơn, Tỉnh Quảng Ngãi",
            "city_id" => "51"
        ]);
        District::factory()->create([
            "id" => "540",
            "name" => "Quy Nhơn",
            "type" => "thanh-pho",
            "slug" => "quy-nhon",
            "name_with_type" => "Thành phố Quy Nhơn",
            "path" => "Quy Nhơn, Bình Định",
            "path_with_type" => "Thành phố Quy Nhơn, Tỉnh Bình Định",
            "city_id" => "52"
        ]);
        District::factory()->create([
            "id" => "542",
            "name" => "An Lão",
            "type" => "huyen",
            "slug" => "an-lao",
            "name_with_type" => "Huyện An Lão",
            "path" => "An Lão, Bình Định",
            "path_with_type" => "Huyện An Lão, Tỉnh Bình Định",
            "city_id" => "52"
        ]);
        District::factory()->create([
            "id" => "543",
            "name" => "Hoài Nhơn",
            "type" => "thi-xa",
            "slug" => "hoai-nhon",
            "name_with_type" => "Thị xã Hoài Nhơn",
            "path" => "Hoài Nhơn, Bình Định",
            "path_with_type" => "Thị xã Hoài Nhơn, Tỉnh Bình Định",
            "city_id" => "52"
        ]);
        District::factory()->create([
            "id" => "544",
            "name" => "Hoài Ân",
            "type" => "huyen",
            "slug" => "hoai-an",
            "name_with_type" => "Huyện Hoài Ân",
            "path" => "Hoài Ân, Bình Định",
            "path_with_type" => "Huyện Hoài Ân, Tỉnh Bình Định",
            "city_id" => "52"
        ]);
        District::factory()->create([
            "id" => "545",
            "name" => "Phù Mỹ",
            "type" => "huyen",
            "slug" => "phu-my",
            "name_with_type" => "Huyện Phù Mỹ",
            "path" => "Phù Mỹ, Bình Định",
            "path_with_type" => "Huyện Phù Mỹ, Tỉnh Bình Định",
            "city_id" => "52"
        ]);
        District::factory()->create([
            "id" => "546",
            "name" => "Vĩnh Thạnh",
            "type" => "huyen",
            "slug" => "vinh-thanh",
            "name_with_type" => "Huyện Vĩnh Thạnh",
            "path" => "Vĩnh Thạnh, Bình Định",
            "path_with_type" => "Huyện Vĩnh Thạnh, Tỉnh Bình Định",
            "city_id" => "52"
        ]);
        District::factory()->create([
            "id" => "547",
            "name" => "Tây Sơn",
            "type" => "huyen",
            "slug" => "tay-son",
            "name_with_type" => "Huyện Tây Sơn",
            "path" => "Tây Sơn, Bình Định",
            "path_with_type" => "Huyện Tây Sơn, Tỉnh Bình Định",
            "city_id" => "52"
        ]);
        District::factory()->create([
            "id" => "548",
            "name" => "Phù Cát",
            "type" => "huyen",
            "slug" => "phu-cat",
            "name_with_type" => "Huyện Phù Cát",
            "path" => "Phù Cát, Bình Định",
            "path_with_type" => "Huyện Phù Cát, Tỉnh Bình Định",
            "city_id" => "52"
        ]);
        District::factory()->create([
            "id" => "549",
            "name" => "An Nhơn",
            "type" => "thi-xa",
            "slug" => "an-nhon",
            "name_with_type" => "Thị xã An Nhơn",
            "path" => "An Nhơn, Bình Định",
            "path_with_type" => "Thị xã An Nhơn, Tỉnh Bình Định",
            "city_id" => "52"
        ]);
        District::factory()->create([
            "id" => "550",
            "name" => "Tuy Phước",
            "type" => "huyen",
            "slug" => "tuy-phuoc",
            "name_with_type" => "Huyện Tuy Phước",
            "path" => "Tuy Phước, Bình Định",
            "path_with_type" => "Huyện Tuy Phước, Tỉnh Bình Định",
            "city_id" => "52"
        ]);
        District::factory()->create([
            "id" => "551",
            "name" => "Vân Canh",
            "type" => "huyen",
            "slug" => "van-canh",
            "name_with_type" => "Huyện Vân Canh",
            "path" => "Vân Canh, Bình Định",
            "path_with_type" => "Huyện Vân Canh, Tỉnh Bình Định",
            "city_id" => "52"
        ]);
        District::factory()->create([
            "id" => "555",
            "name" => "Tuy Hoà",
            "type" => "thanh-pho",
            "slug" => "tuy-hoa",
            "name_with_type" => "Thành phố Tuy Hoà",
            "path" => "Tuy Hoà, Phú Yên",
            "path_with_type" => "Thành phố Tuy Hoà, Tỉnh Phú Yên",
            "city_id" => "54"
        ]);
        District::factory()->create([
            "id" => "557",
            "name" => "Sông Cầu",
            "type" => "thi-xa",
            "slug" => "song-cau",
            "name_with_type" => "Thị xã Sông Cầu",
            "path" => "Sông Cầu, Phú Yên",
            "path_with_type" => "Thị xã Sông Cầu, Tỉnh Phú Yên",
            "city_id" => "54"
        ]);
        District::factory()->create([
            "id" => "558",
            "name" => "Đồng Xuân",
            "type" => "huyen",
            "slug" => "dong-xuan",
            "name_with_type" => "Huyện Đồng Xuân",
            "path" => "Đồng Xuân, Phú Yên",
            "path_with_type" => "Huyện Đồng Xuân, Tỉnh Phú Yên",
            "city_id" => "54"
        ]);
        District::factory()->create([
            "id" => "559",
            "name" => "Tuy An",
            "type" => "huyen",
            "slug" => "tuy-an",
            "name_with_type" => "Huyện Tuy An",
            "path" => "Tuy An, Phú Yên",
            "path_with_type" => "Huyện Tuy An, Tỉnh Phú Yên",
            "city_id" => "54"
        ]);
        District::factory()->create([
            "id" => "560",
            "name" => "Sơn Hòa",
            "type" => "huyen",
            "slug" => "son-hoa",
            "name_with_type" => "Huyện Sơn Hòa",
            "path" => "Sơn Hòa, Phú Yên",
            "path_with_type" => "Huyện Sơn Hòa, Tỉnh Phú Yên",
            "city_id" => "54"
        ]);
        District::factory()->create([
            "id" => "561",
            "name" => "Sông Hinh",
            "type" => "huyen",
            "slug" => "song-hinh",
            "name_with_type" => "Huyện Sông Hinh",
            "path" => "Sông Hinh, Phú Yên",
            "path_with_type" => "Huyện Sông Hinh, Tỉnh Phú Yên",
            "city_id" => "54"
        ]);
        District::factory()->create([
            "id" => "562",
            "name" => "Tây Hoà",
            "type" => "huyen",
            "slug" => "tay-hoa",
            "name_with_type" => "Huyện Tây Hoà",
            "path" => "Tây Hoà, Phú Yên",
            "path_with_type" => "Huyện Tây Hoà, Tỉnh Phú Yên",
            "city_id" => "54"
        ]);
        District::factory()->create([
            "id" => "563",
            "name" => "Phú Hoà",
            "type" => "huyen",
            "slug" => "phu-hoa",
            "name_with_type" => "Huyện Phú Hoà",
            "path" => "Phú Hoà, Phú Yên",
            "path_with_type" => "Huyện Phú Hoà, Tỉnh Phú Yên",
            "city_id" => "54"
        ]);
        District::factory()->create([
            "id" => "564",
            "name" => "Đông Hòa",
            "type" => "thi-xa",
            "slug" => "dong-hoa",
            "name_with_type" => "Thị xã Đông Hòa",
            "path" => "Đông Hòa, Phú Yên",
            "path_with_type" => "Thị xã Đông Hòa, Tỉnh Phú Yên",
            "city_id" => "54"
        ]);
        District::factory()->create([
            "id" => "568",
            "name" => "Nha Trang",
            "type" => "thanh-pho",
            "slug" => "nha-trang",
            "name_with_type" => "Thành phố Nha Trang",
            "path" => "Nha Trang, Khánh Hòa",
            "path_with_type" => "Thành phố Nha Trang, Tỉnh Khánh Hòa",
            "city_id" => "56"
        ]);
        District::factory()->create([
            "id" => "569",
            "name" => "Cam Ranh",
            "type" => "thanh-pho",
            "slug" => "cam-ranh",
            "name_with_type" => "Thành phố Cam Ranh",
            "path" => "Cam Ranh, Khánh Hòa",
            "path_with_type" => "Thành phố Cam Ranh, Tỉnh Khánh Hòa",
            "city_id" => "56"
        ]);
        District::factory()->create([
            "id" => "570",
            "name" => "Cam Lâm",
            "type" => "huyen",
            "slug" => "cam-lam",
            "name_with_type" => "Huyện Cam Lâm",
            "path" => "Cam Lâm, Khánh Hòa",
            "path_with_type" => "Huyện Cam Lâm, Tỉnh Khánh Hòa",
            "city_id" => "56"
        ]);
        District::factory()->create([
            "id" => "571",
            "name" => "Vạn Ninh",
            "type" => "huyen",
            "slug" => "van-ninh",
            "name_with_type" => "Huyện Vạn Ninh",
            "path" => "Vạn Ninh, Khánh Hòa",
            "path_with_type" => "Huyện Vạn Ninh, Tỉnh Khánh Hòa",
            "city_id" => "56"
        ]);
        District::factory()->create([
            "id" => "572",
            "name" => "Ninh Hòa",
            "type" => "thi-xa",
            "slug" => "ninh-hoa",
            "name_with_type" => "Thị xã Ninh Hòa",
            "path" => "Ninh Hòa, Khánh Hòa",
            "path_with_type" => "Thị xã Ninh Hòa, Tỉnh Khánh Hòa",
            "city_id" => "56"
        ]);
        District::factory()->create([
            "id" => "573",
            "name" => "Khánh Vĩnh",
            "type" => "huyen",
            "slug" => "khanh-vinh",
            "name_with_type" => "Huyện Khánh Vĩnh",
            "path" => "Khánh Vĩnh, Khánh Hòa",
            "path_with_type" => "Huyện Khánh Vĩnh, Tỉnh Khánh Hòa",
            "city_id" => "56"
        ]);
        District::factory()->create([
            "id" => "574",
            "name" => "Diên Khánh",
            "type" => "huyen",
            "slug" => "dien-khanh",
            "name_with_type" => "Huyện Diên Khánh",
            "path" => "Diên Khánh, Khánh Hòa",
            "path_with_type" => "Huyện Diên Khánh, Tỉnh Khánh Hòa",
            "city_id" => "56"
        ]);
        District::factory()->create([
            "id" => "575",
            "name" => "Khánh Sơn",
            "type" => "huyen",
            "slug" => "khanh-son",
            "name_with_type" => "Huyện Khánh Sơn",
            "path" => "Khánh Sơn, Khánh Hòa",
            "path_with_type" => "Huyện Khánh Sơn, Tỉnh Khánh Hòa",
            "city_id" => "56"
        ]);
        District::factory()->create([
            "id" => "576",
            "name" => "Trường Sa",
            "type" => "huyen",
            "slug" => "truong-sa",
            "name_with_type" => "Huyện Trường Sa",
            "path" => "Trường Sa, Khánh Hòa",
            "path_with_type" => "Huyện Trường Sa, Tỉnh Khánh Hòa",
            "city_id" => "56"
        ]);
        District::factory()->create([
            "id" => "582",
            "name" => "Phan Rang-Tháp Chàm",
            "type" => "thanh-pho",
            "slug" => "phan-rang-thap-cham",
            "name_with_type" => "Thành phố Phan Rang-Tháp Chàm",
            "path" => "Phan Rang-Tháp Chàm, Ninh Thuận",
            "path_with_type" => "Thành phố Phan Rang-Tháp Chàm, Tỉnh Ninh Thuận",
            "city_id" => "58"
        ]);
        District::factory()->create([
            "id" => "584",
            "name" => "Bác Ái",
            "type" => "huyen",
            "slug" => "bac-ai",
            "name_with_type" => "Huyện Bác Ái",
            "path" => "Bác Ái, Ninh Thuận",
            "path_with_type" => "Huyện Bác Ái, Tỉnh Ninh Thuận",
            "city_id" => "58"
        ]);
        District::factory()->create([
            "id" => "585",
            "name" => "Ninh Sơn",
            "type" => "huyen",
            "slug" => "ninh-son",
            "name_with_type" => "Huyện Ninh Sơn",
            "path" => "Ninh Sơn, Ninh Thuận",
            "path_with_type" => "Huyện Ninh Sơn, Tỉnh Ninh Thuận",
            "city_id" => "58"
        ]);
        District::factory()->create([
            "id" => "586",
            "name" => "Ninh Hải",
            "type" => "huyen",
            "slug" => "ninh-hai",
            "name_with_type" => "Huyện Ninh Hải",
            "path" => "Ninh Hải, Ninh Thuận",
            "path_with_type" => "Huyện Ninh Hải, Tỉnh Ninh Thuận",
            "city_id" => "58"
        ]);
        District::factory()->create([
            "id" => "587",
            "name" => "Ninh Phước",
            "type" => "huyen",
            "slug" => "ninh-phuoc",
            "name_with_type" => "Huyện Ninh Phước",
            "path" => "Ninh Phước, Ninh Thuận",
            "path_with_type" => "Huyện Ninh Phước, Tỉnh Ninh Thuận",
            "city_id" => "58"
        ]);
        District::factory()->create([
            "id" => "588",
            "name" => "Thuận Bắc",
            "type" => "huyen",
            "slug" => "thuan-bac",
            "name_with_type" => "Huyện Thuận Bắc",
            "path" => "Thuận Bắc, Ninh Thuận",
            "path_with_type" => "Huyện Thuận Bắc, Tỉnh Ninh Thuận",
            "city_id" => "58"
        ]);
        District::factory()->create([
            "id" => "589",
            "name" => "Thuận Nam",
            "type" => "huyen",
            "slug" => "thuan-nam",
            "name_with_type" => "Huyện Thuận Nam",
            "path" => "Thuận Nam, Ninh Thuận",
            "path_with_type" => "Huyện Thuận Nam, Tỉnh Ninh Thuận",
            "city_id" => "58"
        ]);
        District::factory()->create([
            "id" => "593",
            "name" => "Phan Thiết",
            "type" => "thanh-pho",
            "slug" => "phan-thiet",
            "name_with_type" => "Thành phố Phan Thiết",
            "path" => "Phan Thiết, Bình Thuận",
            "path_with_type" => "Thành phố Phan Thiết, Tỉnh Bình Thuận",
            "city_id" => "60"
        ]);
        District::factory()->create([
            "id" => "594",
            "name" => "La Gi",
            "type" => "thi-xa",
            "slug" => "la-gi",
            "name_with_type" => "Thị xã La Gi",
            "path" => "La Gi, Bình Thuận",
            "path_with_type" => "Thị xã La Gi, Tỉnh Bình Thuận",
            "city_id" => "60"
        ]);
        District::factory()->create([
            "id" => "595",
            "name" => "Tuy Phong",
            "type" => "huyen",
            "slug" => "tuy-phong",
            "name_with_type" => "Huyện Tuy Phong",
            "path" => "Tuy Phong, Bình Thuận",
            "path_with_type" => "Huyện Tuy Phong, Tỉnh Bình Thuận",
            "city_id" => "60"
        ]);
        District::factory()->create([
            "id" => "596",
            "name" => "Bắc Bình",
            "type" => "huyen",
            "slug" => "bac-binh",
            "name_with_type" => "Huyện Bắc Bình",
            "path" => "Bắc Bình, Bình Thuận",
            "path_with_type" => "Huyện Bắc Bình, Tỉnh Bình Thuận",
            "city_id" => "60"
        ]);
        District::factory()->create([
            "id" => "597",
            "name" => "Hàm Thuận Bắc",
            "type" => "huyen",
            "slug" => "ham-thuan-bac",
            "name_with_type" => "Huyện Hàm Thuận Bắc",
            "path" => "Hàm Thuận Bắc, Bình Thuận",
            "path_with_type" => "Huyện Hàm Thuận Bắc, Tỉnh Bình Thuận",
            "city_id" => "60"
        ]);
        District::factory()->create([
            "id" => "598",
            "name" => "Hàm Thuận Nam",
            "type" => "huyen",
            "slug" => "ham-thuan-nam",
            "name_with_type" => "Huyện Hàm Thuận Nam",
            "path" => "Hàm Thuận Nam, Bình Thuận",
            "path_with_type" => "Huyện Hàm Thuận Nam, Tỉnh Bình Thuận",
            "city_id" => "60"
        ]);
        District::factory()->create([
            "id" => "599",
            "name" => "Tánh Linh",
            "type" => "huyen",
            "slug" => "tanh-linh",
            "name_with_type" => "Huyện Tánh Linh",
            "path" => "Tánh Linh, Bình Thuận",
            "path_with_type" => "Huyện Tánh Linh, Tỉnh Bình Thuận",
            "city_id" => "60"
        ]);
        District::factory()->create([
            "id" => "600",
            "name" => "Đức Linh",
            "type" => "huyen",
            "slug" => "duc-linh",
            "name_with_type" => "Huyện Đức Linh",
            "path" => "Đức Linh, Bình Thuận",
            "path_with_type" => "Huyện Đức Linh, Tỉnh Bình Thuận",
            "city_id" => "60"
        ]);
        District::factory()->create([
            "id" => "601",
            "name" => "Hàm Tân",
            "type" => "huyen",
            "slug" => "ham-tan",
            "name_with_type" => "Huyện Hàm Tân",
            "path" => "Hàm Tân, Bình Thuận",
            "path_with_type" => "Huyện Hàm Tân, Tỉnh Bình Thuận",
            "city_id" => "60"
        ]);
        District::factory()->create([
            "id" => "602",
            "name" => "Phú Quí",
            "type" => "huyen",
            "slug" => "phu-qui",
            "name_with_type" => "Huyện Phú Quí",
            "path" => "Phú Quí, Bình Thuận",
            "path_with_type" => "Huyện Phú Quí, Tỉnh Bình Thuận",
            "city_id" => "60"
        ]);
        District::factory()->create([
            "id" => "608",
            "name" => "Kon Tum",
            "type" => "thanh-pho",
            "slug" => "kon-tum",
            "name_with_type" => "Thành phố Kon Tum",
            "path" => "Kon Tum, Kon Tum",
            "path_with_type" => "Thành phố Kon Tum, Tỉnh Kon Tum",
            "city_id" => "62"
        ]);
        District::factory()->create([
            "id" => "610",
            "name" => "Đắk Glei",
            "type" => "huyen",
            "slug" => "dak-glei",
            "name_with_type" => "Huyện Đắk Glei",
            "path" => "Đắk Glei, Kon Tum",
            "path_with_type" => "Huyện Đắk Glei, Tỉnh Kon Tum",
            "city_id" => "62"
        ]);
        District::factory()->create([
            "id" => "611",
            "name" => "Ngọc Hồi",
            "type" => "huyen",
            "slug" => "ngoc-hoi",
            "name_with_type" => "Huyện Ngọc Hồi",
            "path" => "Ngọc Hồi, Kon Tum",
            "path_with_type" => "Huyện Ngọc Hồi, Tỉnh Kon Tum",
            "city_id" => "62"
        ]);
        District::factory()->create([
            "id" => "612",
            "name" => "Đắk Tô",
            "type" => "huyen",
            "slug" => "dak-to",
            "name_with_type" => "Huyện Đắk Tô",
            "path" => "Đắk Tô, Kon Tum",
            "path_with_type" => "Huyện Đắk Tô, Tỉnh Kon Tum",
            "city_id" => "62"
        ]);
        District::factory()->create([
            "id" => "613",
            "name" => "Kon Plông",
            "type" => "huyen",
            "slug" => "kon-plong",
            "name_with_type" => "Huyện Kon Plông",
            "path" => "Kon Plông, Kon Tum",
            "path_with_type" => "Huyện Kon Plông, Tỉnh Kon Tum",
            "city_id" => "62"
        ]);
        District::factory()->create([
            "id" => "614",
            "name" => "Kon Rẫy",
            "type" => "huyen",
            "slug" => "kon-ray",
            "name_with_type" => "Huyện Kon Rẫy",
            "path" => "Kon Rẫy, Kon Tum",
            "path_with_type" => "Huyện Kon Rẫy, Tỉnh Kon Tum",
            "city_id" => "62"
        ]);
        District::factory()->create([
            "id" => "615",
            "name" => "Đắk Hà",
            "type" => "huyen",
            "slug" => "dak-ha",
            "name_with_type" => "Huyện Đắk Hà",
            "path" => "Đắk Hà, Kon Tum",
            "path_with_type" => "Huyện Đắk Hà, Tỉnh Kon Tum",
            "city_id" => "62"
        ]);
        District::factory()->create([
            "id" => "616",
            "name" => "Sa Thầy",
            "type" => "huyen",
            "slug" => "sa-thay",
            "name_with_type" => "Huyện Sa Thầy",
            "path" => "Sa Thầy, Kon Tum",
            "path_with_type" => "Huyện Sa Thầy, Tỉnh Kon Tum",
            "city_id" => "62"
        ]);
        District::factory()->create([
            "id" => "617",
            "name" => "Tu Mơ Rông",
            "type" => "huyen",
            "slug" => "tu-mo-rong",
            "name_with_type" => "Huyện Tu Mơ Rông",
            "path" => "Tu Mơ Rông, Kon Tum",
            "path_with_type" => "Huyện Tu Mơ Rông, Tỉnh Kon Tum",
            "city_id" => "62"
        ]);
        District::factory()->create([
            "id" => "618",
            "name" => "Ia H' Drai",
            "type" => "huyen",
            "slug" => "ia-h-drai",
            "name_with_type" => "Huyện Ia H' Drai",
            "path" => "Ia H' Drai, Kon Tum",
            "path_with_type" => "Huyện Ia H' Drai, Tỉnh Kon Tum",
            "city_id" => "62"
        ]);
        District::factory()->create([
            "id" => "622",
            "name" => "Pleiku",
            "type" => "thanh-pho",
            "slug" => "pleiku",
            "name_with_type" => "Thành phố Pleiku",
            "path" => "Pleiku, Gia Lai",
            "path_with_type" => "Thành phố Pleiku, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "623",
            "name" => "An Khê",
            "type" => "thi-xa",
            "slug" => "an-khe",
            "name_with_type" => "Thị xã An Khê",
            "path" => "An Khê, Gia Lai",
            "path_with_type" => "Thị xã An Khê, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "624",
            "name" => "Ayun Pa",
            "type" => "thi-xa",
            "slug" => "ayun-pa",
            "name_with_type" => "Thị xã Ayun Pa",
            "path" => "Ayun Pa, Gia Lai",
            "path_with_type" => "Thị xã Ayun Pa, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "625",
            "name" => "KBang",
            "type" => "huyen",
            "slug" => "kbang",
            "name_with_type" => "Huyện KBang",
            "path" => "KBang, Gia Lai",
            "path_with_type" => "Huyện KBang, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "626",
            "name" => "Đăk Đoa",
            "type" => "huyen",
            "slug" => "dak-doa",
            "name_with_type" => "Huyện Đăk Đoa",
            "path" => "Đăk Đoa, Gia Lai",
            "path_with_type" => "Huyện Đăk Đoa, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "627",
            "name" => "Chư Păh",
            "type" => "huyen",
            "slug" => "chu-pah",
            "name_with_type" => "Huyện Chư Păh",
            "path" => "Chư Păh, Gia Lai",
            "path_with_type" => "Huyện Chư Păh, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "628",
            "name" => "Ia Grai",
            "type" => "huyen",
            "slug" => "ia-grai",
            "name_with_type" => "Huyện Ia Grai",
            "path" => "Ia Grai, Gia Lai",
            "path_with_type" => "Huyện Ia Grai, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "629",
            "name" => "Mang Yang",
            "type" => "huyen",
            "slug" => "mang-yang",
            "name_with_type" => "Huyện Mang Yang",
            "path" => "Mang Yang, Gia Lai",
            "path_with_type" => "Huyện Mang Yang, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "630",
            "name" => "Kông Chro",
            "type" => "huyen",
            "slug" => "kong-chro",
            "name_with_type" => "Huyện Kông Chro",
            "path" => "Kông Chro, Gia Lai",
            "path_with_type" => "Huyện Kông Chro, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "631",
            "name" => "Đức Cơ",
            "type" => "huyen",
            "slug" => "duc-co",
            "name_with_type" => "Huyện Đức Cơ",
            "path" => "Đức Cơ, Gia Lai",
            "path_with_type" => "Huyện Đức Cơ, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "632",
            "name" => "Chư Prông",
            "type" => "huyen",
            "slug" => "chu-prong",
            "name_with_type" => "Huyện Chư Prông",
            "path" => "Chư Prông, Gia Lai",
            "path_with_type" => "Huyện Chư Prông, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "633",
            "name" => "Chư Sê",
            "type" => "huyen",
            "slug" => "chu-se",
            "name_with_type" => "Huyện Chư Sê",
            "path" => "Chư Sê, Gia Lai",
            "path_with_type" => "Huyện Chư Sê, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "634",
            "name" => "Đăk Pơ",
            "type" => "huyen",
            "slug" => "dak-po",
            "name_with_type" => "Huyện Đăk Pơ",
            "path" => "Đăk Pơ, Gia Lai",
            "path_with_type" => "Huyện Đăk Pơ, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "635",
            "name" => "Ia Pa",
            "type" => "huyen",
            "slug" => "ia-pa",
            "name_with_type" => "Huyện Ia Pa",
            "path" => "Ia Pa, Gia Lai",
            "path_with_type" => "Huyện Ia Pa, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "637",
            "name" => "Krông Pa",
            "type" => "huyen",
            "slug" => "krong-pa",
            "name_with_type" => "Huyện Krông Pa",
            "path" => "Krông Pa, Gia Lai",
            "path_with_type" => "Huyện Krông Pa, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "638",
            "name" => "Phú Thiện",
            "type" => "huyen",
            "slug" => "phu-thien",
            "name_with_type" => "Huyện Phú Thiện",
            "path" => "Phú Thiện, Gia Lai",
            "path_with_type" => "Huyện Phú Thiện, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "639",
            "name" => "Chư Pưh",
            "type" => "huyen",
            "slug" => "chu-puh",
            "name_with_type" => "Huyện Chư Pưh",
            "path" => "Chư Pưh, Gia Lai",
            "path_with_type" => "Huyện Chư Pưh, Tỉnh Gia Lai",
            "city_id" => "64"
        ]);
        District::factory()->create([
            "id" => "643",
            "name" => "Buôn Ma Thuột",
            "type" => "thanh-pho",
            "slug" => "buon-ma-thuot",
            "name_with_type" => "Thành phố Buôn Ma Thuột",
            "path" => "Buôn Ma Thuột, Đắk Lắk",
            "path_with_type" => "Thành phố Buôn Ma Thuột, Tỉnh Đắk Lắk",
            "city_id" => "66"
        ]);
        District::factory()->create([
            "id" => "644",
            "name" => "Buôn Hồ",
            "type" => "thi-xa",
            "slug" => "buon-ho",
            "name_with_type" => "Thị xã Buôn Hồ",
            "path" => "Buôn Hồ, Đắk Lắk",
            "path_with_type" => "Thị xã Buôn Hồ, Tỉnh Đắk Lắk",
            "city_id" => "66"
        ]);
        District::factory()->create([
            "id" => "645",
            "name" => "Ea H'leo",
            "type" => "huyen",
            "slug" => "ea-h-leo",
            "name_with_type" => "Huyện Ea H'leo",
            "path" => "Ea H'leo, Đắk Lắk",
            "path_with_type" => "Huyện Ea H'leo, Tỉnh Đắk Lắk",
            "city_id" => "66"
        ]);
        District::factory()->create([
            "id" => "646",
            "name" => "Ea Súp",
            "type" => "huyen",
            "slug" => "ea-sup",
            "name_with_type" => "Huyện Ea Súp",
            "path" => "Ea Súp, Đắk Lắk",
            "path_with_type" => "Huyện Ea Súp, Tỉnh Đắk Lắk",
            "city_id" => "66"
        ]);
        District::factory()->create([
            "id" => "647",
            "name" => "Buôn Đôn",
            "type" => "huyen",
            "slug" => "buon-don",
            "name_with_type" => "Huyện Buôn Đôn",
            "path" => "Buôn Đôn, Đắk Lắk",
            "path_with_type" => "Huyện Buôn Đôn, Tỉnh Đắk Lắk",
            "city_id" => "66"
        ]);
        District::factory()->create([
            "id" => "648",
            "name" => "Cư M'gar",
            "type" => "huyen",
            "slug" => "cu-m-gar",
            "name_with_type" => "Huyện Cư M'gar",
            "path" => "Cư M'gar, Đắk Lắk",
            "path_with_type" => "Huyện Cư M'gar, Tỉnh Đắk Lắk",
            "city_id" => "66"
        ]);
        District::factory()->create([
            "id" => "649",
            "name" => "Krông Búk",
            "type" => "huyen",
            "slug" => "krong-buk",
            "name_with_type" => "Huyện Krông Búk",
            "path" => "Krông Búk, Đắk Lắk",
            "path_with_type" => "Huyện Krông Búk, Tỉnh Đắk Lắk",
            "city_id" => "66"
        ]);
        District::factory()->create([
            "id" => "650",
            "name" => "Krông Năng",
            "type" => "huyen",
            "slug" => "krong-nang",
            "name_with_type" => "Huyện Krông Năng",
            "path" => "Krông Năng, Đắk Lắk",
            "path_with_type" => "Huyện Krông Năng, Tỉnh Đắk Lắk",
            "city_id" => "66"
        ]);
        District::factory()->create([
            "id" => "651",
            "name" => "Ea Kar",
            "type" => "huyen",
            "slug" => "ea-kar",
            "name_with_type" => "Huyện Ea Kar",
            "path" => "Ea Kar, Đắk Lắk",
            "path_with_type" => "Huyện Ea Kar, Tỉnh Đắk Lắk",
            "city_id" => "66"
        ]);
        District::factory()->create([
            "id" => "652",
            "name" => "M'Đrắk",
            "type" => "huyen",
            "slug" => "m-drak",
            "name_with_type" => "Huyện M'Đrắk",
            "path" => "M'Đrắk, Đắk Lắk",
            "path_with_type" => "Huyện M'Đrắk, Tỉnh Đắk Lắk",
            "city_id" => "66"
        ]);
        District::factory()->create([
            "id" => "653",
            "name" => "Krông Bông",
            "type" => "huyen",
            "slug" => "krong-bong",
            "name_with_type" => "Huyện Krông Bông",
            "path" => "Krông Bông, Đắk Lắk",
            "path_with_type" => "Huyện Krông Bông, Tỉnh Đắk Lắk",
            "city_id" => "66"
        ]);
        District::factory()->create([
            "id" => "654",
            "name" => "Krông Pắc",
            "type" => "huyen",
            "slug" => "krong-pac",
            "name_with_type" => "Huyện Krông Pắc",
            "path" => "Krông Pắc, Đắk Lắk",
            "path_with_type" => "Huyện Krông Pắc, Tỉnh Đắk Lắk",
            "city_id" => "66"
        ]);
        District::factory()->create([
            "id" => "655",
            "name" => "Krông A Na",
            "type" => "huyen",
            "slug" => "krong-a-na",
            "name_with_type" => "Huyện Krông A Na",
            "path" => "Krông A Na, Đắk Lắk",
            "path_with_type" => "Huyện Krông A Na, Tỉnh Đắk Lắk",
            "city_id" => "66"
        ]);
        District::factory()->create([
            "id" => "656",
            "name" => "Lắk",
            "type" => "huyen",
            "slug" => "lak",
            "name_with_type" => "Huyện Lắk",
            "path" => "Lắk, Đắk Lắk",
            "path_with_type" => "Huyện Lắk, Tỉnh Đắk Lắk",
            "city_id" => "66"
        ]);
        District::factory()->create([
            "id" => "657",
            "name" => "Cư Kuin",
            "type" => "huyen",
            "slug" => "cu-kuin",
            "name_with_type" => "Huyện Cư Kuin",
            "path" => "Cư Kuin, Đắk Lắk",
            "path_with_type" => "Huyện Cư Kuin, Tỉnh Đắk Lắk",
            "city_id" => "66"
        ]);
        District::factory()->create([
            "id" => "660",
            "name" => "Gia Nghĩa",
            "type" => "thanh-pho",
            "slug" => "gia-nghia",
            "name_with_type" => "Thành phố Gia Nghĩa",
            "path" => "Gia Nghĩa, Đắk Nông",
            "path_with_type" => "Thành phố Gia Nghĩa, Tỉnh Đắk Nông",
            "city_id" => "67"
        ]);
        District::factory()->create([
            "id" => "661",
            "name" => "Đăk Glong",
            "type" => "huyen",
            "slug" => "dak-glong",
            "name_with_type" => "Huyện Đăk Glong",
            "path" => "Đăk Glong, Đắk Nông",
            "path_with_type" => "Huyện Đăk Glong, Tỉnh Đắk Nông",
            "city_id" => "67"
        ]);
        District::factory()->create([
            "id" => "662",
            "name" => "Cư Jút",
            "type" => "huyen",
            "slug" => "cu-jut",
            "name_with_type" => "Huyện Cư Jút",
            "path" => "Cư Jút, Đắk Nông",
            "path_with_type" => "Huyện Cư Jút, Tỉnh Đắk Nông",
            "city_id" => "67"
        ]);
        District::factory()->create([
            "id" => "663",
            "name" => "Đắk Mil",
            "type" => "huyen",
            "slug" => "dak-mil",
            "name_with_type" => "Huyện Đắk Mil",
            "path" => "Đắk Mil, Đắk Nông",
            "path_with_type" => "Huyện Đắk Mil, Tỉnh Đắk Nông",
            "city_id" => "67"
        ]);
        District::factory()->create([
            "id" => "664",
            "name" => "Krông Nô",
            "type" => "huyen",
            "slug" => "krong-no",
            "name_with_type" => "Huyện Krông Nô",
            "path" => "Krông Nô, Đắk Nông",
            "path_with_type" => "Huyện Krông Nô, Tỉnh Đắk Nông",
            "city_id" => "67"
        ]);
        District::factory()->create([
            "id" => "665",
            "name" => "Đắk Song",
            "type" => "huyen",
            "slug" => "dak-song",
            "name_with_type" => "Huyện Đắk Song",
            "path" => "Đắk Song, Đắk Nông",
            "path_with_type" => "Huyện Đắk Song, Tỉnh Đắk Nông",
            "city_id" => "67"
        ]);
        District::factory()->create([
            "id" => "666",
            "name" => "Đắk R'Lấp",
            "type" => "huyen",
            "slug" => "dak-r-lap",
            "name_with_type" => "Huyện Đắk R'Lấp",
            "path" => "Đắk R'Lấp, Đắk Nông",
            "path_with_type" => "Huyện Đắk R'Lấp, Tỉnh Đắk Nông",
            "city_id" => "67"
        ]);
        District::factory()->create([
            "id" => "667",
            "name" => "Tuy Đức",
            "type" => "huyen",
            "slug" => "tuy-duc",
            "name_with_type" => "Huyện Tuy Đức",
            "path" => "Tuy Đức, Đắk Nông",
            "path_with_type" => "Huyện Tuy Đức, Tỉnh Đắk Nông",
            "city_id" => "67"
        ]);
        District::factory()->create([
            "id" => "672",
            "name" => "Đà Lạt",
            "type" => "thanh-pho",
            "slug" => "da-lat",
            "name_with_type" => "Thành phố Đà Lạt",
            "path" => "Đà Lạt, Lâm Đồng",
            "path_with_type" => "Thành phố Đà Lạt, Tỉnh Lâm Đồng",
            "city_id" => "68"
        ]);
        District::factory()->create([
            "id" => "673",
            "name" => "Bảo Lộc",
            "type" => "thanh-pho",
            "slug" => "bao-loc",
            "name_with_type" => "Thành phố Bảo Lộc",
            "path" => "Bảo Lộc, Lâm Đồng",
            "path_with_type" => "Thành phố Bảo Lộc, Tỉnh Lâm Đồng",
            "city_id" => "68"
        ]);
        District::factory()->create([
            "id" => "674",
            "name" => "Đam Rông",
            "type" => "huyen",
            "slug" => "dam-rong",
            "name_with_type" => "Huyện Đam Rông",
            "path" => "Đam Rông, Lâm Đồng",
            "path_with_type" => "Huyện Đam Rông, Tỉnh Lâm Đồng",
            "city_id" => "68"
        ]);
        District::factory()->create([
            "id" => "675",
            "name" => "Lạc Dương",
            "type" => "huyen",
            "slug" => "lac-duong",
            "name_with_type" => "Huyện Lạc Dương",
            "path" => "Lạc Dương, Lâm Đồng",
            "path_with_type" => "Huyện Lạc Dương, Tỉnh Lâm Đồng",
            "city_id" => "68"
        ]);
        District::factory()->create([
            "id" => "676",
            "name" => "Lâm Hà",
            "type" => "huyen",
            "slug" => "lam-ha",
            "name_with_type" => "Huyện Lâm Hà",
            "path" => "Lâm Hà, Lâm Đồng",
            "path_with_type" => "Huyện Lâm Hà, Tỉnh Lâm Đồng",
            "city_id" => "68"
        ]);
        District::factory()->create([
            "id" => "677",
            "name" => "Đơn Dương",
            "type" => "huyen",
            "slug" => "don-duong",
            "name_with_type" => "Huyện Đơn Dương",
            "path" => "Đơn Dương, Lâm Đồng",
            "path_with_type" => "Huyện Đơn Dương, Tỉnh Lâm Đồng",
            "city_id" => "68"
        ]);
        District::factory()->create([
            "id" => "678",
            "name" => "Đức Trọng",
            "type" => "huyen",
            "slug" => "duc-trong",
            "name_with_type" => "Huyện Đức Trọng",
            "path" => "Đức Trọng, Lâm Đồng",
            "path_with_type" => "Huyện Đức Trọng, Tỉnh Lâm Đồng",
            "city_id" => "68"
        ]);
        District::factory()->create([
            "id" => "679",
            "name" => "Di Linh",
            "type" => "huyen",
            "slug" => "di-linh",
            "name_with_type" => "Huyện Di Linh",
            "path" => "Di Linh, Lâm Đồng",
            "path_with_type" => "Huyện Di Linh, Tỉnh Lâm Đồng",
            "city_id" => "68"
        ]);
        District::factory()->create([
            "id" => "680",
            "name" => "Bảo Lâm",
            "type" => "huyen",
            "slug" => "bao-lam",
            "name_with_type" => "Huyện Bảo Lâm",
            "path" => "Bảo Lâm, Lâm Đồng",
            "path_with_type" => "Huyện Bảo Lâm, Tỉnh Lâm Đồng",
            "city_id" => "68"
        ]);
        District::factory()->create([
            "id" => "681",
            "name" => "Đạ Huoai",
            "type" => "huyen",
            "slug" => "da-huoai",
            "name_with_type" => "Huyện Đạ Huoai",
            "path" => "Đạ Huoai, Lâm Đồng",
            "path_with_type" => "Huyện Đạ Huoai, Tỉnh Lâm Đồng",
            "city_id" => "68"
        ]);
        District::factory()->create([
            "id" => "682",
            "name" => "Đạ Tẻh",
            "type" => "huyen",
            "slug" => "da-teh",
            "name_with_type" => "Huyện Đạ Tẻh",
            "path" => "Đạ Tẻh, Lâm Đồng",
            "path_with_type" => "Huyện Đạ Tẻh, Tỉnh Lâm Đồng",
            "city_id" => "68"
        ]);
        District::factory()->create([
            "id" => "683",
            "name" => "Cát Tiên",
            "type" => "huyen",
            "slug" => "cat-tien",
            "name_with_type" => "Huyện Cát Tiên",
            "path" => "Cát Tiên, Lâm Đồng",
            "path_with_type" => "Huyện Cát Tiên, Tỉnh Lâm Đồng",
            "city_id" => "68"
        ]);
        District::factory()->create([
            "id" => "688",
            "name" => "Phước Long",
            "type" => "thi-xa",
            "slug" => "phuoc-long",
            "name_with_type" => "Thị xã Phước Long",
            "path" => "Phước Long, Bình Phước",
            "path_with_type" => "Thị xã Phước Long, Tỉnh Bình Phước",
            "city_id" => "70"
        ]);
        District::factory()->create([
            "id" => "689",
            "name" => "Đồng Xoài",
            "type" => "thanh-pho",
            "slug" => "dong-xoai",
            "name_with_type" => "Thành phố Đồng Xoài",
            "path" => "Đồng Xoài, Bình Phước",
            "path_with_type" => "Thành phố Đồng Xoài, Tỉnh Bình Phước",
            "city_id" => "70"
        ]);
        District::factory()->create([
            "id" => "690",
            "name" => "Bình Long",
            "type" => "thi-xa",
            "slug" => "binh-long",
            "name_with_type" => "Thị xã Bình Long",
            "path" => "Bình Long, Bình Phước",
            "path_with_type" => "Thị xã Bình Long, Tỉnh Bình Phước",
            "city_id" => "70"
        ]);
        District::factory()->create([
            "id" => "691",
            "name" => "Bù Gia Mập",
            "type" => "huyen",
            "slug" => "bu-gia-map",
            "name_with_type" => "Huyện Bù Gia Mập",
            "path" => "Bù Gia Mập, Bình Phước",
            "path_with_type" => "Huyện Bù Gia Mập, Tỉnh Bình Phước",
            "city_id" => "70"
        ]);
        District::factory()->create([
            "id" => "692",
            "name" => "Lộc Ninh",
            "type" => "huyen",
            "slug" => "loc-ninh",
            "name_with_type" => "Huyện Lộc Ninh",
            "path" => "Lộc Ninh, Bình Phước",
            "path_with_type" => "Huyện Lộc Ninh, Tỉnh Bình Phước",
            "city_id" => "70"
        ]);
        District::factory()->create([
            "id" => "693",
            "name" => "Bù Đốp",
            "type" => "huyen",
            "slug" => "bu-dop",
            "name_with_type" => "Huyện Bù Đốp",
            "path" => "Bù Đốp, Bình Phước",
            "path_with_type" => "Huyện Bù Đốp, Tỉnh Bình Phước",
            "city_id" => "70"
        ]);
        District::factory()->create([
            "id" => "694",
            "name" => "Hớn Quản",
            "type" => "huyen",
            "slug" => "hon-quan",
            "name_with_type" => "Huyện Hớn Quản",
            "path" => "Hớn Quản, Bình Phước",
            "path_with_type" => "Huyện Hớn Quản, Tỉnh Bình Phước",
            "city_id" => "70"
        ]);
        District::factory()->create([
            "id" => "695",
            "name" => "Đồng Phú",
            "type" => "huyen",
            "slug" => "dong-phu",
            "name_with_type" => "Huyện Đồng Phú",
            "path" => "Đồng Phú, Bình Phước",
            "path_with_type" => "Huyện Đồng Phú, Tỉnh Bình Phước",
            "city_id" => "70"
        ]);
        District::factory()->create([
            "id" => "696",
            "name" => "Bù Đăng",
            "type" => "huyen",
            "slug" => "bu-dang",
            "name_with_type" => "Huyện Bù Đăng",
            "path" => "Bù Đăng, Bình Phước",
            "path_with_type" => "Huyện Bù Đăng, Tỉnh Bình Phước",
            "city_id" => "70"
        ]);
        District::factory()->create([
            "id" => "697",
            "name" => "Chơn Thành",
            "type" => "huyen",
            "slug" => "chon-thanh",
            "name_with_type" => "Huyện Chơn Thành",
            "path" => "Chơn Thành, Bình Phước",
            "path_with_type" => "Huyện Chơn Thành, Tỉnh Bình Phước",
            "city_id" => "70"
        ]);
        District::factory()->create([
            "id" => "698",
            "name" => "Phú Riềng",
            "type" => "huyen",
            "slug" => "phu-rieng",
            "name_with_type" => "Huyện Phú Riềng",
            "path" => "Phú Riềng, Bình Phước",
            "path_with_type" => "Huyện Phú Riềng, Tỉnh Bình Phước",
            "city_id" => "70"
        ]);
        District::factory()->create([
            "id" => "703",
            "name" => "Tây Ninh",
            "type" => "thanh-pho",
            "slug" => "tay-ninh",
            "name_with_type" => "Thành phố Tây Ninh",
            "path" => "Tây Ninh, Tây Ninh",
            "path_with_type" => "Thành phố Tây Ninh, Tỉnh Tây Ninh",
            "city_id" => "72"
        ]);
        District::factory()->create([
            "id" => "705",
            "name" => "Tân Biên",
            "type" => "huyen",
            "slug" => "tan-bien",
            "name_with_type" => "Huyện Tân Biên",
            "path" => "Tân Biên, Tây Ninh",
            "path_with_type" => "Huyện Tân Biên, Tỉnh Tây Ninh",
            "city_id" => "72"
        ]);
        District::factory()->create([
            "id" => "706",
            "name" => "Tân Châu",
            "type" => "huyen",
            "slug" => "tan-chau",
            "name_with_type" => "Huyện Tân Châu",
            "path" => "Tân Châu, Tây Ninh",
            "path_with_type" => "Huyện Tân Châu, Tỉnh Tây Ninh",
            "city_id" => "72"
        ]);
        District::factory()->create([
            "id" => "707",
            "name" => "Dương Minh Châu",
            "type" => "huyen",
            "slug" => "duong-minh-chau",
            "name_with_type" => "Huyện Dương Minh Châu",
            "path" => "Dương Minh Châu, Tây Ninh",
            "path_with_type" => "Huyện Dương Minh Châu, Tỉnh Tây Ninh",
            "city_id" => "72"
        ]);
        District::factory()->create([
            "id" => "708",
            "name" => "Châu Thành",
            "type" => "huyen",
            "slug" => "chau-thanh",
            "name_with_type" => "Huyện Châu Thành",
            "path" => "Châu Thành, Tây Ninh",
            "path_with_type" => "Huyện Châu Thành, Tỉnh Tây Ninh",
            "city_id" => "72"
        ]);
        District::factory()->create([
            "id" => "709",
            "name" => "Hòa Thành",
            "type" => "thi-xa",
            "slug" => "hoa-thanh",
            "name_with_type" => "Thị xã Hòa Thành",
            "path" => "Hòa Thành, Tây Ninh",
            "path_with_type" => "Thị xã Hòa Thành, Tỉnh Tây Ninh",
            "city_id" => "72"
        ]);
        District::factory()->create([
            "id" => "710",
            "name" => "Gò Dầu",
            "type" => "huyen",
            "slug" => "go-dau",
            "name_with_type" => "Huyện Gò Dầu",
            "path" => "Gò Dầu, Tây Ninh",
            "path_with_type" => "Huyện Gò Dầu, Tỉnh Tây Ninh",
            "city_id" => "72"
        ]);
        District::factory()->create([
            "id" => "711",
            "name" => "Bến Cầu",
            "type" => "huyen",
            "slug" => "ben-cau",
            "name_with_type" => "Huyện Bến Cầu",
            "path" => "Bến Cầu, Tây Ninh",
            "path_with_type" => "Huyện Bến Cầu, Tỉnh Tây Ninh",
            "city_id" => "72"
        ]);
        District::factory()->create([
            "id" => "712",
            "name" => "Trảng Bàng",
            "type" => "thi-xa",
            "slug" => "trang-bang",
            "name_with_type" => "Thị xã Trảng Bàng",
            "path" => "Trảng Bàng, Tây Ninh",
            "path_with_type" => "Thị xã Trảng Bàng, Tỉnh Tây Ninh",
            "city_id" => "72"
        ]);
        District::factory()->create([
            "id" => "718",
            "name" => "Thủ Dầu Một",
            "type" => "thanh-pho",
            "slug" => "thu-dau-mot",
            "name_with_type" => "Thành phố Thủ Dầu Một",
            "path" => "Thủ Dầu Một, Bình Dương",
            "path_with_type" => "Thành phố Thủ Dầu Một, Tỉnh Bình Dương",
            "city_id" => "74"
        ]);
        District::factory()->create([
            "id" => "719",
            "name" => "Bàu Bàng",
            "type" => "huyen",
            "slug" => "bau-bang",
            "name_with_type" => "Huyện Bàu Bàng",
            "path" => "Bàu Bàng, Bình Dương",
            "path_with_type" => "Huyện Bàu Bàng, Tỉnh Bình Dương",
            "city_id" => "74"
        ]);
        District::factory()->create([
            "id" => "720",
            "name" => "Dầu Tiếng",
            "type" => "huyen",
            "slug" => "dau-tieng",
            "name_with_type" => "Huyện Dầu Tiếng",
            "path" => "Dầu Tiếng, Bình Dương",
            "path_with_type" => "Huyện Dầu Tiếng, Tỉnh Bình Dương",
            "city_id" => "74"
        ]);
        District::factory()->create([
            "id" => "721",
            "name" => "Bến Cát",
            "type" => "thi-xa",
            "slug" => "ben-cat",
            "name_with_type" => "Thị xã Bến Cát",
            "path" => "Bến Cát, Bình Dương",
            "path_with_type" => "Thị xã Bến Cát, Tỉnh Bình Dương",
            "city_id" => "74"
        ]);
        District::factory()->create([
            "id" => "722",
            "name" => "Phú Giáo",
            "type" => "huyen",
            "slug" => "phu-giao",
            "name_with_type" => "Huyện Phú Giáo",
            "path" => "Phú Giáo, Bình Dương",
            "path_with_type" => "Huyện Phú Giáo, Tỉnh Bình Dương",
            "city_id" => "74"
        ]);
        District::factory()->create([
            "id" => "723",
            "name" => "Tân Uyên",
            "type" => "thi-xa",
            "slug" => "tan-uyen",
            "name_with_type" => "Thị xã Tân Uyên",
            "path" => "Tân Uyên, Bình Dương",
            "path_with_type" => "Thị xã Tân Uyên, Tỉnh Bình Dương",
            "city_id" => "74"
        ]);
        District::factory()->create([
            "id" => "724",
            "name" => "Dĩ An",
            "type" => "thanh-pho",
            "slug" => "di-an",
            "name_with_type" => "Thành phố Dĩ An",
            "path" => "Dĩ An, Bình Dương",
            "path_with_type" => "Thành phố Dĩ An, Tỉnh Bình Dương",
            "city_id" => "74"
        ]);
        District::factory()->create([
            "id" => "725",
            "name" => "Thuận An",
            "type" => "thanh-pho",
            "slug" => "thuan-an",
            "name_with_type" => "Thành phố Thuận An",
            "path" => "Thuận An, Bình Dương",
            "path_with_type" => "Thành phố Thuận An, Tỉnh Bình Dương",
            "city_id" => "74"
        ]);
        District::factory()->create([
            "id" => "726",
            "name" => "Bắc Tân Uyên",
            "type" => "huyen",
            "slug" => "bac-tan-uyen",
            "name_with_type" => "Huyện Bắc Tân Uyên",
            "path" => "Bắc Tân Uyên, Bình Dương",
            "path_with_type" => "Huyện Bắc Tân Uyên, Tỉnh Bình Dương",
            "city_id" => "74"
        ]);
        District::factory()->create([
            "id" => "731",
            "name" => "Biên Hòa",
            "type" => "thanh-pho",
            "slug" => "bien-hoa",
            "name_with_type" => "Thành phố Biên Hòa",
            "path" => "Biên Hòa, Đồng Nai",
            "path_with_type" => "Thành phố Biên Hòa, Tỉnh Đồng Nai",
            "city_id" => "75"
        ]);
        District::factory()->create([
            "id" => "732",
            "name" => "Long Khánh",
            "type" => "thanh-pho",
            "slug" => "long-khanh",
            "name_with_type" => "Thành phố Long Khánh",
            "path" => "Long Khánh, Đồng Nai",
            "path_with_type" => "Thành phố Long Khánh, Tỉnh Đồng Nai",
            "city_id" => "75"
        ]);
        District::factory()->create([
            "id" => "734",
            "name" => "Tân Phú",
            "type" => "huyen",
            "slug" => "tan-phu",
            "name_with_type" => "Huyện Tân Phú",
            "path" => "Tân Phú, Đồng Nai",
            "path_with_type" => "Huyện Tân Phú, Tỉnh Đồng Nai",
            "city_id" => "75"
        ]);
        District::factory()->create([
            "id" => "735",
            "name" => "Vĩnh Cửu",
            "type" => "huyen",
            "slug" => "vinh-cuu",
            "name_with_type" => "Huyện Vĩnh Cửu",
            "path" => "Vĩnh Cửu, Đồng Nai",
            "path_with_type" => "Huyện Vĩnh Cửu, Tỉnh Đồng Nai",
            "city_id" => "75"
        ]);
        District::factory()->create([
            "id" => "736",
            "name" => "Định Quán",
            "type" => "huyen",
            "slug" => "dinh-quan",
            "name_with_type" => "Huyện Định Quán",
            "path" => "Định Quán, Đồng Nai",
            "path_with_type" => "Huyện Định Quán, Tỉnh Đồng Nai",
            "city_id" => "75"
        ]);
        District::factory()->create([
            "id" => "737",
            "name" => "Trảng Bom",
            "type" => "huyen",
            "slug" => "trang-bom",
            "name_with_type" => "Huyện Trảng Bom",
            "path" => "Trảng Bom, Đồng Nai",
            "path_with_type" => "Huyện Trảng Bom, Tỉnh Đồng Nai",
            "city_id" => "75"
        ]);
        District::factory()->create([
            "id" => "738",
            "name" => "Thống Nhất",
            "type" => "huyen",
            "slug" => "thong-nhat",
            "name_with_type" => "Huyện Thống Nhất",
            "path" => "Thống Nhất, Đồng Nai",
            "path_with_type" => "Huyện Thống Nhất, Tỉnh Đồng Nai",
            "city_id" => "75"
        ]);
        District::factory()->create([
            "id" => "739",
            "name" => "Cẩm Mỹ",
            "type" => "huyen",
            "slug" => "cam-my",
            "name_with_type" => "Huyện Cẩm Mỹ",
            "path" => "Cẩm Mỹ, Đồng Nai",
            "path_with_type" => "Huyện Cẩm Mỹ, Tỉnh Đồng Nai",
            "city_id" => "75"
        ]);
        District::factory()->create([
            "id" => "740",
            "name" => "Long Thành",
            "type" => "huyen",
            "slug" => "long-thanh",
            "name_with_type" => "Huyện Long Thành",
            "path" => "Long Thành, Đồng Nai",
            "path_with_type" => "Huyện Long Thành, Tỉnh Đồng Nai",
            "city_id" => "75"
        ]);
        District::factory()->create([
            "id" => "741",
            "name" => "Xuân Lộc",
            "type" => "huyen",
            "slug" => "xuan-loc",
            "name_with_type" => "Huyện Xuân Lộc",
            "path" => "Xuân Lộc, Đồng Nai",
            "path_with_type" => "Huyện Xuân Lộc, Tỉnh Đồng Nai",
            "city_id" => "75"
        ]);
        District::factory()->create([
            "id" => "742",
            "name" => "Nhơn Trạch",
            "type" => "huyen",
            "slug" => "nhon-trach",
            "name_with_type" => "Huyện Nhơn Trạch",
            "path" => "Nhơn Trạch, Đồng Nai",
            "path_with_type" => "Huyện Nhơn Trạch, Tỉnh Đồng Nai",
            "city_id" => "75"
        ]);
        District::factory()->create([
            "id" => "747",
            "name" => "Vũng Tàu",
            "type" => "thanh-pho",
            "slug" => "vung-tau",
            "name_with_type" => "Thành phố Vũng Tàu",
            "path" => "Vũng Tàu, Bà Rịa - Vũng Tàu",
            "path_with_type" => "Thành phố Vũng Tàu, Tỉnh Bà Rịa - Vũng Tàu",
            "city_id" => "77"
        ]);
        District::factory()->create([
            "id" => "748",
            "name" => "Bà Rịa",
            "type" => "thanh-pho",
            "slug" => "ba-ria",
            "name_with_type" => "Thành phố Bà Rịa",
            "path" => "Bà Rịa, Bà Rịa - Vũng Tàu",
            "path_with_type" => "Thành phố Bà Rịa, Tỉnh Bà Rịa - Vũng Tàu",
            "city_id" => "77"
        ]);
        District::factory()->create([
            "id" => "750",
            "name" => "Châu Đức",
            "type" => "huyen",
            "slug" => "chau-duc",
            "name_with_type" => "Huyện Châu Đức",
            "path" => "Châu Đức, Bà Rịa - Vũng Tàu",
            "path_with_type" => "Huyện Châu Đức, Tỉnh Bà Rịa - Vũng Tàu",
            "city_id" => "77"
        ]);
        District::factory()->create([
            "id" => "751",
            "name" => "Xuyên Mộc",
            "type" => "huyen",
            "slug" => "xuyen-moc",
            "name_with_type" => "Huyện Xuyên Mộc",
            "path" => "Xuyên Mộc, Bà Rịa - Vũng Tàu",
            "path_with_type" => "Huyện Xuyên Mộc, Tỉnh Bà Rịa - Vũng Tàu",
            "city_id" => "77"
        ]);
        District::factory()->create([
            "id" => "752",
            "name" => "Long Điền",
            "type" => "huyen",
            "slug" => "long-dien",
            "name_with_type" => "Huyện Long Điền",
            "path" => "Long Điền, Bà Rịa - Vũng Tàu",
            "path_with_type" => "Huyện Long Điền, Tỉnh Bà Rịa - Vũng Tàu",
            "city_id" => "77"
        ]);
        District::factory()->create([
            "id" => "753",
            "name" => "Đất Đỏ",
            "type" => "huyen",
            "slug" => "dat-do",
            "name_with_type" => "Huyện Đất Đỏ",
            "path" => "Đất Đỏ, Bà Rịa - Vũng Tàu",
            "path_with_type" => "Huyện Đất Đỏ, Tỉnh Bà Rịa - Vũng Tàu",
            "city_id" => "77"
        ]);
        District::factory()->create([
            "id" => "754",
            "name" => "Phú Mỹ",
            "type" => "thi-xa",
            "slug" => "phu-my",
            "name_with_type" => "Thị xã Phú Mỹ",
            "path" => "Phú Mỹ, Bà Rịa - Vũng Tàu",
            "path_with_type" => "Thị xã Phú Mỹ, Tỉnh Bà Rịa - Vũng Tàu",
            "city_id" => "77"
        ]);
        District::factory()->create([
            "id" => "755",
            "name" => "Côn Đảo",
            "type" => "huyen",
            "slug" => "con-dao",
            "name_with_type" => "Huyện Côn Đảo",
            "path" => "Côn Đảo, Bà Rịa - Vũng Tàu",
            "path_with_type" => "Huyện Côn Đảo, Tỉnh Bà Rịa - Vũng Tàu",
            "city_id" => "77"
        ]);
        District::factory()->create([
            "id" => "760",
            "name" => "1",
            "type" => "quan",
            "slug" => "1",
            "name_with_type" => "Quận 1",
            "path" => "1, Hồ Chí Minh",
            "path_with_type" => "Quận 1, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "761",
            "name" => "12",
            "type" => "quan",
            "slug" => "12",
            "name_with_type" => "Quận 12",
            "path" => "12, Hồ Chí Minh",
            "path_with_type" => "Quận 12, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "764",
            "name" => "Gò Vấp",
            "type" => "quan",
            "slug" => "go-vap",
            "name_with_type" => "Quận Gò Vấp",
            "path" => "Gò Vấp, Hồ Chí Minh",
            "path_with_type" => "Quận Gò Vấp, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "765",
            "name" => "Bình Thạnh",
            "type" => "quan",
            "slug" => "binh-thanh",
            "name_with_type" => "Quận Bình Thạnh",
            "path" => "Bình Thạnh, Hồ Chí Minh",
            "path_with_type" => "Quận Bình Thạnh, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "766",
            "name" => "Tân Bình",
            "type" => "quan",
            "slug" => "tan-binh",
            "name_with_type" => "Quận Tân Bình",
            "path" => "Tân Bình, Hồ Chí Minh",
            "path_with_type" => "Quận Tân Bình, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "767",
            "name" => "Tân Phú",
            "type" => "quan",
            "slug" => "tan-phu",
            "name_with_type" => "Quận Tân Phú",
            "path" => "Tân Phú, Hồ Chí Minh",
            "path_with_type" => "Quận Tân Phú, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "768",
            "name" => "Phú Nhuận",
            "type" => "quan",
            "slug" => "phu-nhuan",
            "name_with_type" => "Quận Phú Nhuận",
            "path" => "Phú Nhuận, Hồ Chí Minh",
            "path_with_type" => "Quận Phú Nhuận, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "769",
            "name" => "Thủ Đức",
            "type" => "thanh-pho",
            "slug" => "thu-duc",
            "name_with_type" => "Thành phố Thủ Đức",
            "path" => "Thủ Đức, Hồ Chí Minh",
            "path_with_type" => "Thành phố Thủ Đức, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "770",
            "name" => "3",
            "type" => "quan",
            "slug" => "3",
            "name_with_type" => "Quận 3",
            "path" => "3, Hồ Chí Minh",
            "path_with_type" => "Quận 3, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "771",
            "name" => "10",
            "type" => "quan",
            "slug" => "10",
            "name_with_type" => "Quận 10",
            "path" => "10, Hồ Chí Minh",
            "path_with_type" => "Quận 10, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "772",
            "name" => "11",
            "type" => "quan",
            "slug" => "11",
            "name_with_type" => "Quận 11",
            "path" => "11, Hồ Chí Minh",
            "path_with_type" => "Quận 11, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "773",
            "name" => "4",
            "type" => "quan",
            "slug" => "4",
            "name_with_type" => "Quận 4",
            "path" => "4, Hồ Chí Minh",
            "path_with_type" => "Quận 4, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "774",
            "name" => "5",
            "type" => "quan",
            "slug" => "5",
            "name_with_type" => "Quận 5",
            "path" => "5, Hồ Chí Minh",
            "path_with_type" => "Quận 5, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "775",
            "name" => "6",
            "type" => "quan",
            "slug" => "6",
            "name_with_type" => "Quận 6",
            "path" => "6, Hồ Chí Minh",
            "path_with_type" => "Quận 6, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "776",
            "name" => "8",
            "type" => "quan",
            "slug" => "8",
            "name_with_type" => "Quận 8",
            "path" => "8, Hồ Chí Minh",
            "path_with_type" => "Quận 8, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "777",
            "name" => "Bình Tân",
            "type" => "quan",
            "slug" => "binh-tan",
            "name_with_type" => "Quận Bình Tân",
            "path" => "Bình Tân, Hồ Chí Minh",
            "path_with_type" => "Quận Bình Tân, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "778",
            "name" => "7",
            "type" => "quan",
            "slug" => "7",
            "name_with_type" => "Quận 7",
            "path" => "7, Hồ Chí Minh",
            "path_with_type" => "Quận 7, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "783",
            "name" => "Củ Chi",
            "type" => "huyen",
            "slug" => "cu-chi",
            "name_with_type" => "Huyện Củ Chi",
            "path" => "Củ Chi, Hồ Chí Minh",
            "path_with_type" => "Huyện Củ Chi, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "784",
            "name" => "Hóc Môn",
            "type" => "huyen",
            "slug" => "hoc-mon",
            "name_with_type" => "Huyện Hóc Môn",
            "path" => "Hóc Môn, Hồ Chí Minh",
            "path_with_type" => "Huyện Hóc Môn, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "785",
            "name" => "Bình Chánh",
            "type" => "huyen",
            "slug" => "binh-chanh",
            "name_with_type" => "Huyện Bình Chánh",
            "path" => "Bình Chánh, Hồ Chí Minh",
            "path_with_type" => "Huyện Bình Chánh, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "786",
            "name" => "Nhà Bè",
            "type" => "huyen",
            "slug" => "nha-be",
            "name_with_type" => "Huyện Nhà Bè",
            "path" => "Nhà Bè, Hồ Chí Minh",
            "path_with_type" => "Huyện Nhà Bè, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "787",
            "name" => "Cần Giờ",
            "type" => "huyen",
            "slug" => "can-gio",
            "name_with_type" => "Huyện Cần Giờ",
            "path" => "Cần Giờ, Hồ Chí Minh",
            "path_with_type" => "Huyện Cần Giờ, Thành phố Hồ Chí Minh",
            "city_id" => "79"
        ]);
        District::factory()->create([
            "id" => "794",
            "name" => "Tân An",
            "type" => "thanh-pho",
            "slug" => "tan-an",
            "name_with_type" => "Thành phố Tân An",
            "path" => "Tân An, Long An",
            "path_with_type" => "Thành phố Tân An, Tỉnh Long An",
            "city_id" => "80"
        ]);
        District::factory()->create([
            "id" => "795",
            "name" => "Kiến Tường",
            "type" => "thi-xa",
            "slug" => "kien-tuong",
            "name_with_type" => "Thị xã Kiến Tường",
            "path" => "Kiến Tường, Long An",
            "path_with_type" => "Thị xã Kiến Tường, Tỉnh Long An",
            "city_id" => "80"
        ]);
        District::factory()->create([
            "id" => "796",
            "name" => "Tân Hưng",
            "type" => "huyen",
            "slug" => "tan-hung",
            "name_with_type" => "Huyện Tân Hưng",
            "path" => "Tân Hưng, Long An",
            "path_with_type" => "Huyện Tân Hưng, Tỉnh Long An",
            "city_id" => "80"
        ]);
        District::factory()->create([
            "id" => "797",
            "name" => "Vĩnh Hưng",
            "type" => "huyen",
            "slug" => "vinh-hung",
            "name_with_type" => "Huyện Vĩnh Hưng",
            "path" => "Vĩnh Hưng, Long An",
            "path_with_type" => "Huyện Vĩnh Hưng, Tỉnh Long An",
            "city_id" => "80"
        ]);
        District::factory()->create([
            "id" => "798",
            "name" => "Mộc Hóa",
            "type" => "huyen",
            "slug" => "moc-hoa",
            "name_with_type" => "Huyện Mộc Hóa",
            "path" => "Mộc Hóa, Long An",
            "path_with_type" => "Huyện Mộc Hóa, Tỉnh Long An",
            "city_id" => "80"
        ]);
        District::factory()->create([
            "id" => "799",
            "name" => "Tân Thạnh",
            "type" => "huyen",
            "slug" => "tan-thanh",
            "name_with_type" => "Huyện Tân Thạnh",
            "path" => "Tân Thạnh, Long An",
            "path_with_type" => "Huyện Tân Thạnh, Tỉnh Long An",
            "city_id" => "80"
        ]);
        District::factory()->create([
            "id" => "800",
            "name" => "Thạnh Hóa",
            "type" => "huyen",
            "slug" => "thanh-hoa",
            "name_with_type" => "Huyện Thạnh Hóa",
            "path" => "Thạnh Hóa, Long An",
            "path_with_type" => "Huyện Thạnh Hóa, Tỉnh Long An",
            "city_id" => "80"
        ]);
        District::factory()->create([
            "id" => "801",
            "name" => "Đức Huệ",
            "type" => "huyen",
            "slug" => "duc-hue",
            "name_with_type" => "Huyện Đức Huệ",
            "path" => "Đức Huệ, Long An",
            "path_with_type" => "Huyện Đức Huệ, Tỉnh Long An",
            "city_id" => "80"
        ]);
        District::factory()->create([
            "id" => "802",
            "name" => "Đức Hòa",
            "type" => "huyen",
            "slug" => "duc-hoa",
            "name_with_type" => "Huyện Đức Hòa",
            "path" => "Đức Hòa, Long An",
            "path_with_type" => "Huyện Đức Hòa, Tỉnh Long An",
            "city_id" => "80"
        ]);
        District::factory()->create([
            "id" => "803",
            "name" => "Bến Lức",
            "type" => "huyen",
            "slug" => "ben-luc",
            "name_with_type" => "Huyện Bến Lức",
            "path" => "Bến Lức, Long An",
            "path_with_type" => "Huyện Bến Lức, Tỉnh Long An",
            "city_id" => "80"
        ]);
        District::factory()->create([
            "id" => "804",
            "name" => "Thủ Thừa",
            "type" => "huyen",
            "slug" => "thu-thua",
            "name_with_type" => "Huyện Thủ Thừa",
            "path" => "Thủ Thừa, Long An",
            "path_with_type" => "Huyện Thủ Thừa, Tỉnh Long An",
            "city_id" => "80"
        ]);
        District::factory()->create([
            "id" => "805",
            "name" => "Tân Trụ",
            "type" => "huyen",
            "slug" => "tan-tru",
            "name_with_type" => "Huyện Tân Trụ",
            "path" => "Tân Trụ, Long An",
            "path_with_type" => "Huyện Tân Trụ, Tỉnh Long An",
            "city_id" => "80"
        ]);
        District::factory()->create([
            "id" => "806",
            "name" => "Cần Đước",
            "type" => "huyen",
            "slug" => "can-duoc",
            "name_with_type" => "Huyện Cần Đước",
            "path" => "Cần Đước, Long An",
            "path_with_type" => "Huyện Cần Đước, Tỉnh Long An",
            "city_id" => "80"
        ]);
        District::factory()->create([
            "id" => "807",
            "name" => "Cần Giuộc",
            "type" => "huyen",
            "slug" => "can-giuoc",
            "name_with_type" => "Huyện Cần Giuộc",
            "path" => "Cần Giuộc, Long An",
            "path_with_type" => "Huyện Cần Giuộc, Tỉnh Long An",
            "city_id" => "80"
        ]);
        District::factory()->create([
            "id" => "808",
            "name" => "Châu Thành",
            "type" => "huyen",
            "slug" => "chau-thanh",
            "name_with_type" => "Huyện Châu Thành",
            "path" => "Châu Thành, Long An",
            "path_with_type" => "Huyện Châu Thành, Tỉnh Long An",
            "city_id" => "80"
        ]);
        District::factory()->create([
            "id" => "815",
            "name" => "Mỹ Tho",
            "type" => "thanh-pho",
            "slug" => "my-tho",
            "name_with_type" => "Thành phố Mỹ Tho",
            "path" => "Mỹ Tho, Tiền Giang",
            "path_with_type" => "Thành phố Mỹ Tho, Tỉnh Tiền Giang",
            "city_id" => "82"
        ]);
        District::factory()->create([
            "id" => "816",
            "name" => "Gò Công",
            "type" => "thi-xa",
            "slug" => "go-cong",
            "name_with_type" => "Thị xã Gò Công",
            "path" => "Gò Công, Tiền Giang",
            "path_with_type" => "Thị xã Gò Công, Tỉnh Tiền Giang",
            "city_id" => "82"
        ]);
        District::factory()->create([
            "id" => "817",
            "name" => "Cai Lậy",
            "type" => "thi-xa",
            "slug" => "cai-lay",
            "name_with_type" => "Thị xã Cai Lậy",
            "path" => "Cai Lậy, Tiền Giang",
            "path_with_type" => "Thị xã Cai Lậy, Tỉnh Tiền Giang",
            "city_id" => "82"
        ]);
        District::factory()->create([
            "id" => "818",
            "name" => "Tân Phước",
            "type" => "huyen",
            "slug" => "tan-phuoc",
            "name_with_type" => "Huyện Tân Phước",
            "path" => "Tân Phước, Tiền Giang",
            "path_with_type" => "Huyện Tân Phước, Tỉnh Tiền Giang",
            "city_id" => "82"
        ]);
        District::factory()->create([
            "id" => "819",
            "name" => "Cái Bè",
            "type" => "huyen",
            "slug" => "cai-be",
            "name_with_type" => "Huyện Cái Bè",
            "path" => "Cái Bè, Tiền Giang",
            "path_with_type" => "Huyện Cái Bè, Tỉnh Tiền Giang",
            "city_id" => "82"
        ]);
        District::factory()->create([
            "id" => "820",
            "name" => "Cai Lậy",
            "type" => "huyen",
            "slug" => "cai-lay",
            "name_with_type" => "Huyện Cai Lậy",
            "path" => "Cai Lậy, Tiền Giang",
            "path_with_type" => "Huyện Cai Lậy, Tỉnh Tiền Giang",
            "city_id" => "82"
        ]);
        District::factory()->create([
            "id" => "821",
            "name" => "Châu Thành",
            "type" => "huyen",
            "slug" => "chau-thanh",
            "name_with_type" => "Huyện Châu Thành",
            "path" => "Châu Thành, Tiền Giang",
            "path_with_type" => "Huyện Châu Thành, Tỉnh Tiền Giang",
            "city_id" => "82"
        ]);
        District::factory()->create([
            "id" => "822",
            "name" => "Chợ Gạo",
            "type" => "huyen",
            "slug" => "cho-gao",
            "name_with_type" => "Huyện Chợ Gạo",
            "path" => "Chợ Gạo, Tiền Giang",
            "path_with_type" => "Huyện Chợ Gạo, Tỉnh Tiền Giang",
            "city_id" => "82"
        ]);
        District::factory()->create([
            "id" => "823",
            "name" => "Gò Công Tây",
            "type" => "huyen",
            "slug" => "go-cong-tay",
            "name_with_type" => "Huyện Gò Công Tây",
            "path" => "Gò Công Tây, Tiền Giang",
            "path_with_type" => "Huyện Gò Công Tây, Tỉnh Tiền Giang",
            "city_id" => "82"
        ]);
        District::factory()->create([
            "id" => "824",
            "name" => "Gò Công Đông",
            "type" => "huyen",
            "slug" => "go-cong-dong",
            "name_with_type" => "Huyện Gò Công Đông",
            "path" => "Gò Công Đông, Tiền Giang",
            "path_with_type" => "Huyện Gò Công Đông, Tỉnh Tiền Giang",
            "city_id" => "82"
        ]);
        District::factory()->create([
            "id" => "825",
            "name" => "Tân Phú Đông",
            "type" => "huyen",
            "slug" => "tan-phu-dong",
            "name_with_type" => "Huyện Tân Phú Đông",
            "path" => "Tân Phú Đông, Tiền Giang",
            "path_with_type" => "Huyện Tân Phú Đông, Tỉnh Tiền Giang",
            "city_id" => "82"
        ]);
        District::factory()->create([
            "id" => "829",
            "name" => "Bến Tre",
            "type" => "thanh-pho",
            "slug" => "ben-tre",
            "name_with_type" => "Thành phố Bến Tre",
            "path" => "Bến Tre, Bến Tre",
            "path_with_type" => "Thành phố Bến Tre, Tỉnh Bến Tre",
            "city_id" => "83"
        ]);
        District::factory()->create([
            "id" => "831",
            "name" => "Châu Thành",
            "type" => "huyen",
            "slug" => "chau-thanh",
            "name_with_type" => "Huyện Châu Thành",
            "path" => "Châu Thành, Bến Tre",
            "path_with_type" => "Huyện Châu Thành, Tỉnh Bến Tre",
            "city_id" => "83"
        ]);
        District::factory()->create([
            "id" => "832",
            "name" => "Chợ Lách",
            "type" => "huyen",
            "slug" => "cho-lach",
            "name_with_type" => "Huyện Chợ Lách",
            "path" => "Chợ Lách, Bến Tre",
            "path_with_type" => "Huyện Chợ Lách, Tỉnh Bến Tre",
            "city_id" => "83"
        ]);
        District::factory()->create([
            "id" => "833",
            "name" => "Mỏ Cày Nam",
            "type" => "huyen",
            "slug" => "mo-cay-nam",
            "name_with_type" => "Huyện Mỏ Cày Nam",
            "path" => "Mỏ Cày Nam, Bến Tre",
            "path_with_type" => "Huyện Mỏ Cày Nam, Tỉnh Bến Tre",
            "city_id" => "83"
        ]);
        District::factory()->create([
            "id" => "834",
            "name" => "Giồng Trôm",
            "type" => "huyen",
            "slug" => "giong-trom",
            "name_with_type" => "Huyện Giồng Trôm",
            "path" => "Giồng Trôm, Bến Tre",
            "path_with_type" => "Huyện Giồng Trôm, Tỉnh Bến Tre",
            "city_id" => "83"
        ]);
        District::factory()->create([
            "id" => "835",
            "name" => "Bình Đại",
            "type" => "huyen",
            "slug" => "binh-dai",
            "name_with_type" => "Huyện Bình Đại",
            "path" => "Bình Đại, Bến Tre",
            "path_with_type" => "Huyện Bình Đại, Tỉnh Bến Tre",
            "city_id" => "83"
        ]);
        District::factory()->create([
            "id" => "836",
            "name" => "Ba Tri",
            "type" => "huyen",
            "slug" => "ba-tri",
            "name_with_type" => "Huyện Ba Tri",
            "path" => "Ba Tri, Bến Tre",
            "path_with_type" => "Huyện Ba Tri, Tỉnh Bến Tre",
            "city_id" => "83"
        ]);
        District::factory()->create([
            "id" => "837",
            "name" => "Thạnh Phú",
            "type" => "huyen",
            "slug" => "thanh-phu",
            "name_with_type" => "Huyện Thạnh Phú",
            "path" => "Thạnh Phú, Bến Tre",
            "path_with_type" => "Huyện Thạnh Phú, Tỉnh Bến Tre",
            "city_id" => "83"
        ]);
        District::factory()->create([
            "id" => "838",
            "name" => "Mỏ Cày Bắc",
            "type" => "huyen",
            "slug" => "mo-cay-bac",
            "name_with_type" => "Huyện Mỏ Cày Bắc",
            "path" => "Mỏ Cày Bắc, Bến Tre",
            "path_with_type" => "Huyện Mỏ Cày Bắc, Tỉnh Bến Tre",
            "city_id" => "83"
        ]);
        District::factory()->create([
            "id" => "842",
            "name" => "Trà Vinh",
            "type" => "thanh-pho",
            "slug" => "tra-vinh",
            "name_with_type" => "Thành phố Trà Vinh",
            "path" => "Trà Vinh, Trà Vinh",
            "path_with_type" => "Thành phố Trà Vinh, Tỉnh Trà Vinh",
            "city_id" => "84"
        ]);
        District::factory()->create([
            "id" => "844",
            "name" => "Càng Long",
            "type" => "huyen",
            "slug" => "cang-long",
            "name_with_type" => "Huyện Càng Long",
            "path" => "Càng Long, Trà Vinh",
            "path_with_type" => "Huyện Càng Long, Tỉnh Trà Vinh",
            "city_id" => "84"
        ]);
        District::factory()->create([
            "id" => "845",
            "name" => "Cầu Kè",
            "type" => "huyen",
            "slug" => "cau-ke",
            "name_with_type" => "Huyện Cầu Kè",
            "path" => "Cầu Kè, Trà Vinh",
            "path_with_type" => "Huyện Cầu Kè, Tỉnh Trà Vinh",
            "city_id" => "84"
        ]);
        District::factory()->create([
            "id" => "846",
            "name" => "Tiểu Cần",
            "type" => "huyen",
            "slug" => "tieu-can",
            "name_with_type" => "Huyện Tiểu Cần",
            "path" => "Tiểu Cần, Trà Vinh",
            "path_with_type" => "Huyện Tiểu Cần, Tỉnh Trà Vinh",
            "city_id" => "84"
        ]);
        District::factory()->create([
            "id" => "847",
            "name" => "Châu Thành",
            "type" => "huyen",
            "slug" => "chau-thanh",
            "name_with_type" => "Huyện Châu Thành",
            "path" => "Châu Thành, Trà Vinh",
            "path_with_type" => "Huyện Châu Thành, Tỉnh Trà Vinh",
            "city_id" => "84"
        ]);
        District::factory()->create([
            "id" => "848",
            "name" => "Cầu Ngang",
            "type" => "huyen",
            "slug" => "cau-ngang",
            "name_with_type" => "Huyện Cầu Ngang",
            "path" => "Cầu Ngang, Trà Vinh",
            "path_with_type" => "Huyện Cầu Ngang, Tỉnh Trà Vinh",
            "city_id" => "84"
        ]);
        District::factory()->create([
            "id" => "849",
            "name" => "Trà Cú",
            "type" => "huyen",
            "slug" => "tra-cu",
            "name_with_type" => "Huyện Trà Cú",
            "path" => "Trà Cú, Trà Vinh",
            "path_with_type" => "Huyện Trà Cú, Tỉnh Trà Vinh",
            "city_id" => "84"
        ]);
        District::factory()->create([
            "id" => "850",
            "name" => "Duyên Hải",
            "type" => "huyen",
            "slug" => "duyen-hai",
            "name_with_type" => "Huyện Duyên Hải",
            "path" => "Duyên Hải, Trà Vinh",
            "path_with_type" => "Huyện Duyên Hải, Tỉnh Trà Vinh",
            "city_id" => "84"
        ]);
        District::factory()->create([
            "id" => "851",
            "name" => "Duyên Hải",
            "type" => "thi-xa",
            "slug" => "duyen-hai",
            "name_with_type" => "Thị xã Duyên Hải",
            "path" => "Duyên Hải, Trà Vinh",
            "path_with_type" => "Thị xã Duyên Hải, Tỉnh Trà Vinh",
            "city_id" => "84"
        ]);
        District::factory()->create([
            "id" => "855",
            "name" => "Vĩnh Long",
            "type" => "thanh-pho",
            "slug" => "vinh-long",
            "name_with_type" => "Thành phố Vĩnh Long",
            "path" => "Vĩnh Long, Vĩnh Long",
            "path_with_type" => "Thành phố Vĩnh Long, Tỉnh Vĩnh Long",
            "city_id" => "86"
        ]);
        District::factory()->create([
            "id" => "857",
            "name" => "Long Hồ",
            "type" => "huyen",
            "slug" => "long-ho",
            "name_with_type" => "Huyện Long Hồ",
            "path" => "Long Hồ, Vĩnh Long",
            "path_with_type" => "Huyện Long Hồ, Tỉnh Vĩnh Long",
            "city_id" => "86"
        ]);
        District::factory()->create([
            "id" => "858",
            "name" => "Mang Thít",
            "type" => "huyen",
            "slug" => "mang-thit",
            "name_with_type" => "Huyện Mang Thít",
            "path" => "Mang Thít, Vĩnh Long",
            "path_with_type" => "Huyện Mang Thít, Tỉnh Vĩnh Long",
            "city_id" => "86"
        ]);
        District::factory()->create([
            "id" => "859",
            "name" => "Vũng Liêm",
            "type" => "huyen",
            "slug" => "vung-liem",
            "name_with_type" => "Huyện  Vũng Liêm",
            "path" => "Vũng Liêm, Vĩnh Long",
            "path_with_type" => "Huyện  Vũng Liêm, Tỉnh Vĩnh Long",
            "city_id" => "86"
        ]);
        District::factory()->create([
            "id" => "860",
            "name" => "Tam Bình",
            "type" => "huyen",
            "slug" => "tam-binh",
            "name_with_type" => "Huyện Tam Bình",
            "path" => "Tam Bình, Vĩnh Long",
            "path_with_type" => "Huyện Tam Bình, Tỉnh Vĩnh Long",
            "city_id" => "86"
        ]);
        District::factory()->create([
            "id" => "861",
            "name" => "Bình Minh",
            "type" => "thi-xa",
            "slug" => "binh-minh",
            "name_with_type" => "Thị xã Bình Minh",
            "path" => "Bình Minh, Vĩnh Long",
            "path_with_type" => "Thị xã Bình Minh, Tỉnh Vĩnh Long",
            "city_id" => "86"
        ]);
        District::factory()->create([
            "id" => "862",
            "name" => "Trà Ôn",
            "type" => "huyen",
            "slug" => "tra-on",
            "name_with_type" => "Huyện Trà Ôn",
            "path" => "Trà Ôn, Vĩnh Long",
            "path_with_type" => "Huyện Trà Ôn, Tỉnh Vĩnh Long",
            "city_id" => "86"
        ]);
        District::factory()->create([
            "id" => "863",
            "name" => "Bình Tân",
            "type" => "huyen",
            "slug" => "binh-tan",
            "name_with_type" => "Huyện Bình Tân",
            "path" => "Bình Tân, Vĩnh Long",
            "path_with_type" => "Huyện Bình Tân, Tỉnh Vĩnh Long",
            "city_id" => "86"
        ]);
        District::factory()->create([
            "id" => "866",
            "name" => "Cao Lãnh",
            "type" => "thanh-pho",
            "slug" => "cao-lanh",
            "name_with_type" => "Thành phố Cao Lãnh",
            "path" => "Cao Lãnh, Đồng Tháp",
            "path_with_type" => "Thành phố Cao Lãnh, Tỉnh Đồng Tháp",
            "city_id" => "87"
        ]);
        District::factory()->create([
            "id" => "867",
            "name" => "Sa Đéc",
            "type" => "thanh-pho",
            "slug" => "sa-dec",
            "name_with_type" => "Thành phố Sa Đéc",
            "path" => "Sa Đéc, Đồng Tháp",
            "path_with_type" => "Thành phố Sa Đéc, Tỉnh Đồng Tháp",
            "city_id" => "87"
        ]);
        District::factory()->create([
            "id" => "868",
            "name" => "Hồng Ngự",
            "type" => "thanh-pho",
            "slug" => "hong-ngu",
            "name_with_type" => "Thành phố Hồng Ngự",
            "path" => "Hồng Ngự, Đồng Tháp",
            "path_with_type" => "Thành phố Hồng Ngự, Tỉnh Đồng Tháp",
            "city_id" => "87"
        ]);
        District::factory()->create([
            "id" => "869",
            "name" => "Tân Hồng",
            "type" => "huyen",
            "slug" => "tan-hong",
            "name_with_type" => "Huyện Tân Hồng",
            "path" => "Tân Hồng, Đồng Tháp",
            "path_with_type" => "Huyện Tân Hồng, Tỉnh Đồng Tháp",
            "city_id" => "87"
        ]);
        District::factory()->create([
            "id" => "870",
            "name" => "Hồng Ngự",
            "type" => "huyen",
            "slug" => "hong-ngu",
            "name_with_type" => "Huyện Hồng Ngự",
            "path" => "Hồng Ngự, Đồng Tháp",
            "path_with_type" => "Huyện Hồng Ngự, Tỉnh Đồng Tháp",
            "city_id" => "87"
        ]);
        District::factory()->create([
            "id" => "871",
            "name" => "Tam Nông",
            "type" => "huyen",
            "slug" => "tam-nong",
            "name_with_type" => "Huyện Tam Nông",
            "path" => "Tam Nông, Đồng Tháp",
            "path_with_type" => "Huyện Tam Nông, Tỉnh Đồng Tháp",
            "city_id" => "87"
        ]);
        District::factory()->create([
            "id" => "872",
            "name" => "Tháp Mười",
            "type" => "huyen",
            "slug" => "thap-muoi",
            "name_with_type" => "Huyện Tháp Mười",
            "path" => "Tháp Mười, Đồng Tháp",
            "path_with_type" => "Huyện Tháp Mười, Tỉnh Đồng Tháp",
            "city_id" => "87"
        ]);
        District::factory()->create([
            "id" => "873",
            "name" => "Cao Lãnh",
            "type" => "huyen",
            "slug" => "cao-lanh",
            "name_with_type" => "Huyện Cao Lãnh",
            "path" => "Cao Lãnh, Đồng Tháp",
            "path_with_type" => "Huyện Cao Lãnh, Tỉnh Đồng Tháp",
            "city_id" => "87"
        ]);
        District::factory()->create([
            "id" => "874",
            "name" => "Thanh Bình",
            "type" => "huyen",
            "slug" => "thanh-binh",
            "name_with_type" => "Huyện Thanh Bình",
            "path" => "Thanh Bình, Đồng Tháp",
            "path_with_type" => "Huyện Thanh Bình, Tỉnh Đồng Tháp",
            "city_id" => "87"
        ]);
        District::factory()->create([
            "id" => "875",
            "name" => "Lấp Vò",
            "type" => "huyen",
            "slug" => "lap-vo",
            "name_with_type" => "Huyện Lấp Vò",
            "path" => "Lấp Vò, Đồng Tháp",
            "path_with_type" => "Huyện Lấp Vò, Tỉnh Đồng Tháp",
            "city_id" => "87"
        ]);
        District::factory()->create([
            "id" => "876",
            "name" => "Lai Vung",
            "type" => "huyen",
            "slug" => "lai-vung",
            "name_with_type" => "Huyện Lai Vung",
            "path" => "Lai Vung, Đồng Tháp",
            "path_with_type" => "Huyện Lai Vung, Tỉnh Đồng Tháp",
            "city_id" => "87"
        ]);
        District::factory()->create([
            "id" => "877",
            "name" => "Châu Thành",
            "type" => "huyen",
            "slug" => "chau-thanh",
            "name_with_type" => "Huyện Châu Thành",
            "path" => "Châu Thành, Đồng Tháp",
            "path_with_type" => "Huyện Châu Thành, Tỉnh Đồng Tháp",
            "city_id" => "87"
        ]);
        District::factory()->create([
            "id" => "883",
            "name" => "Long Xuyên",
            "type" => "thanh-pho",
            "slug" => "long-xuyen",
            "name_with_type" => "Thành phố Long Xuyên",
            "path" => "Long Xuyên, An Giang",
            "path_with_type" => "Thành phố Long Xuyên, Tỉnh An Giang",
            "city_id" => "89"
        ]);
        District::factory()->create([
            "id" => "884",
            "name" => "Châu Đốc",
            "type" => "thanh-pho",
            "slug" => "chau-doc",
            "name_with_type" => "Thành phố Châu Đốc",
            "path" => "Châu Đốc, An Giang",
            "path_with_type" => "Thành phố Châu Đốc, Tỉnh An Giang",
            "city_id" => "89"
        ]);
        District::factory()->create([
            "id" => "886",
            "name" => "An Phú",
            "type" => "huyen",
            "slug" => "an-phu",
            "name_with_type" => "Huyện An Phú",
            "path" => "An Phú, An Giang",
            "path_with_type" => "Huyện An Phú, Tỉnh An Giang",
            "city_id" => "89"
        ]);
        District::factory()->create([
            "id" => "887",
            "name" => "Tân Châu",
            "type" => "thi-xa",
            "slug" => "tan-chau",
            "name_with_type" => "Thị xã Tân Châu",
            "path" => "Tân Châu, An Giang",
            "path_with_type" => "Thị xã Tân Châu, Tỉnh An Giang",
            "city_id" => "89"
        ]);
        District::factory()->create([
            "id" => "888",
            "name" => "Phú Tân",
            "type" => "huyen",
            "slug" => "phu-tan",
            "name_with_type" => "Huyện Phú Tân",
            "path" => "Phú Tân, An Giang",
            "path_with_type" => "Huyện Phú Tân, Tỉnh An Giang",
            "city_id" => "89"
        ]);
        District::factory()->create([
            "id" => "889",
            "name" => "Châu Phú",
            "type" => "huyen",
            "slug" => "chau-phu",
            "name_with_type" => "Huyện Châu Phú",
            "path" => "Châu Phú, An Giang",
            "path_with_type" => "Huyện Châu Phú, Tỉnh An Giang",
            "city_id" => "89"
        ]);
        District::factory()->create([
            "id" => "890",
            "name" => "Tịnh Biên",
            "type" => "huyen",
            "slug" => "tinh-bien",
            "name_with_type" => "Huyện Tịnh Biên",
            "path" => "Tịnh Biên, An Giang",
            "path_with_type" => "Huyện Tịnh Biên, Tỉnh An Giang",
            "city_id" => "89"
        ]);
        District::factory()->create([
            "id" => "891",
            "name" => "Tri Tôn",
            "type" => "huyen",
            "slug" => "tri-ton",
            "name_with_type" => "Huyện Tri Tôn",
            "path" => "Tri Tôn, An Giang",
            "path_with_type" => "Huyện Tri Tôn, Tỉnh An Giang",
            "city_id" => "89"
        ]);
        District::factory()->create([
            "id" => "892",
            "name" => "Châu Thành",
            "type" => "huyen",
            "slug" => "chau-thanh",
            "name_with_type" => "Huyện Châu Thành",
            "path" => "Châu Thành, An Giang",
            "path_with_type" => "Huyện Châu Thành, Tỉnh An Giang",
            "city_id" => "89"
        ]);
        District::factory()->create([
            "id" => "893",
            "name" => "Chợ Mới",
            "type" => "huyen",
            "slug" => "cho-moi",
            "name_with_type" => "Huyện Chợ Mới",
            "path" => "Chợ Mới, An Giang",
            "path_with_type" => "Huyện Chợ Mới, Tỉnh An Giang",
            "city_id" => "89"
        ]);
        District::factory()->create([
            "id" => "894",
            "name" => "Thoại Sơn",
            "type" => "huyen",
            "slug" => "thoai-son",
            "name_with_type" => "Huyện Thoại Sơn",
            "path" => "Thoại Sơn, An Giang",
            "path_with_type" => "Huyện Thoại Sơn, Tỉnh An Giang",
            "city_id" => "89"
        ]);
        District::factory()->create([
            "id" => "899",
            "name" => "Rạch Giá",
            "type" => "thanh-pho",
            "slug" => "rach-gia",
            "name_with_type" => "Thành phố Rạch Giá",
            "path" => "Rạch Giá, Kiên Giang",
            "path_with_type" => "Thành phố Rạch Giá, Tỉnh Kiên Giang",
            "city_id" => "91"
        ]);
        District::factory()->create([
            "id" => "900",
            "name" => "Hà Tiên",
            "type" => "thanh-pho",
            "slug" => "ha-tien",
            "name_with_type" => "Thành phố Hà Tiên",
            "path" => "Hà Tiên, Kiên Giang",
            "path_with_type" => "Thành phố Hà Tiên, Tỉnh Kiên Giang",
            "city_id" => "91"
        ]);
        District::factory()->create([
            "id" => "902",
            "name" => "Kiên Lương",
            "type" => "huyen",
            "slug" => "kien-luong",
            "name_with_type" => "Huyện Kiên Lương",
            "path" => "Kiên Lương, Kiên Giang",
            "path_with_type" => "Huyện Kiên Lương, Tỉnh Kiên Giang",
            "city_id" => "91"
        ]);
        District::factory()->create([
            "id" => "903",
            "name" => "Hòn Đất",
            "type" => "huyen",
            "slug" => "hon-dat",
            "name_with_type" => "Huyện Hòn Đất",
            "path" => "Hòn Đất, Kiên Giang",
            "path_with_type" => "Huyện Hòn Đất, Tỉnh Kiên Giang",
            "city_id" => "91"
        ]);
        District::factory()->create([
            "id" => "904",
            "name" => "Tân Hiệp",
            "type" => "huyen",
            "slug" => "tan-hiep",
            "name_with_type" => "Huyện Tân Hiệp",
            "path" => "Tân Hiệp, Kiên Giang",
            "path_with_type" => "Huyện Tân Hiệp, Tỉnh Kiên Giang",
            "city_id" => "91"
        ]);
        District::factory()->create([
            "id" => "905",
            "name" => "Châu Thành",
            "type" => "huyen",
            "slug" => "chau-thanh",
            "name_with_type" => "Huyện Châu Thành",
            "path" => "Châu Thành, Kiên Giang",
            "path_with_type" => "Huyện Châu Thành, Tỉnh Kiên Giang",
            "city_id" => "91"
        ]);
        District::factory()->create([
            "id" => "906",
            "name" => "Giồng Riềng",
            "type" => "huyen",
            "slug" => "giong-rieng",
            "name_with_type" => "Huyện Giồng Riềng",
            "path" => "Giồng Riềng, Kiên Giang",
            "path_with_type" => "Huyện Giồng Riềng, Tỉnh Kiên Giang",
            "city_id" => "91"
        ]);
        District::factory()->create([
            "id" => "907",
            "name" => "Gò Quao",
            "type" => "huyen",
            "slug" => "go-quao",
            "name_with_type" => "Huyện Gò Quao",
            "path" => "Gò Quao, Kiên Giang",
            "path_with_type" => "Huyện Gò Quao, Tỉnh Kiên Giang",
            "city_id" => "91"
        ]);
        District::factory()->create([
            "id" => "908",
            "name" => "An Biên",
            "type" => "huyen",
            "slug" => "an-bien",
            "name_with_type" => "Huyện An Biên",
            "path" => "An Biên, Kiên Giang",
            "path_with_type" => "Huyện An Biên, Tỉnh Kiên Giang",
            "city_id" => "91"
        ]);
        District::factory()->create([
            "id" => "909",
            "name" => "An Minh",
            "type" => "huyen",
            "slug" => "an-minh",
            "name_with_type" => "Huyện An Minh",
            "path" => "An Minh, Kiên Giang",
            "path_with_type" => "Huyện An Minh, Tỉnh Kiên Giang",
            "city_id" => "91"
        ]);
        District::factory()->create([
            "id" => "910",
            "name" => "Vĩnh Thuận",
            "type" => "huyen",
            "slug" => "vinh-thuan",
            "name_with_type" => "Huyện Vĩnh Thuận",
            "path" => "Vĩnh Thuận, Kiên Giang",
            "path_with_type" => "Huyện Vĩnh Thuận, Tỉnh Kiên Giang",
            "city_id" => "91"
        ]);
        District::factory()->create([
            "id" => "911",
            "name" => "Phú Quốc",
            "type" => "thanh-pho",
            "slug" => "phu-quoc",
            "name_with_type" => "Thành phố Phú Quốc",
            "path" => "Phú Quốc, Kiên Giang",
            "path_with_type" => "Thành phố Phú Quốc, Tỉnh Kiên Giang",
            "city_id" => "91"
        ]);
        District::factory()->create([
            "id" => "912",
            "name" => "Kiên Hải",
            "type" => "huyen",
            "slug" => "kien-hai",
            "name_with_type" => "Huyện Kiên Hải",
            "path" => "Kiên Hải, Kiên Giang",
            "path_with_type" => "Huyện Kiên Hải, Tỉnh Kiên Giang",
            "city_id" => "91"
        ]);
        District::factory()->create([
            "id" => "913",
            "name" => "U Minh Thượng",
            "type" => "huyen",
            "slug" => "u-minh-thuong",
            "name_with_type" => "Huyện U Minh Thượng",
            "path" => "U Minh Thượng, Kiên Giang",
            "path_with_type" => "Huyện U Minh Thượng, Tỉnh Kiên Giang",
            "city_id" => "91"
        ]);
        District::factory()->create([
            "id" => "914",
            "name" => "Giang Thành",
            "type" => "huyen",
            "slug" => "giang-thanh",
            "name_with_type" => "Huyện Giang Thành",
            "path" => "Giang Thành, Kiên Giang",
            "path_with_type" => "Huyện Giang Thành, Tỉnh Kiên Giang",
            "city_id" => "91"
        ]);
        District::factory()->create([
            "id" => "916",
            "name" => "Ninh Kiều",
            "type" => "quan",
            "slug" => "ninh-kieu",
            "name_with_type" => "Quận Ninh Kiều",
            "path" => "Ninh Kiều, Cần Thơ",
            "path_with_type" => "Quận Ninh Kiều, Thành phố Cần Thơ",
            "city_id" => "92"
        ]);
        District::factory()->create([
            "id" => "917",
            "name" => "Ô Môn",
            "type" => "quan",
            "slug" => "o-mon",
            "name_with_type" => "Quận Ô Môn",
            "path" => "Ô Môn, Cần Thơ",
            "path_with_type" => "Quận Ô Môn, Thành phố Cần Thơ",
            "city_id" => "92"
        ]);
        District::factory()->create([
            "id" => "918",
            "name" => "Bình Thuỷ",
            "type" => "quan",
            "slug" => "binh-thuy",
            "name_with_type" => "Quận Bình Thuỷ",
            "path" => "Bình Thuỷ, Cần Thơ",
            "path_with_type" => "Quận Bình Thuỷ, Thành phố Cần Thơ",
            "city_id" => "92"
        ]);
        District::factory()->create([
            "id" => "919",
            "name" => "Cái Răng",
            "type" => "quan",
            "slug" => "cai-rang",
            "name_with_type" => "Quận Cái Răng",
            "path" => "Cái Răng, Cần Thơ",
            "path_with_type" => "Quận Cái Răng, Thành phố Cần Thơ",
            "city_id" => "92"
        ]);
        District::factory()->create([
            "id" => "923",
            "name" => "Thốt Nốt",
            "type" => "quan",
            "slug" => "thot-not",
            "name_with_type" => "Quận Thốt Nốt",
            "path" => "Thốt Nốt, Cần Thơ",
            "path_with_type" => "Quận Thốt Nốt, Thành phố Cần Thơ",
            "city_id" => "92"
        ]);
        District::factory()->create([
            "id" => "924",
            "name" => "Vĩnh Thạnh",
            "type" => "huyen",
            "slug" => "vinh-thanh",
            "name_with_type" => "Huyện Vĩnh Thạnh",
            "path" => "Vĩnh Thạnh, Cần Thơ",
            "path_with_type" => "Huyện Vĩnh Thạnh, Thành phố Cần Thơ",
            "city_id" => "92"
        ]);
        District::factory()->create([
            "id" => "925",
            "name" => "Cờ Đỏ",
            "type" => "huyen",
            "slug" => "co-do",
            "name_with_type" => "Huyện Cờ Đỏ",
            "path" => "Cờ Đỏ, Cần Thơ",
            "path_with_type" => "Huyện Cờ Đỏ, Thành phố Cần Thơ",
            "city_id" => "92"
        ]);
        District::factory()->create([
            "id" => "926",
            "name" => "Phong Điền",
            "type" => "huyen",
            "slug" => "phong-dien",
            "name_with_type" => "Huyện Phong Điền",
            "path" => "Phong Điền, Cần Thơ",
            "path_with_type" => "Huyện Phong Điền, Thành phố Cần Thơ",
            "city_id" => "92"
        ]);
        District::factory()->create([
            "id" => "927",
            "name" => "Thới Lai",
            "type" => "huyen",
            "slug" => "thoi-lai",
            "name_with_type" => "Huyện Thới Lai",
            "path" => "Thới Lai, Cần Thơ",
            "path_with_type" => "Huyện Thới Lai, Thành phố Cần Thơ",
            "city_id" => "92"
        ]);
        District::factory()->create([
            "id" => "930",
            "name" => "Vị Thanh",
            "type" => "thanh-pho",
            "slug" => "vi-thanh",
            "name_with_type" => "Thành phố Vị Thanh",
            "path" => "Vị Thanh, Hậu Giang",
            "path_with_type" => "Thành phố Vị Thanh, Tỉnh Hậu Giang",
            "city_id" => "93"
        ]);
        District::factory()->create([
            "id" => "931",
            "name" => "Ngã Bảy",
            "type" => "thanh-pho",
            "slug" => "nga-bay",
            "name_with_type" => "Thành phố Ngã Bảy",
            "path" => "Ngã Bảy, Hậu Giang",
            "path_with_type" => "Thành phố Ngã Bảy, Tỉnh Hậu Giang",
            "city_id" => "93"
        ]);
        District::factory()->create([
            "id" => "932",
            "name" => "Châu Thành A",
            "type" => "huyen",
            "slug" => "chau-thanh-a",
            "name_with_type" => "Huyện Châu Thành A",
            "path" => "Châu Thành A, Hậu Giang",
            "path_with_type" => "Huyện Châu Thành A, Tỉnh Hậu Giang",
            "city_id" => "93"
        ]);
        District::factory()->create([
            "id" => "933",
            "name" => "Châu Thành",
            "type" => "huyen",
            "slug" => "chau-thanh",
            "name_with_type" => "Huyện Châu Thành",
            "path" => "Châu Thành, Hậu Giang",
            "path_with_type" => "Huyện Châu Thành, Tỉnh Hậu Giang",
            "city_id" => "93"
        ]);
        District::factory()->create([
            "id" => "934",
            "name" => "Phụng Hiệp",
            "type" => "huyen",
            "slug" => "phung-hiep",
            "name_with_type" => "Huyện Phụng Hiệp",
            "path" => "Phụng Hiệp, Hậu Giang",
            "path_with_type" => "Huyện Phụng Hiệp, Tỉnh Hậu Giang",
            "city_id" => "93"
        ]);
        District::factory()->create([
            "id" => "935",
            "name" => "Vị Thuỷ",
            "type" => "huyen",
            "slug" => "vi-thuy",
            "name_with_type" => "Huyện Vị Thuỷ",
            "path" => "Vị Thuỷ, Hậu Giang",
            "path_with_type" => "Huyện Vị Thuỷ, Tỉnh Hậu Giang",
            "city_id" => "93"
        ]);
        District::factory()->create([
            "id" => "936",
            "name" => "Long Mỹ",
            "type" => "huyen",
            "slug" => "long-my",
            "name_with_type" => "Huyện Long Mỹ",
            "path" => "Long Mỹ, Hậu Giang",
            "path_with_type" => "Huyện Long Mỹ, Tỉnh Hậu Giang",
            "city_id" => "93"
        ]);
        District::factory()->create([
            "id" => "937",
            "name" => "Long Mỹ",
            "type" => "thi-xa",
            "slug" => "long-my",
            "name_with_type" => "Thị xã Long Mỹ",
            "path" => "Long Mỹ, Hậu Giang",
            "path_with_type" => "Thị xã Long Mỹ, Tỉnh Hậu Giang",
            "city_id" => "93"
        ]);
        District::factory()->create([
            "id" => "941",
            "name" => "Sóc Trăng",
            "type" => "thanh-pho",
            "slug" => "soc-trang",
            "name_with_type" => "Thành phố Sóc Trăng",
            "path" => "Sóc Trăng, Sóc Trăng",
            "path_with_type" => "Thành phố Sóc Trăng, Tỉnh Sóc Trăng",
            "city_id" => "94"
        ]);
        District::factory()->create([
            "id" => "942",
            "name" => "Châu Thành",
            "type" => "huyen",
            "slug" => "chau-thanh",
            "name_with_type" => "Huyện Châu Thành",
            "path" => "Châu Thành, Sóc Trăng",
            "path_with_type" => "Huyện Châu Thành, Tỉnh Sóc Trăng",
            "city_id" => "94"
        ]);
        District::factory()->create([
            "id" => "943",
            "name" => "Kế Sách",
            "type" => "huyen",
            "slug" => "ke-sach",
            "name_with_type" => "Huyện Kế Sách",
            "path" => "Kế Sách, Sóc Trăng",
            "path_with_type" => "Huyện Kế Sách, Tỉnh Sóc Trăng",
            "city_id" => "94"
        ]);
        District::factory()->create([
            "id" => "944",
            "name" => "Mỹ Tú",
            "type" => "huyen",
            "slug" => "my-tu",
            "name_with_type" => "Huyện Mỹ Tú",
            "path" => "Mỹ Tú, Sóc Trăng",
            "path_with_type" => "Huyện Mỹ Tú, Tỉnh Sóc Trăng",
            "city_id" => "94"
        ]);
        District::factory()->create([
            "id" => "945",
            "name" => "Cù Lao Dung",
            "type" => "huyen",
            "slug" => "cu-lao-dung",
            "name_with_type" => "Huyện Cù Lao Dung",
            "path" => "Cù Lao Dung, Sóc Trăng",
            "path_with_type" => "Huyện Cù Lao Dung, Tỉnh Sóc Trăng",
            "city_id" => "94"
        ]);
        District::factory()->create([
            "id" => "946",
            "name" => "Long Phú",
            "type" => "huyen",
            "slug" => "long-phu",
            "name_with_type" => "Huyện Long Phú",
            "path" => "Long Phú, Sóc Trăng",
            "path_with_type" => "Huyện Long Phú, Tỉnh Sóc Trăng",
            "city_id" => "94"
        ]);
        District::factory()->create([
            "id" => "947",
            "name" => "Mỹ Xuyên",
            "type" => "huyen",
            "slug" => "my-xuyen",
            "name_with_type" => "Huyện Mỹ Xuyên",
            "path" => "Mỹ Xuyên, Sóc Trăng",
            "path_with_type" => "Huyện Mỹ Xuyên, Tỉnh Sóc Trăng",
            "city_id" => "94"
        ]);
        District::factory()->create([
            "id" => "948",
            "name" => "Ngã Năm",
            "type" => "thi-xa",
            "slug" => "nga-nam",
            "name_with_type" => "Thị xã Ngã Năm",
            "path" => "Ngã Năm, Sóc Trăng",
            "path_with_type" => "Thị xã Ngã Năm, Tỉnh Sóc Trăng",
            "city_id" => "94"
        ]);
        District::factory()->create([
            "id" => "949",
            "name" => "Thạnh Trị",
            "type" => "huyen",
            "slug" => "thanh-tri",
            "name_with_type" => "Huyện Thạnh Trị",
            "path" => "Thạnh Trị, Sóc Trăng",
            "path_with_type" => "Huyện Thạnh Trị, Tỉnh Sóc Trăng",
            "city_id" => "94"
        ]);
        District::factory()->create([
            "id" => "950",
            "name" => "Vĩnh Châu",
            "type" => "thi-xa",
            "slug" => "vinh-chau",
            "name_with_type" => "Thị xã Vĩnh Châu",
            "path" => "Vĩnh Châu, Sóc Trăng",
            "path_with_type" => "Thị xã Vĩnh Châu, Tỉnh Sóc Trăng",
            "city_id" => "94"
        ]);
        District::factory()->create([
            "id" => "951",
            "name" => "Trần Đề",
            "type" => "huyen",
            "slug" => "tran-de",
            "name_with_type" => "Huyện Trần Đề",
            "path" => "Trần Đề, Sóc Trăng",
            "path_with_type" => "Huyện Trần Đề, Tỉnh Sóc Trăng",
            "city_id" => "94"
        ]);
        District::factory()->create([
            "id" => "954",
            "name" => "Bạc Liêu",
            "type" => "thanh-pho",
            "slug" => "bac-lieu",
            "name_with_type" => "Thành phố Bạc Liêu",
            "path" => "Bạc Liêu, Bạc Liêu",
            "path_with_type" => "Thành phố Bạc Liêu, Tỉnh Bạc Liêu",
            "city_id" => "95"
        ]);
        District::factory()->create([
            "id" => "956",
            "name" => "Hồng Dân",
            "type" => "huyen",
            "slug" => "hong-dan",
            "name_with_type" => "Huyện Hồng Dân",
            "path" => "Hồng Dân, Bạc Liêu",
            "path_with_type" => "Huyện Hồng Dân, Tỉnh Bạc Liêu",
            "city_id" => "95"
        ]);
        District::factory()->create([
            "id" => "957",
            "name" => "Phước Long",
            "type" => "huyen",
            "slug" => "phuoc-long",
            "name_with_type" => "Huyện Phước Long",
            "path" => "Phước Long, Bạc Liêu",
            "path_with_type" => "Huyện Phước Long, Tỉnh Bạc Liêu",
            "city_id" => "95"
        ]);
        District::factory()->create([
            "id" => "958",
            "name" => "Vĩnh Lợi",
            "type" => "huyen",
            "slug" => "vinh-loi",
            "name_with_type" => "Huyện Vĩnh Lợi",
            "path" => "Vĩnh Lợi, Bạc Liêu",
            "path_with_type" => "Huyện Vĩnh Lợi, Tỉnh Bạc Liêu",
            "city_id" => "95"
        ]);
        District::factory()->create([
            "id" => "959",
            "name" => "Giá Rai",
            "type" => "thi-xa",
            "slug" => "gia-rai",
            "name_with_type" => "Thị xã Giá Rai",
            "path" => "Giá Rai, Bạc Liêu",
            "path_with_type" => "Thị xã Giá Rai, Tỉnh Bạc Liêu",
            "city_id" => "95"
        ]);
        District::factory()->create([
            "id" => "960",
            "name" => "Đông Hải",
            "type" => "huyen",
            "slug" => "dong-hai",
            "name_with_type" => "Huyện Đông Hải",
            "path" => "Đông Hải, Bạc Liêu",
            "path_with_type" => "Huyện Đông Hải, Tỉnh Bạc Liêu",
            "city_id" => "95"
        ]);
        District::factory()->create([
            "id" => "961",
            "name" => "Hoà Bình",
            "type" => "huyen",
            "slug" => "hoa-binh",
            "name_with_type" => "Huyện Hoà Bình",
            "path" => "Hoà Bình, Bạc Liêu",
            "path_with_type" => "Huyện Hoà Bình, Tỉnh Bạc Liêu",
            "city_id" => "95"
        ]);
        District::factory()->create([
            "id" => "964",
            "name" => "Cà Mau",
            "type" => "thanh-pho",
            "slug" => "ca-mau",
            "name_with_type" => "Thành phố Cà Mau",
            "path" => "Cà Mau, Cà Mau",
            "path_with_type" => "Thành phố Cà Mau, Tỉnh Cà Mau",
            "city_id" => "96"
        ]);
        District::factory()->create([
            "id" => "966",
            "name" => "U Minh",
            "type" => "huyen",
            "slug" => "u-minh",
            "name_with_type" => "Huyện U Minh",
            "path" => "U Minh, Cà Mau",
            "path_with_type" => "Huyện U Minh, Tỉnh Cà Mau",
            "city_id" => "96"
        ]);
        District::factory()->create([
            "id" => "967",
            "name" => "Thới Bình",
            "type" => "huyen",
            "slug" => "thoi-binh",
            "name_with_type" => "Huyện Thới Bình",
            "path" => "Thới Bình, Cà Mau",
            "path_with_type" => "Huyện Thới Bình, Tỉnh Cà Mau",
            "city_id" => "96"
        ]);
        District::factory()->create([
            "id" => "968",
            "name" => "Trần Văn Thời",
            "type" => "huyen",
            "slug" => "tran-van-thoi",
            "name_with_type" => "Huyện Trần Văn Thời",
            "path" => "Trần Văn Thời, Cà Mau",
            "path_with_type" => "Huyện Trần Văn Thời, Tỉnh Cà Mau",
            "city_id" => "96"
        ]);
        District::factory()->create([
            "id" => "969",
            "name" => "Cái Nước",
            "type" => "huyen",
            "slug" => "cai-nuoc",
            "name_with_type" => "Huyện Cái Nước",
            "path" => "Cái Nước, Cà Mau",
            "path_with_type" => "Huyện Cái Nước, Tỉnh Cà Mau",
            "city_id" => "96"
        ]);
        District::factory()->create([
            "id" => "970",
            "name" => "Đầm Dơi",
            "type" => "huyen",
            "slug" => "dam-doi",
            "name_with_type" => "Huyện Đầm Dơi",
            "path" => "Đầm Dơi, Cà Mau",
            "path_with_type" => "Huyện Đầm Dơi, Tỉnh Cà Mau",
            "city_id" => "96"
        ]);
        District::factory()->create([
            "id" => "971",
            "name" => "Năm Căn",
            "type" => "huyen",
            "slug" => "nam-can",
            "name_with_type" => "Huyện Năm Căn",
            "path" => "Năm Căn, Cà Mau",
            "path_with_type" => "Huyện Năm Căn, Tỉnh Cà Mau",
            "city_id" => "96"
        ]);
        District::factory()->create([
            "id" => "972",
            "name" => "Phú Tân",
            "type" => "huyen",
            "slug" => "phu-tan",
            "name_with_type" => "Huyện Phú Tân",
            "path" => "Phú Tân, Cà Mau",
            "path_with_type" => "Huyện Phú Tân, Tỉnh Cà Mau",
            "city_id" => "96"
        ]);
        District::factory()->create([
            "id" => "973",
            "name" => "Ngọc Hiển",
            "type" => "huyen",
            "slug" => "ngoc-hien",
            "name_with_type" => "Huyện Ngọc Hiển",
            "path" => "Ngọc Hiển, Cà Mau",
            "path_with_type" => "Huyện Ngọc Hiển, Tỉnh Cà Mau",
            "city_id" => "96"
       ]);
    
    }
}
