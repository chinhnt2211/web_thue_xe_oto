<template>
    <div>
        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0"
        >
            <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                    <h6 v-once class="text-blueGray-700 text-xl font-bold">
                        Station {{ station.name }} - ID {{ station.id }}
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
                            Update
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0 mt-3">
                <form id="form" @submit.prevent="updateVehicleHandler">
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
                                    v-model="vehicleModel.name"
                                />
                                <div
                                    v-if="v$.vehicleModel.name.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.vehicleModel.name.$errors[0].$message
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
                                    Brand
                                </label>
                                <v-select
                                    taggable
                                    :options="optionsStore.brands"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="vehicleModel.brand"
                                ></v-select>
                                <div
                                    v-if="v$.vehicleModel.brand.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.vehicleModel.brand.$errors[0]
                                            .$message
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
                                    Status
                                </label>
                                <v-select
                                    :options="optionsStore.vehicleStatuses"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                ></v-select>
                                <div
                                    v-if="v$.vehicleModel.status.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.vehicleModel.status.$errors[0]
                                            .$message
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
                                    License
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="vehicleModel.license_number"
                                />
                                <div
                                    v-if="v$.vehicleModel.license_number.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.vehicleModel.license_number
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
                                    Description
                                </label>
                                <textarea
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="vehicleModel.description"
                                ></textarea>
                                <div
                                    v-if="v$.vehicleModel.description.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.vehicleModel.description.$errors[0]
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
                        Others
                    </h6>
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    Seating Capacity
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="vehicleModel.seating_capacity"
                                />
                                <div
                                    v-if="
                                        v$.vehicleModel.seating_capacity.$error
                                    "
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.vehicleModel.seating_capacity
                                            .$errors[0].$message
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
                                    Station
                                </label>
                                <v-select
                                    :options="stationsStore.allStations"
                                    :reduce="station => station.id" 
                                    label="name"
                                    v-model="vehicleModel.station_id"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                ></v-select>
                                <div
                                    v-if="v$.vehicleModel.station_id.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.vehicleModel.station_id.$errors[0]
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
                        Price
                    </h6>
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    Price
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="vehicleModel.price"
                                />
                                <div
                                    v-if="v$.vehicleModel.price.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.vehicleModel.price.$errors[0]
                                            .$message
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
                                    Rent Price
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="vehicleModel.rent_price"
                                />
                                <div
                                    v-if="v$.vehicleModel.rent_price.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.vehicleModel.rent_price.$errors[0]
                                            .$message
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
                                    Fine
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="vehicleModel.fine"
                                />
                                <div
                                    v-if="v$.vehicleModel.fine.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.vehicleModel.fine.$errors[0].$message
                                    }}
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
import { useRouter, useRoute } from "vue-router";
import { useToast } from "vue-toastification";
import useVuelidate from "@vuelidate/core";
import {
    required,
    email,
    minLength,
    maxLength,
    minValue,
    maxValue,
} from "@vuelidate/validators";

import { useStationsStore } from "@/admin/services/stores/stationsStore.js";
import { useOptionsStore } from "@/admin/services/stores/optionsStore.js";

export default {
    beforeRouteEnter(to, from, next) {
        const stationsStore = useStationsStore();
        // console.log(route.params.id)
        stationsStore.fetchStation(to.params.id).then(() => next());
    },
    setup() {
        return {
            router: useRouter(),
            route: useRoute(),
            stationsStore: useStationsStore(),
            optionsStore: useOptionsStore(),
            v$: useVuelidate(),
            toast: useToast(),
        };
    },
    mounted() {
        this.optionsStore.getCities();
        this.optionsStore.getDistricts(
            this.stationsStore.station.location.city_id
        );
        this.optionsStore.getSubdistricts(
            this.stationsStore.station.location.district_id
        );
    },
    data() {
        var station = Object.assign({}, this.stationsStore.station);
        var stationModel = this.stationsStore.station;

        return {
            station,
            stationModel,
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
    created() {
        // console.log(this.stationModel.location.city)
    },
    methods: {
        async updateStationHandler() {
            this.loading = true;

            await this.v$.$validate();

            if (this.v$.$error) {
                this.loading = false;
                return;
            }

            await this.stationsStore
                .update(this.stationModel)
                // .then((response) => console.log(response))
                .then((response) =>
                    this.router.push({
                        name: "Admin.Stations.Show",
                        params: { id: this.stationModel.id },
                    })
                )
                .catch((error) => {
                    console.log(error)
                    this.toast.error('Something wrong happened');
                });
            this.loading = false;
        },
        cityChangeHandler() {
            this.stationModel.location.district_id = null;
            this.stationModel.location.subdistrict_id = null;
            this.optionsStore.getDistricts(this.stationModel.location.city_id);
        },
        districtChangeHandler() {
            this.stationModel.location.subdistrict_id = null;
            this.optionsStore.getSubdistricts(
                this.stationModel.location.district_id
            );
        },
        subdistrictChangeHandler() {},
    },
};
</script>
