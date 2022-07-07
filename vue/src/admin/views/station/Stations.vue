<template>
    <div id="stations">
        <table class="w-full">
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
                <tr v-for="station in stations" :key="station.id">
                    <td>{{ station.id }}</td>
                    <td>{{ station.name }}</td>
                    <td>{{ station.address }}</td>
                    <td>{{ station["phone_number"] }}</td>
                    <td>{{ station.capacity }}</td>
                    <td>
                        <button
                            class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button"
                            v-on:click="$router.push(`/admin/stations/${station.id}`)"
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
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            stations: [],
        };
    },
    mounted() {
        this.getStations()
    },
    methods: {
        getStations() {
            fetch(`http://localhost:8000/api/stations`)
            .then((res) => res.json())
            .then((data) => (this.stations = data))
            .catch((err) => console.log(err));
        },
        destroyStation(id) {
            fetch(`http://localhost:8000/api/stations/${id}`, {
                method: 'DELETE',
            })
                .then(res => console.log(res))
                .catch(err => console.log(err))
        }
    }
};
</script>
