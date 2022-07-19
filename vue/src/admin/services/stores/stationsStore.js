import { baseAxios } from "@/utils/axiosUtil.js";
import { defineStore } from "pinia";
import { useAuthStore } from "@/admin/services/stores/authStore.js";

const auth = useAuthStore();

export const useStationsStore = defineStore("stationsStore", {
    state: () => {
        return {
            stations: [],
            currentStation: null,
            links: null,
            currentPage: 1,
            lastPage: 1,
            prevPage: false,
            nextPage: false,
        };
    },
    getters: {
        station(state) {
            return state.currentStation;
        },
    },
    actions: {
        async fetchStations(page = 1) {
            // console.log(page);
            const response = await baseAxios.get(`/stations/get`, {
                params: {
                    page,
                },
            });
            console.log(response);
            const data = response.data;
            this.stations = data.data;
            this.lastPage = data.last_page;
            this.links = data.links;
            this.prevPage = !!data.prev_page_url;
            this.nextPage = !!data.next_page_url;
        },
        async fetchStation(id = null) {
            // console.log(id)
            const response = await baseAxios.get(`/stations/get`, {
                params: {
                    id,
                },
            });
            const data = response.data;
            // console.log(data);
            this.currentStation = data;
        },
        async store(station) {
            delete(station.location.id)
            station = Object.assign(station, station.location);
            // console.log(station);
            const response = await baseAxios.post(`/stations/store`, 
            station, {
                headers: {
                    Authorization: `Bearer ${auth.token}`,
                },
            });
            // console.log(response);
            return response;
        },
        async update(station) {
            delete(station.location.id)
            station = Object.assign(station, station.location);
            console.log(station);
            const response = await baseAxios.put(`/stations/update/${station.id}`, 
            station, {
                headers: {
                    Authorization: `Bearer ${auth.token}`,
                },
            });
            console.log(response);
            return response;
        },
        async destroy(id) {
            console.log(id);
            const response = await baseAxios.delete(`/stations/destroy/${id}`, 
            {
                headers: {
                    Authorization: `Bearer ${auth.token}`,
                },
            });
            // console.log(response);
            return response;
        },
        async changePage(page) {
            if(page < 1 || page > this.lastPage) {
                return;
            }
            await this.fetchStations(page);
            this.currentPage = page;
        },
        toNextPage() {
            if(this.currentPage < this.lastPage) {
                this.changePage(this.currentPage+1);
            }
        },
        toPrevPage() {
            if(this.currentPage > 1) {
                this.changePage(this.currentPage-1);
            }
        },
    },
});
