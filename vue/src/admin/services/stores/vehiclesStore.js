import { baseAxios } from "@/utils/axiosUtil.js";
import { defineStore } from "pinia";
import { useAuthStore } from "@/admin/services/stores/authStore.js";

const auth = useAuthStore();

export const useVehiclesStore = defineStore("vehiclesStore", {
    state: () => {
        return {
            vehicles: [],
            currentVehicle: null,
            links: null,
            currentPage: 1,
            lastPage: 1,
            prevPage: false,
            nextPage: false,
        };
    },
    getters: {
        vehicle(state) {
            return state.currentVehicle;
        },
    },
    actions: {
        async fetchVehicles(page = this.currentPage) {
            // console.log(page);
            const response = await baseAxios.get(`/vehicles/page`, {
                params: {
                    page,
                },
            });
            console.log(response);
            const data = response.data;
            this.vehicles = data.data;
            this.lastPage = data.last_page;
            this.links = data.links;
            this.prevPage = !!data.prev_page_url;
            this.nextPage = !!data.next_page_url;
        },
        async fetchVehicle(id = null) {
            // console.log(id)
            const response = await baseAxios.get(`/vehicles`, {
                params: {
                    id,
                },
            });
            const data = response.data;
            // console.log(data);
            this.currentVehicle = data;
        },
        async store(vehicle) {
            const data = Object.assign(vehicle, vehicle.location);
            // console.log(vehicle);
            const response = await baseAxios.post(`/vehicles/store`, 
            data, {
                headers: {
                    Authorization: `Bearer ${auth.token}`,
                },
            });
            // console.log(response);
            return response;
        },
        async update(vehicle) {
            const id = vehicle.id;
            delete(vehicle.location.id);
            console.log(vehicle, id);
            const data = Object.assign(vehicle, vehicle.location);
            console.log(vehicle, id);
            const response = await baseAxios.put(`/vehicles/update/${id}`, 
                data, {
                    headers: {
                        Authorization: `Bearer ${auth.token}`,
                    },
                });
            // console.log(response);
            return response;
        },
        async destroy(id) {
            // console.log(id);
            const response = await baseAxios.delete(`/vehicles/destroy/${id}`, 
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
            await this.fetchVehicles(page);
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
