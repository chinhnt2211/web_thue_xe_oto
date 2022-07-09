import { defineStore } from "pinia";
import { adminAxios } from "@/admin/utils/adminAxios.js";

export const useAuthStore = defineStore("AuthStore", {
    state: () => {
        let api_access_token = localStorage.getItem("admin_api_access_token");

        return {
            admin: null,
            api_access_token,
        };
    },
    getters: {
    },
    actions: {
        // storeState(admin, api_access_token) {
        //     this.admin = admin;
        //     this.api_access_token = api_access_token;
        // },
        clearState() {
            this.admin = null;
            this.api_access_token = null;
        },
        async login(admin) {
            await adminAxios
                .post("admin/login", admin)
                .then((response) => {
                    this.storeApiAccessToken(response.data.api_access_token);
                    // this.admin = response.data.admin;
                    // console.log(this.admin)
                })
                .catch((error) => {
                    this.clearState();
                    console.log(error);
                });
        },
        async getAdmin() {
            await adminAxios
                .get("admin/get", {
                    headers: {
                        Authorization: `Bearer ${this.api_access_token}`,
                    },
                })
                .then((response) => {
                    this.admin = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        storeApiAccessToken(api_access_token) {
            this.api_access_token = api_access_token;
            localStorage.setItem("admin_api_access_token", api_access_token);
        },
    },
});
