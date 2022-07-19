<template>
    <banner />
    <div class="mt-[20px]">
        <div class="md:flex justify-center">
            <div></div>
            <div class="mt-5 md:mt-0 lg:min-w-[1000px] md:min-w-[800px]">
                <form action="#" method="POST">
                    <div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-4 mb-6">
                        <div class="px-4 py-8 sm:p-6">
                            <div class="grid grid-cols-6 gap-6 ">
                                <div class="font-bold text-[30px] col-span-6">Tìm kiếm</div>
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="email-address" class="block font-medium text-gray-700">Thành phố địa chỉ
                                        hoặc tên trạm</label>
                                    <div class="relative mt-1 ">
                                        <div class="flex absolute inset-y-0 left-0 items-center pointer-events-none">
                                            <span
                                                class="text-size-sm ease-soft leading-5.6 absolute z-50 flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="email" id="topbar-search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 rounded-lg w-full pl-10 p-2.5"
                                            placeholder="Type here">
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">
                                        Ngày nhận
                                    </label>
                                    <div class="relative mt-1 ">
                                        <div class="flex absolute inset-y-0 left-0 items-center pointer-events-none">
                                            <span
                                                class="text-size-sm ease-soft leading-5.6 absolute z-50 flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                                <i class="fa-solid fa-calendar-days"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="email" id="topbar-search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 rounded-lg w-full pl-10 p-2.5"
                                            placeholder="Type here">
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">
                                        Ngày trả
                                    </label>
                                    <div class="relative mt-1 ">
                                        <div class="flex absolute inset-y-0 left-0 items-center pointer-events-none">
                                            <span
                                                class="text-size-sm ease-soft leading-5.6 absolute z-50 flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                                <i class="fa-solid fa-calendar-days"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="email" id="topbar-search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 rounded-lg w-full pl-10 p-2.5"
                                            placeholder="Type here">
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">
                                        Hãng xe
                                    </label>
                                    <div class="relative mt-1 ">
                                        <div class="flex absolute inset-y-0 left-0 items-center pointer-events-none">
                                            <span
                                                class="text-size-sm ease-soft leading-5.6 absolute z-50 flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                                <i class="fa-solid fa-car"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="email" id="topbar-search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 rounded-lg w-full pl-10 p-2.5"
                                            placeholder="Type here">
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">
                                        Tình trạng xe
                                    </label>
                                    <fieldset class="mt-3">
                                        <div class="flex items-center mb-4">
                                            <input id="country-option-1" type="radio" name="countries" value="USA"
                                                class="w-5 h-5 bg-transparent rounded-full border border-gray-300 focus:ring-0 checked:bg-dark-900"
                                                aria-labelledby="country-option-1" aria-describedby="country-option-1"
                                                checked>
                                            <label for="country-option-1"
                                                class="block ml-2 mr-4 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                Mới
                                            </label>
                                            <input id="country-option-2" type="radio" name="countries" value="Germany"
                                                class="w-5 h-5 bg-transparent rounded-full border border-gray-300 focus:ring-0 checked:bg-dark-900"
                                                aria-labelledby="country-option-2" aria-describedby="country-option-2">
                                            <label for="country-option-2"
                                                class="block ml-2  mr-4 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                Cũ
                                            </label>
                                            <input id="country-option-2" type="radio" name="countries" value="Germany"
                                                class="w-5 h-5 bg-transparent rounded-full border border-gray-300 focus:ring-0 checked:bg-dark-900"
                                                aria-labelledby="country-option-2" aria-describedby="country-option-2">
                                            <label for="country-option-2"
                                                class="block ml-2  mr-4 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                Tất cả
                                            </label>
                                        </div>

                                    </fieldset>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">
                                        Số chỗ
                                    </label>
                                    <div class="relative mt-1 ">
                                        <div class="flex absolute inset-y-0 left-0 items-center pointer-events-none">
                                            <span
                                                class="text-size-sm ease-soft leading-5.6 absolute z-50 flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                                <i class="fa-solid fa-couch"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="email" id="topbar-search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 rounded-lg w-full pl-10 p-2.5"
                                            placeholder="Type here">
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-2 grid justify-items-center">
                                    <div class="h-[20px]"></div>
                                    <a href="#"
                                        class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-indigo-600 border border-transparent shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 rounded-lg">
                                        Tìm kiếm </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import Banner from '@/components/Banner.vue';
export default {
    components: {
        Banner
    }
}
</script>
<style scoped>
/* @import url('@/assets/styles/soft-ui-pro.css'); */
</style>
