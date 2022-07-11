<template>
    <div>
        <!-- <div v-for="value in stationsStore.station">
            {{ value }}
        </div> -->

        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0"
        >
            <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 text-xl font-bold">
                        Create Station
                    </h6>
                    <!-- <button
                        class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                        type="button"
                    >
                        Settings
                    </button> -->
                </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0 mt-3">
                <form @submit.prevent="stationsStore.create(this.stationModel)">
                    <!-- <h6
                        class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"
                    >
                        Station Information
                    </h6> -->
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    Name
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="stationModel.name"
                                />
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    Capacity
                                </label>
                                <input
                                    type="number"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="stationModel.capacity"
                                />
                            </div>
                        </div>
                        <!-- <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    First Name
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    value="Lucky"
                                />
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    Last Name
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    value="Jesse"
                                />
                            </div>
                        </div> -->
                    </div>
                    <hr class="mt-6 border-b-1 border-blueGray-300" />

                    <h6
                        class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"
                    >
                        Location
                    </h6>
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    City
                                </label>
                                <select
                                    name="city"
                                    id=""
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                >
                                    <option value="01">Hà Nội</option>
                                    <option value="26">Vĩnh Phúc</option>
                                    <option value="27">Bắc Ninh</option>
                                    <option value="30">Hải Dương</option>
                                    <option value="31">Hải Phòng</option>
                                    <option value="33">Hưng Yên</option>
                                    <option value="34">Thái Bình</option>
                                    <option value="35">Hà Nam</option>
                                    <option value="96">Cà Mau</option>
                                    <option value="02">Hà Giang</option>
                                    <option value="04">Cao Bằng</option>
                                    <option value="06">Bắc Kạn</option>
                                    <option value="08">Tuyên Quang</option>
                                    <option value="19">Thái Nguyên</option>
                                    <option value="20">Lạng Sơn</option>
                                    <option value="22">Quảng Ninh</option>
                                    <option value="24">Bắc Giang</option>
                                    <option value="25">Phú Thọ</option>
                                    <option value="10">Lào Cai</option>
                                    <option value="11">Điện Biên</option>
                                    <option value="12">Lai Châu</option>
                                    <option value="14">Sơn La</option>
                                    <option value="15">Yên Bái</option>
                                    <option value="17">Hoà Bình</option>
                                    <option value="70">Bình Phước</option>
                                    <option value="72">Tây Ninh</option>
                                    <option value="74">Bình Dương</option>
                                    <option value="75">Đồng Nai</option>
                                    <option value="79">Hồ Chí Minh</option>
                                    <option value="77">
                                        Bà Rịa - Vũng Tàu
                                    </option>
                                    <option value="36">Nam Định</option>
                                    <option value="37">Ninh Bình</option>
                                    <option value="38">Thanh Hóa</option>
                                    <option value="40">Nghệ An</option>
                                    <option value="42">Hà Tĩnh</option>
                                    <option value="44">Quảng Bình</option>
                                    <option value="45">Quảng Trị</option>
                                    <option value="46">Thừa Thiên Huế</option>
                                    <option value="48">Đà Nẵng</option>
                                    <option value="49">Quảng Nam</option>
                                    <option value="51">Quảng Ngãi</option>
                                    <option value="52">Bình Định</option>
                                    <option value="54">Phú Yên</option>
                                    <option value="56">Khánh Hòa</option>
                                    <option value="58">Ninh Thuận</option>
                                    <option value="60">Bình Thuận</option>
                                    <option value="62">Kon Tum</option>
                                    <option value="64">Gia Lai</option>
                                    <option value="66">Đắk Lắk</option>
                                    <option value="67">Đắk Nông</option>
                                    <option value="68">Lâm Đồng</option>
                                    <option value="80">Long An</option>
                                    <option value="82">Tiền Giang</option>
                                    <option value="83">Bến Tre</option>
                                    <option value="84">Trà Vinh</option>
                                    <option value="86">Vĩnh Long</option>
                                    <option value="87">Đồng Tháp</option>
                                    <option value="89">An Giang</option>
                                    <option value="91">Kiên Giang</option>
                                    <option value="92">Cần Thơ</option>
                                    <option value="93">Hậu Giang</option>
                                    <option value="94">Sóc Trăng</option>
                                    <option value="95">Bạc Liêu</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    District
                                </label>
                                <select
                                    name=""
                                    id=""
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                >
                                    <option value="760">1</option>
                                    <option value="761">12</option>
                                    <option value="770">3</option>
                                    <option value="771">10</option>
                                    <option value="772">11</option>
                                    <option value="773">4</option>
                                    <option value="774">5</option>
                                    <option value="775">6</option>
                                    <option value="776">8</option>
                                    <option value="778">7</option>
                                    <option value="725">Thuận An</option>
                                    <option value="001">Ba Đình</option>
                                    <option value="002">Hoàn Kiếm</option>
                                    <option value="003">Tây Hồ</option>
                                    <option value="004">Long Biên</option>
                                    <option value="005">Cầu Giấy</option>
                                    <option value="006">Đống Đa</option>
                                    <option value="007">Hai Bà Trưng</option>
                                    <option value="008">Hoàng Mai</option>
                                    <option value="009">Thanh Xuân</option>
                                    <option value="016">Sóc Sơn</option>
                                    <option value="017">Đông Anh</option>
                                    <option value="018">Gia Lâm</option>
                                    <option value="019">Nam Từ Liêm</option>
                                    <option value="020">Thanh Trì</option>
                                    <option value="021">Bắc Từ Liêm</option>
                                    <option value="250">Mê Linh</option>
                                    <option value="268">Hà Đông</option>
                                    <option value="269">Sơn Tây</option>
                                    <option value="271">Ba Vì</option>
                                    <option value="272">Phúc Thọ</option>
                                    <option value="273">Đan Phượng</option>
                                    <option value="274">Hoài Đức</option>
                                    <option value="275">Quốc Oai</option>
                                    <option value="276">Thạch Thất</option>
                                    <option value="277">Chương Mỹ</option>
                                    <option value="278">Thanh Oai</option>
                                    <option value="279">Thường Tín</option>
                                    <option value="280">Phú Xuyên</option>
                                    <option value="281">Ứng Hòa</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    Subdistrict
                                </label>
                                <select
                                    name=""
                                    id=""
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                >
                                    <option value="13777">Thành Lợi</option>
                                    <option value="13780">Kim Thái</option>
                                    <option value="13783">Liên Minh</option>
                                    <option value="13786">Đại Thắng</option>
                                    <option value="13789">Tam Thanh</option>
                                    <option value="13792">Vĩnh Hào</option>
                                    <option value="13795">Lâm</option>
                                    <option value="13798">Yên Trung</option>
                                    <option value="13801">Yên Thành</option>
                                    <option value="13804">Yên Tân</option>
                                    <option value="13807">Yên Lợi</option>
                                    <option value="13810">Yên Thọ</option>
                                    <option value="13813">Yên Nghĩa</option>
                                    <option value="13816">Yên Minh</option>
                                    <option value="13819">Yên Phương</option>
                                    <option value="13822">Yên Chính</option>
                                    <option value="13825">Yên Bình</option>
                                    <option value="13828">Yên Phú</option>
                                    <option value="13831">Yên Mỹ</option>
                                    <option value="13834">Yên Dương</option>
                                    <option value="13840">Yên Hưng</option>
                                    <option value="13843">Yên Khánh</option>
                                    <option value="13846">Yên Phong</option>
                                    <option value="13849">Yên Ninh</option>
                                    <option value="13852">Yên Lương</option>
                                    <option value="13855">Yên Hồng</option>
                                    <option value="13858">Yên Quang</option>
                                    <option value="13861">Yên Tiến</option>
                                    <option value="13864">Yên Thắng</option>
                                    <option value="13867">Yên Phúc</option>
                                    <option value="13870">Yên Cường</option>
                                    <option value="13873">Yên Lộc</option>
                                    <option value="13876">Yên Bằng</option>
                                    <option value="13879">Yên Đồng</option>
                                    <option value="13882">Yên Khang</option>
                                    <option value="13885">Yên Nhân</option>
                                    <option value="13888">Yên Trị</option>
                                    <option value="13891">Liễu Đề</option>
                                    <option value="13894">Rạng Đông</option>
                                    <option value="13897">Nghĩa Đồng</option>
                                    <option value="13900">Nghĩa Thịnh</option>
                                    <option value="13903">Nghĩa Minh</option>
                                    <option value="13906">Nghĩa Thái</option>
                                    <option value="13909">Hoàng Nam</option>
                                    <option value="13912">Nghĩa Châu</option>
                                    <option value="13915">Nghĩa Trung</option>
                                    <option value="13918">Nghĩa Sơn</option>
                                    <option value="13921">Nghĩa Lạc</option>
                                    <option value="13924">Nghĩa Hồng</option>
                                    <option value="13927">Nghĩa Phong</option>
                                    <option value="13930">Nghĩa Phú</option>
                                    <option value="13933">Nghĩa Bình</option>
                                    <option value="13936">Quỹ Nhất</option>
                                    <option value="13939">Nghĩa Tân</option>
                                    <option value="13942">Nghĩa Hùng</option>
                                    <option value="13945">Nghĩa Lâm</option>
                                    <option value="13948">Nghĩa Thành</option>
                                    <option value="13951">Phúc Thắng</option>
                                    <option value="13954">Nghĩa Lợi</option>
                                    <option value="13957">Nghĩa Hải</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full lg:w-12/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    Address
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="stationModel.capacity"
                                />
                            </div>
                        </div>
                        <!-- <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    Country
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    value="United States"
                                />
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    Postal Code
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    value="Postal Code"
                                />
                            </div>
                        </div> -->
                    </div>
                    <hr class="mt-6 border-b-1 border-blueGray-300" />

                    <h6
                        class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"
                    >
                        Contact Information
                    </h6>
                    <div class="flex flex-wrap">
                        <!-- <div class="w-full lg:w-12/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    Address
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="stationModel.address"
                                />
                            </div>
                        </div> -->
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    Phone
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="stationModel.phone_number"
                                />
                            </div>
                        </div>
                        <!-- <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    Country
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    value="United States"
                                />
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    Postal Code
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    value="Postal Code"
                                />
                            </div>
                        </div> -->
                    </div>

                    <!-- <hr class="mt-6 border-b-1 border-blueGray-300" />

                    <h6
                        class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"
                    >
                        About Me
                    </h6>
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-12/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    About me
                                </label>
                                <textarea
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    rows="4"
                                >
                                    A beautiful UI Kit and Admin for VueJS & Tailwind CSS. It is Free
                                    and Open Source.
                                </textarea
                                >
                            </div>
                        </div>
                    </div> -->
                    <button
                        class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 float-right"
                        type="submit"
                    >
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
// utils
import { useStationsStore } from "@/admin/utils/stores/stationsStore.js";

// router
import { useRouter, useRoute } from "vue-router";

export default {
    setup() {
        const router = useRouter();
        const route = useRoute();
        const stationsStore = useStationsStore();

        return {
            router,
            route,
            stationsStore,
        };
    },
    data() {
        return {
            stationModel: {
                name: null,
                address: null,
                phone: null,
                capacity: null,
            },
        };
    },
};
</script>
