<template>
    <div>
        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0"
        >
            <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 text-xl font-bold">
                        Create Station
                    </h6>
                    <div>
                        <button
                            class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                            type="submit"
                            form="form"
                        >
                            <svg
                                v-if="loading"
                                role="status"
                                class="inline mr-2 w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-green-500"
                                viewBox="0 0 100 101"
                                fill="none"
                            >
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor"
                                />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill"
                                />
                            </svg>
                            Create
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0 mt-3">
                <form id="form" @submit.prevent="storeStationHandler">
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
                                <div
                                    v-if="v$.stationModel.name.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.stationModel.name.$errors[0].$message
                                    }}
                                </div>
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
                                <div
                                    v-if="v$.stationModel.capacity.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.stationModel.capacity.$errors[0]
                                            .$message
                                    }}
                                </div>
                            </div>
                        </div>
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
                                <v-select
                                    :options="optionsStore.cities"
                                    :reduce="city => city.id"
                                    label="name"
                                    v-model="stationModel.location.city_id"
                                    @option:selected="cityInputHandler"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                ></v-select>
                                <div
                                    v-if="
                                        v$.stationModel.location.city_id.$error
                                    "
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.stationModel.location.city_id
                                            .$errors[0].$message
                                    }}
                                </div>
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
                                <v-select
                                    :options="optionsStore.districts"
                                    :reduce="district => district.id"
                                    label="name"
                                    v-model="stationModel.location.district_id"
                                    @option:selected="districtInputHandler"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                ></v-select>
                                <div
                                    v-if="
                                        v$.stationModel.location.district_id
                                            .$error
                                    "
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.stationModel.location.district_id
                                            .$errors[0].$message
                                    }}
                                </div>
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
                                <v-select
                                    :options="optionsStore.subdistricts"
                                    :reduce="subdistrict => subdistrict.id"
                                    label="name"
                                    v-model="stationModel.location.subdistrict_id"
                                    @option:selected="subdistrictInputHandler"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                ></v-select>
                                <div
                                    v-if="
                                        v$.stationModel.location.subdistrict_id
                                            .$error
                                    "
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.stationModel.location.subdistrict_id
                                            .$errors[0].$message
                                    }}
                                </div>
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
                                    v-model="stationModel.location.address"
                                />
                                <div
                                    v-if="
                                        v$.stationModel.location.address.$error
                                    "
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.stationModel.location.address
                                            .$errors[0].$message
                                    }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-6 border-b-1 border-blueGray-300" />

                    <h6
                        class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"
                    >
                        Contact Information
                    </h6>
                    <div class="flex flex-wrap">
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
                                    v-model="stationModel.phone"
                                />
                                <div
                                    v-if="v$.stationModel.phone.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.stationModel.phone.$errors[0]
                                            .$message
                                    }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <button
                        class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 float-right"
                        type="submit"
                    >
                        <svg
                            v-if="loading"
                            role="status"
                            class="inline mr-2 w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-green-500"
                            viewBox="0 0 100 101"
                            fill="none"
                        >
                            <path
                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                fill="currentColor"
                            />
                            <path
                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                fill="currentFill"
                            />
                        </svg>
                        Create
                    </button> -->
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { useRouter, useRoute } from "vue-router";
import { useToast } from "vue-toastification";
import useVuelidate from "@vuelidate/core";
import { required, email, minLength, maxLength, minValue, maxValue } from "@vuelidate/validators";

import { useStationsStore } from "@/admin/services/stores/stationsStore.js";
import { useOptionsStore } from "@/admin/services/stores/optionsStore.js";

export default {
    setup() {
        return {
            router: useRouter(),
            route: useRoute(),
            stationsStore: useStationsStore(),
            optionsStore: useOptionsStore(),
            toast: useToast(),
            v$: useVuelidate(),
        };
    },
    mounted() {
        this.optionsStore.getCities();
        // optionsStore.getDistricts();
        // optionsStore.getSubdistricts();
    },
    data() {
        return {
            stationModel: {
                name: null,
                location: {
                    city_id: null,
                    district_id: null,
                    subdistrict_id: null,
                    address: null,
                },
                phone: null,
                capacity: null,
            },
            loading: false,
            errors: [],
        };
    },
    validations() {
        return {
            stationModel: {
                name: {
                    required,
                    maxLength: maxLength(50),
                },
                location: {
                    city_id: { required },
                    district_id: { required },
                    subdistrict_id: { required },
                    address: {
                        required,
                        maxLength: maxLength(255),
                    },
                },
                phone: {
                    required,
                    minLength: minLength(9),
                    maxLength: maxLength(15),
                },
                capacity: {
                    required,
                    minValue: minValue(0),
                    maxValue: maxValue(500),
                },
            },
        };
    },
    methods: {
        async storeStationHandler() {
            this.loading = true;

            await this.v$.$validate();

            if (this.v$.$error) {
                this.loading = false;
                return;
            }

            await this.stationsStore
                .store(this.stationModel)
                .then((response) => console.log(response))
                .then((response) =>
                    this.router.push({ name: "Admin.Stations" })
                )
                .catch((error) => {
                    console.log(error);
                    this.toast.error(error.message);
                });
            this.loading = false;
        },
        cityInputHandler() {
            this.stationModel.location.district_id = null;
            this.stationModel.location.subdistrict_id = null;
            this.optionsStore.getDistricts(this.stationModel.location.city_id);
        },
        districtInputHandler() {
            this.stationModel.location.subdistrict_id = null;
            this.optionsStore.getSubdistricts(
                this.stationModel.location.district_id
            );
        },
        subdistrictInputHandler() {},
    },
};
</script>
