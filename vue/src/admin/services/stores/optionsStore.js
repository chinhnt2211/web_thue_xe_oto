import { defineStore } from "pinia";
import { baseAxios } from "@/utils/axiosUtil.js";

export const useOptionsStore = defineStore("optionsStore", {
    state: () => {
        return {
            genders: [],
            brands: [],
            seatingCapacities: [],
            vehicleStatuses: [],
            cities: [],
            districts: [],
            subdistricts: [],
            availableEnums: [
                'genders',
                'vehicle-statuses',
                'admin-statuses',
                'admin-roles',
            ],
            availableOthers: [
                'brands',
                'seating-capacities',
            ],
        };
    },
    getters: {},
    actions: {
        getOptions(arr = []) {
            for(var option of arr) {
                if(this.availableEnums.includes(option)) {
                    this.getEnum(option);
                    continue;
                }
                if(this.availableOthers.includes(option)) {
                    // console.log(option)
                    this.getOption(option);
                    continue;
                }
            }
        },
        async getEnum(option = null) {
            // console.log('getEnum', option);
            const response = await baseAxios.get(`/options/${option}`);
            let data = response.data;
            this[camelize(option)] = [];
            for(var key in data) {
                this[camelize(option)].push({
                    label: key,
                    code: data[key],
                })
            }
            // console.log(this[camelize(option)]);
        },
        async getOption(option = null) {
            // console.log('getOption', option);
            const response = await baseAxios.get(`/options/${option}`);
            let data = response.data;
            this[camelize(option)] = data;
            // console.log(this[camelize(option)]);
        },
        async getCities() {
            const response = await baseAxios.get("/options/cities");
            this.cities = response.data;
            // console.log(response);
        },
        async getDistricts(cityId = null) {
            // console.log(cityId);
            const response = await baseAxios.get("/options/districts", {
                params: {
                    cityId,
                },
            });
            this.districts = response.data;
            // console.log(response);
        },
        async getSubdistricts(districtId = null) {
            const response = await baseAxios.get("/options/subdistricts", {
                params: {
                    districtId,
                },
            });
            this.subdistricts = response.data;
            // console.log(response);
        },
    },
});

function camelize(s){ return s.replace(/-./g, x=>x[1].toUpperCase())};