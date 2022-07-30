import { baseAxios } from "@/utils/axiosUtil.js";
import { defineStore } from "pinia";
import { useAuthStore } from "@/admin/services/stores/authStore.js";

const auth = useAuthStore();

export const useStationsStore = defineStore("stationsStore", {
    state: () => {
        return {
            stations: [],
            allStations: [],
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
        async fetchStation(id = null) {
            // console.log(id)
            const response = await baseAxios.get(`/stations`, {
                params: {
                    id,
                },
            });
            const data = response.data;
            // console.log(data);
            this.currentStation = data;
        },
        async fetchStations(page = this.currentPage) {
            // console.log(page);
            const response = await baseAxios.get(`/stations/page`, {
                params: {
                    page,
                },
            });
            // console.log(response);
            const data = response.data;
            this.stations = data.data;
            this.lastPage = data.last_page;
            this.links = data.links;
            this.prevPage = !!data.prev_page_url;
            this.nextPage = !!data.next_page_url;
        },
        async fetchAllStations() {
            const response = await baseAxios.get(`/stations/all`, {});
            // console.log(response);
            const data = response.data;
            this.allStations = data;
            // console.log(data)
            // console.log(this.allStations)
        },
        async store(station) {
            const data = Object.assign(station, station.location);
            // console.log(station);
            const response = await baseAxios.post(`/stations/store`, data, {
                headers: {
                    Authorization: `Bearer ${auth.token}`,
                },
            });
            // console.log(response);
            return response;
        },
        async update(station) {
            const id = station.id;
            delete station.location.id;
            console.log(station, id);
            const data = Object.assign(station, station.location);
            console.log(station, id);
            const response = await baseAxios.put(
                `/stations/update/${id}`,
                data,
                {
                    headers: {
                        Authorization: `Bearer ${auth.token}`,
                    },
                }
            );
            // console.log(response);
            return response;
        },
        async destroy(id) {
            // console.log(id);
            const response = await baseAxios.delete(`/stations/destroy/${id}`, {
                headers: {
                    Authorization: `Bearer ${auth.token}`,
                },
            });
            // console.log(response);
            return response;
        },
        async changePage(page) {
            if (page < 1 || page > this.lastPage) {
                return;
            }
            await this.fetchStations(page);
            this.currentPage = page;
        },
        toNextPage() {
            if (this.currentPage < this.lastPage) {
                this.changePage(this.currentPage + 1);
            }
        },
        toPrevPage() {
            if (this.currentPage > 1) {
                this.changePage(this.currentPage - 1);
            }
        },
    },
});
