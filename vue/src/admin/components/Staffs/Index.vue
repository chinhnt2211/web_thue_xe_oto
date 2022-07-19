<template>
    <div id="stations">
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
                            this.$router.push({ name: 'Admin.Stations.Create' })
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
                                Address
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-emerald-600 text-white border-emerald-100"
                            >
                                Phone
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-emerald-600 text-white border-emerald-100"
                            >
                                Capacity
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="station in stationsStore.stations"
                            @click="
                                this.$router.push({
                                    name: 'Admin.Stations.Show',
                                    params: { id: station.id },
                                })
                            "
                            class="hover:bg-emerald-50 hover:cursor-pointer"
                        >
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ station.id }}
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ station.name }}
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ station.location?.address }},
                                {{ station.location?.city?.name_with_type }},
                                {{
                                    station.location?.district?.name_with_type
                                }},
                                {{
                                    station.location?.subdistrict
                                        ?.name_with_type
                                }}
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ station.phone }}
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ station.capacity }}
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
                                :class="stationsStore.prevPage ? 'hover:bg-emerald-100 hover:text-emerald-700' : ''"
                                @click="stationsStore.toPrevPage"
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
                        <li v-for="link in stationsStore.links">
                            <a
                                v-if="!link.label.includes('&')"
                                class="py-2 px-3 leading-tight border border-emerald-300 hover:bg-emerald-100 hover:text-emerald-700"
                                :class="link.label == stationsStore.currentPage ? 'bg-emerald-700 text-white' : 'bg-white text-emerald-500'"
                                @click="stationsStore.changePage(link.label)"
                                >{{ link.label }}</a
                            >
                        </li>
                        <li>
                            <a
                                class="block py-2 px-3 leading-tight text-emerald-500 bg-white rounded-r-lg border border-emerald-300"
                                :class="stationsStore.nextPage ? 'hover:bg-emerald-100 hover:text-emerald-700' : ''"
                                @click="stationsStore.toNextPage"
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
// UI/UX

// router
import { useRouter, useRoute } from "vue-router";

// utils
import { useStationsStore } from "@/admin/services/stores/stationsStore.js";

export default {
    setup() {
        const router = useRouter();
        const route = useRoute();
        const stationsStore = useStationsStore();

        stationsStore.fetchStations();

        return {
            router,
            route,
            stationsStore,
        };
    },
    data() {
        return {
            title: "Stations",
        };
    },
    components: {},
    mounted() {
        // console.log(this.route.params)
    },
    methods: {},
};
</script>
