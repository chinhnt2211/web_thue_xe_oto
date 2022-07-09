<template>
    <div id="stations">
        <!-- <table class="w-full">
            <thead class="font-bold">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Address</td>
                    <td>Phone</td>
                    <td>Capacity</td>
                    <td>Settings</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="station in stationsStore.stations" :key="station.id">
                    <td>{{ station.id }}</td>
                    <td>{{ station.name }}</td>
                    <td>{{ station.address }}</td>
                    <td>{{ station["phone_number"] }}</td>
                    <td>{{ station.capacity }}</td>
                    <td>
                        <button
                            class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button"
                            v-on:click="
                                $router.push(`/admin/stations/${station.id}`)
                            "
                        >
                            Update
                        </button>
                        <button
                            class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-500 hover:text-white active:bg-red-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button"
                            v-on:click="destroyStation(station.id)"
                        >
                            Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table> -->
        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded"
            :class="[
                color === 'light' ? 'bg-white' : 'bg-emerald-900 text-white',
            ]"
        >
            <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                    <div
                        class="relative w-full px-4 max-w-full flex-grow flex-1"
                    >
                        <h3
                            class="font-semibold text-lg"
                            :class="[
                                color === 'light'
                                    ? 'text-blueGray-700'
                                    : 'text-white',
                            ]"
                        >
                            {{ title }}
                        </h3>
                    </div>
                    <button
                        class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
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
                <!-- Projects table -->
                <table
                    class="items-center w-full bg-transparent border-collapse"
                >
                    <thead>
                        <tr>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                                :class="[
                                    color === 'light'
                                        ? 'bg-blueGray-50 text-blueGray-500 border-blueGray-100'
                                        : 'bg-emerald-800 text-emerald-300 border-emerald-700',
                                ]"
                            >
                                ID
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                                :class="[
                                    color === 'light'
                                        ? 'bg-blueGray-50 text-blueGray-500 border-blueGray-100'
                                        : 'bg-emerald-800 text-emerald-300 border-emerald-700',
                                ]"
                            >
                                Name
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                                :class="[
                                    color === 'light'
                                        ? 'bg-blueGray-50 text-blueGray-500 border-blueGray-100'
                                        : 'bg-emerald-800 text-emerald-300 border-emerald-700',
                                ]"
                            >
                                Address
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                                :class="[
                                    color === 'light'
                                        ? 'bg-blueGray-50 text-blueGray-500 border-blueGray-100'
                                        : 'bg-emerald-800 text-emerald-300 border-emerald-700',
                                ]"
                            >
                                Phone
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                                :class="[
                                    color === 'light'
                                        ? 'bg-blueGray-50 text-blueGray-500 border-blueGray-100'
                                        : 'bg-emerald-800 text-emerald-300 border-emerald-700',
                                ]"
                            >
                                Capacity
                            </th>
                            <th
                                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                                :class="[
                                    color === 'light'
                                        ? 'bg-blueGray-50 text-blueGray-500 border-blueGray-100'
                                        : 'bg-emerald-800 text-emerald-300 border-emerald-700',
                                ]"
                            >
                                Settings
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="station in stationsStore.stations">
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
                                {{ station.address }}
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ station.phone_number }}
                            </td>
                            <td
                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                                {{ station.capacity }}
                            </td>
                            <td>
                                <button
                                    class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="button"
                                    v-on:click="
                                        this.$router.push({
                                            name: 'Admin.Stations.Update',
                                            params: { id: station.id },
                                        })
                                    "
                                >
                                    Update
                                </button>
                                <button
                                    class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-500 hover:text-white active:bg-red-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="button"
                                >
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
// UI/UX

// utils
import { useStationsStore } from "@/admin/utils/stores/stationsStore.js";

export default {
    setup() {
        const stationsStore = useStationsStore();
        stationsStore.fetchStations();

        return {
            stationsStore,
        };
    },
    data() {
        return {
            title: "Stations",
            color: "light",
        };
    },
    components: {},
    mounted() {
        // console.log(this.stationsStore.stations)
    },
    methods: {},
};
</script>
