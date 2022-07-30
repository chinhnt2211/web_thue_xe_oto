import { defineStore } from "pinia";
import { adminAxios } from "@/utils/axiosUtil.js";

export const useAuthStore = defineStore("Auth", {
    state: () => {
        let token = localStorage.getItem("admin_token");

        return {
            admin: null,
            token,
        };
    },
    getters: {},
    actions: {
        // storeState(admin, token) {
        //     this.admin = admin;
        //     this.token = token;
        // },
        clearState() {
            this.admin = null;
            this.token = null;
        },
        async login(admin) {
            const response = await adminAxios.post("/login", admin);
            // console.log(response);
            this.storeToken(response.data);
            return response;
        },
        async getMe() {
            const response = await adminAxios.get("/me", {
                headers: {
                    Authorization: `Bearer ${this.token}`,
                },
            });
            this.admin = response.data;
            // console.log(response);
        },
        storeToken(token) {
            this.token = token;
            localStorage.setItem("admin_token", token);
        },
        logout() {
            this.clearState();
        },
    },
});
