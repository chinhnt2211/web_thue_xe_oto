<template>
    <div>
        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0"
        >
            <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                    <h6 v-once class="text-blueGray-700 text-xl font-bold">
                        Staff {{ staff.first_name }} - ID {{ staff.id }}
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
                <form id="form" @submit.prevent="updateStaffHandler">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4">
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
                                    v-model="staffModel.first_name"
                                />
                                <div
                                    v-if="v$.staffModel.first_name.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.first_name.$errors[0]
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
                                    Last Name
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="staffModel.last_name"
                                />
                                <div
                                    v-if="v$.staffModel.last_name.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.last_name.$errors[0]
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
                                    Birthday
                                </label>
                                <input
                                    type="date"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="staffModel.dob"
                                />
                                <div
                                    v-if="v$.staffModel.dob.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{ v$.staffModel.dob.$errors[0].$message }}
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    Gender
                                </label>
                                <v-select
                                    :options="optionsStore.genders"
                                    :reduce="gender => gender.code"
                                    v-model="staffModel.gender"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                ></v-select>
                                <div
                                    v-if="v$.staffModel.gender.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.gender.$errors[0].$message
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
                                    Avatar
                                </label>
                                <input
                                    type="file"
                                    ref="avatar"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    @change="imageFileChanged('avatar')"
                                />
                                <div
                                    v-if="v$.staffModel.avatar.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.avatar.$errors[0].$message
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
                                    v-model="staffModel.location.city_id"
                                    @option:selected="cityInputHandler"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                ></v-select>
                                <div
                                    v-if="
                                        v$.staffModel.location.city_id.$error
                                    "
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.location.city_id
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
                                    v-model="staffModel.location.district_id"
                                    @option:selected="districtInputHandler"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                ></v-select>
                                <div
                                    v-if="
                                        v$.staffModel.location.district_id
                                            .$error
                                    "
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.location.district_id
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
                                    v-model="staffModel.location.subdistrict_id"
                                    @option:selected="subdistrictInputHandler"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                ></v-select>
                                <div
                                    v-if="
                                        v$.staffModel.location.subdistrict_id
                                            .$error
                                    "
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.location.subdistrict_id
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
                                    v-model="staffModel.location.address"
                                />
                                <div
                                    v-if="
                                        v$.staffModel.location.address.$error
                                    "
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.location.address
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
                                    Email
                                </label>
                                <input
                                    type="email"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="staffModel.email"
                                />
                                <div
                                    v-if="v$.staffModel.email.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.email.$errors[0].$message
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
                                    Phone
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="staffModel.phone"
                                />
                                <div
                                    v-if="v$.staffModel.phone.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.phone.$errors[0].$message
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
                                    Role
                                </label>
                                <v-select
                                    :options="optionsStore.adminRoles"
                                    :reduce="role => role.code"
                                    v-model="staffModel.role"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                ></v-select>
                                <div
                                    v-if="v$.staffModel.role.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{ v$.staffModel.role.$errors[0].$message }}
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
                                    :options="optionsStore.adminStatuses"
                                    :reduce="status => status.code"
                                    v-model="staffModel.status"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                ></v-select>
                                <div
                                    v-if="v$.staffModel.status.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.status.$errors[0].$message
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
                                    v-model="staffModel.station_id"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                ></v-select>
                                <div
                                    v-if="v$.staffModel.station_id.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.station_id.$errors[0]
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
                                    Password
                                </label>
                                <input
                                    type="password"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="staffModel.password"
                                />
                                <div
                                    v-if="v$.staffModel.password.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.password.$errors[0]
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
                        CIC infos
                    </h6>
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-12/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                    class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlFor="grid-password"
                                >
                                    CIC Number
                                </label>
                                <input
                                    type="text"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    v-model="staffModel.cic_number"
                                />
                                <div
                                    v-if="v$.staffModel.cic_number.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.cic_number.$errors[0]
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
                                    CIC Front
                                </label>
                                <input
                                    type="file"
                                    ref="cic_front"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    @change="imageFileChanged('cic_front')"
                                />
                                <div
                                    v-if="v$.staffModel.cic_front.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.cic_front.$errors[0].$message
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
                                    CIC Back
                                </label>
                                <input
                                    type="file"
                                    ref="cic_back"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                    @change="imageFileChanged('cic_back')"
                                />
                                <div
                                    v-if="v$.staffModel.cic_back.$error"
                                    class="text-sm text-red-500"
                                >
                                    {{
                                        v$.staffModel.cic_back.$errors[0].$message
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
    <!-- <button @click="test">test</button> -->
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

import { useStaffsStore } from "@/admin/services/stores/staffsStore.js";
import { useStationsStore } from "@/admin/services/stores/stationsStore.js";
import { useOptionsStore } from "@/admin/services/stores/optionsStore.js";

export default {
    beforeRouteEnter(to, from, next) {
        const staffsStore = useStaffsStore();
        // console.log(route.params.id)
        staffsStore.fetchStaff(to.params.id).then(() => next());
    },
    setup() {
        return {
            router: useRouter(),
            route: useRoute(),
            staffsStore: useStaffsStore(),
            stationsStore: useStationsStore(),
            optionsStore: useOptionsStore(),
            toast: useToast(),
            v$: useVuelidate(),
        };
    },
    mounted() {
        this.optionsStore.getEnums(['genders', 'adminstatuses']);
        this.optionsStore.getCities();
        this.optionsStore.getDistricts(this.staffsStore.staff.location.city_id);
        this.optionsStore.getSubdistricts(
            this.staffsStore.staff.location.district_id
        );
    },
    data() {
        var staff = Object.assign({}, this.staffsStore.staff);
        var staffModel = this.staffsStore.staff;

        return {
            staff,
            staffModel,
            loading: false,
            errors: [],
        };
    },
    validations() {
        return {
            staffModel: {
                first_name: {
                    required,
                    maxLength: maxLength(50),
                },
                last_name: {
                    required,
                    maxLength: maxLength(50),
                },
                dob: {
                    required,
                },
                gender: {
                    required,
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
                email: {
                    required,
                    email,
                },
                role: {
                    required,
                },
                status: {
                    required,
                },
                station_id: {
                    required,
                },
                password: {
                    // required,
                },
                cic_number: {
                    required,
                    minLength: minLength(9),
                    maxLength: maxLength(12),
                },
                avatar: {},
                cic_front: {},
                cic_back: {},
            },
        };
    },
    methods: {
        async updateStaffHandler() {
            this.loading = true;

            await this.v$.$validate();

            if (this.v$.$error) {
                this.loading = false;
                return;
            }

            console.log("store");

            this.staffModel.avatar = this.$refs.avatar.files[0];
            this.staffModel.cic_front = this.$refs.cic_front.files[0];
            this.staffModel.cic_back = this.$refs.cic_back.files[0];

            await this.staffsStore
                .update(this.staffModel)
                .then((response) => console.log(response))
                .then((response) =>
                    this.router.push({
                        name: "Admin.Staff.Show",
                        params: { id: this.staffModel.id },
                    })
                )
                .catch((error) => {
                    console.log(error);
                    this.toast.error(error.message);
                });
            this.loading = false;
        },
        cityChangeHandler() {
            this.staffModel.location.district_id = null;
            this.staffModel.location.subdistrict_id = null;
            this.optionsStore.getDistricts(this.staffModel.location.city_id);
        },
        districtChangeHandler() {
            this.staffModel.location.subdistrict_id = null;
            this.optionsStore.getSubdistricts(
                this.staffModel.location.district_id
            );
        },
        subdistrictChangeHandler() {},
        imageFileChanged(type = null) {
            if (type == null) {
                return;
            }
            this.staffModel[type] = this.$refs[type].files[0];
            console.log();
        },
    },
};
</script>
