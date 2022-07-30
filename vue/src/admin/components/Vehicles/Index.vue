<template>
    <div id="vehicles">
        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white"
        >
            <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                    <div
                        class="relative w-full px-4 max-w-full flex-grow flex-1"
                    >
                        <h3 class="font-semibold text-lg text-blueGray-700">
                            {{ title }}
                        </h3>
                    </div>
                    <button
                        class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                        type="button"
                        v-on:click="
                            this.$router.push({ name: 'Admin.Vehicles.Create' })
                        "
                    >
                        Create
                    </button>
                </div>
            </div>
            <div class="block w-full overflow-x-auto">
                <table
                    class="items-center w-full bg-transparent border-collapse"
                >
                    <thead>
                        <tr>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-emerald-600 text-white border-emerald-100"
                            >
                                ID
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-emerald-600 text-white border-emerald-100"
                            >
                                Name
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-emerald-600 text-white border-emerald-100"
                            >
                                License
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-emerald-600 text-white border-emerald-100"
                            >
                                Brand
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-emerald-600 text-white border-emerald-100"
                            >
                                Station
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-emerald-600 text-white border-emerald-100"
                            >
                                Status
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-emerald-600 text-white border-emerald-100"
                            >
                                Price
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-emerald-600 text-white border-emerald-100"
                            >
                                Rent Price
                            </th>
                        </tr>
                    </thead>
                    <tbody v-if="!loading">
                        <tr
                            v-for="vehicle in vehiclesStore.vehicles"
                            @click="
                                this.$router.push({
                                    name: 'Admin.Vehicles.Show',
                                    params: { id: vehicle.id },
                                })
                            "
                            class="hover:bg-emerald-50 hover:cursor-pointer"
                        >
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ vehicle.id }}
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ vehicle.name }}
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ vehicle.license_number }}
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ vehicle.brand.name }}
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ vehicle.station.name }}
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ vehicle.status }}
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ vehicle.price }}
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ vehicle.rent_price }}
                            </td>
                        </tr>
                    </tbody>
                    <tbody v-if="loading">
                        <tr>
                            <td colspan="100%">
                                <div class="flex justify-center py-10">
                                    <svg
                                        aria-hidden="true"
                                        class="mr-2 w-20 h-20 text-gray-200 animate-spin dark:text-gray-600 fill-emerald-600"
                                        viewBox="0 0 100 101"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
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
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <nav aria-label="Page navigation">
                    <ul
                        class="inline-flex items-center -space-x-px float-right p-3 text-sm"
                    >
                        <li>
                            <a
                                class="block py-2 px-3 ml-0 leading-tight text-emerald-500 bg-white rounded-l-lg border border-emerald-300"
                                :class="
                                    vehiclesStore.prevPage
                                        ? 'hover:bg-emerald-100 hover:text-emerald-700'
                                        : ''
                                "
                                @click="vehiclesStore.toPrevPage"
                            >
                                <span class="sr-only">Previous</span>
                                <svg
                                    class="w-5 h-5"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </a>
                        </li>
                        <li v-for="link in vehiclesStore.links">
                            <a
                                v-if="!link.label.includes('&')"
                                class="py-2 px-3 leading-tight border border-emerald-300 hover:bg-emerald-100 hover:text-emerald-700"
                                :class="
                                    link.label == vehiclesStore.currentPage
                                        ? 'bg-emerald-700 text-white'
                                        : 'bg-white text-emerald-500'
                                "
                                @click="changePageHandler(link.label)"
                                >{{ link.label }}</a
                            >
                        </li>
                        <li>
                            <a
                                class="block py-2 px-3 leading-tight text-emerald-500 bg-white rounded-r-lg border border-emerald-300"
                                :class="
                                    vehiclesStore.nextPage
                                        ? 'hover:bg-emerald-100 hover:text-emerald-700'
                                        : ''
                                "
                                @click="vehiclesStore.toNextPage"
                            >
                                <span class="sr-only">Next</span>
                                <svg
                                    class="w-5 h-5"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
import { useRouter, useRoute } from "vue-router";
import { useToast } from "vue-toastification";

import { useVehiclesStore } from "@/admin/services/stores/vehiclesStore.js";

export default {
    setup() {
        return {
            router: useRouter(),
            route: useRoute(),
            vehiclesStore: useVehiclesStore(),
            toast: useToast(),
        };
    },
    mounted() {
        this.vehiclesStore.fetchVehicles();
    },
    data() {
        return {
            title: "Vehicles",
            loading: false,
        };
    },
    components: {},
    methods: {
        async changePageHandler(id) {
            this.loading = true;
            try {
                await this.vehiclesStore.changePage(id);
            } catch (error) {
                this.toast.error("Something wrong happened");
            }
            this.loading = false;
        },
    },
};
</script>
