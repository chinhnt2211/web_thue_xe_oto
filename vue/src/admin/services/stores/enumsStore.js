import { defineStore } from "pinia";
import { baseAxios } from "@/utils/axiosUtil.js";

export const useEnumsStore = defineStore("enumsStore", {
    state: () => {
        return {
            cities: [],
            districts: [],
            subdistricts: [],
        };
    },
    getters: {},
    actions: {
        async getCities() {
            const response = await baseAxios.get("/enum/cities");
            this.cities = response.data;
            // console.log(response);
        },
        async getDistricts(cityId = null) {
            // console.log(cityId);
            const response = await baseAxios.get("/enum/districts", {
                params: {
                    cityId,
                },
            });
            this.districts = response.data;
            // console.log(response);
        },
        async getSubdistricts(districtId = null) {
            const response = await baseAxios.get("/enum/subdistricts", {
                params: {
                    districtId,
                },
            });
            this.subdistricts = response.data;
            // console.log(response);
        },
    },
});
