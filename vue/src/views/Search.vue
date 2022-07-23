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
                                    <label for="email-address" class="block font-medium text-gray-700">Thành phố địa
                                        chỉ
                                        hoặc tên trạm</label>
                                    <div class="relative mt-1 ">
                                        <div class="flex absolute inset-y-0 left-0 items-center pointer-events-none">
                                            <span
                                                class="text-size-sm ease-soft leading-5.6 absolute  flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="email" id="topbar-search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 rounded-lg w-full pl-10 p-2.5"
                                            placeholder="Type here">
                                    </div>
                                </div>
                                <v-date-picker v-model="range" is-range
                                    class="col-span-6 sm:col-span-4 grid gap-6 grid-cols-2">
                                    <template v-slot="{ inputValue, inputEvents }">
                                        <div class="col-span-1 sm:col-span-1">
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">
                                                Ngày nhận
                                            </label>
                                            <div class="relative mt-1 ">
                                                <div
                                                    class="flex absolute inset-y-0 left-0 items-center pointer-events-none">
                                                    <span
                                                        class="text-size-sm ease-soft leading-5.6 absolute  flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </span>
                                                </div>
                                                <input :value="inputValue.start" v-on="inputEvents.start"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 rounded-lg w-full pl-10 p-2.5" />
                                            </div>
                                        </div>
                                        <div class="col-span-1 sm:col-span-1">
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">
                                                Ngày tra
                                            </label>
                                            <div class="relative mt-1 ">
                                                <div
                                                    class="flex absolute inset-y-0 left-0 items-center pointer-events-none">
                                                    <span
                                                        class="text-size-sm ease-soft leading-5.6 absolute  flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </span>
                                                </div>
                                                <input :value="inputValue.end" v-on="inputEvents.end"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 rounded-lg w-full pl-10 p-2.5" />
                                            </div>
                                        </div>
                                    </template>
                                </v-date-picker>
                                <!-- Vehicle Brand -->
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">
                                        Hãng xe
                                    </label>
                                    <Combobox v-model="brands.selected">
                                        <div class="relative mt-1">
                                            <div>
                                                <div
                                                    class="flex absolute inset-y-0 left-0 items-center pointer-events-none">
                                                    <span
                                                        class="text-size-sm ease-soft leading-5.6 absolute  flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                                        <i class="fa-solid fa-car"></i>
                                                    </span>
                                                </div>
                                                <ComboboxInput
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 rounded-lg w-full pl-10 p-2.5"
                                                    :displayValue="(brand) => brand.name"
                                                    @change="query = $event.target.value" />
                                                <ComboboxButton
                                                    class="absolute inset-y-0 right-0 flex items-center pr-2">
                                                    <i class="fa-solid fa-caret-down mr-1"></i>
                                                </ComboboxButton>
                                            </div>
                                            <TransitionRoot leave="transition ease-in duration-100"
                                                leaveFrom="opacity-100" leaveTo="opacity-0" @after-leave="query = ''">
                                                <ComboboxOptions
                                                    class="absolute mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-2 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                                                    <div v-if="brands.filteredBrand.length === 0 && query !== ''"
                                                        class="relative cursor-default select-none py-2 px-4 text-gray-700">
                                                        Nothing found.
                                                    </div>

                                                    <ComboboxOption v-for="brand in brands.filteredBrand" as="template"
                                                        :key="brand.id" :value="brand" v-slot="{ selected, active }">
                                                        <li class="relative cursor-default select-none py-2 pl-10 pr-4"
                                                            :class="{
                                                                'bg-indigo-600 text-white': active,
                                                                'text-gray-900': !active,
                                                            }">
                                                            <span class="block truncate"
                                                                :class="{ 'font-medium': selected, 'font-normal': !selected }">
                                                                {{ brand.name }}
                                                            </span>
                                                            <span v-if="selected"
                                                                class="absolute inset-y-0 left-0 flex items-center pl-3"
                                                                :class="{ 'text-white': active, 'text-teal-600': !active }">
                                                                <!-- <CheckIcon class="h-5 w-5" aria-hidden="true" /> -->
                                                            </span>
                                                        </li>
                                                    </ComboboxOption>
                                                </ComboboxOptions>
                                            </TransitionRoot>
                                        </div>
                                    </Combobox>
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
                                                class="text-size-sm ease-soft leading-5.6 absolute flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
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
    <div class="fixed top-16 w-72">
    </div>
</template>
<script>
import Banner from '@/components/Banner.vue';
import { ref, computed } from 'vue';
import {
    Combobox,
    ComboboxInput,
    ComboboxButton,
    ComboboxOptions,
    ComboboxOption,
    TransitionRoot,
} from '@headlessui/vue';
import { brandStore } from '@/stores/brandStore';
export default {
    async setup() {
        let query = ref('');
        // 
        const useBrandStore = brandStore();
        let brands = await useBrandStore.getAllBrands.then((listBrands) => {
            let selected = ref(listBrands[0]);
            let filteredBrand = computed(() =>
                query.value === ''
                    ? listBrands
                    : listBrands.filter((brand) =>
                        brand.name
                            .toLowerCase()
                            .replace(/\s+/g, '')
                            .includes(query.value.toLowerCase().replace(/\s+/g, ''))
                    )
            );
            let brands = ref({
                'filteredBrand': filteredBrand,
                'selected': selected,
            });
            return brands
        });


        console.log(brands, " ++++");
        // Vehicle Brand
        return {
            brands,
            query,
        }
    },
    data() {
        return {
            range: {
                start: new Date(),
                end: new Date(),
            },
        };
    },
    components: {
        Banner,
        Combobox,
        ComboboxInput,
        ComboboxButton,
        ComboboxOptions,
        ComboboxOption,
        TransitionRoot,
    },
};
</script>
<style scoped>
/* @import url('@/assets/styles/soft-ui-pro.css'); */
</style>
