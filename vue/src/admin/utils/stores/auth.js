import { defineStore } from "pinia";

export default useAuthStore = defineStore("AuthStore", {
    state: () => {
        return { 
            admin: null,
            api_access_token: null,
        };
    },
    actions: {
        storeState(admin, api_access_token) {
            this.admin = admin;
            this.api_access_token = api_access_token;
        },
        clearState() {
            this.admin = null;
            this.api_access_token = null;
        },
        admin() {
            return this.admin;
        },
        api_access_token() {
            return this.api_access_token;
        },
    },
});
