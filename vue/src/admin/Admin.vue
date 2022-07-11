<template>
    <div id="admin" v-on:click="test">
        <sidebar />
        <div class="relative md:ml-64 bg-blueGray-100">
            <admin-navbar />
            <!-- <header-stats /> -->
            <div class="px-4 md:px-10 mx-auto w-full pt-24">
                <router-view />
                <footer-admin />
            </div>
        </div>
    </div>
</template>

<script>
// UI/UX
import AdminNavbar from "@/admin/components/Navbars/AdminNavbar.vue";
import Sidebar from "@/admin/components/Sidebar/Sidebar.vue";
import HeaderStats from "@/admin/components/Headers/HeaderStats.vue";
import FooterAdmin from "@/admin/components/Footers/FooterAdmin.vue";

// router
import { useRouter, useRoute } from "vue-router";

// utils
import { adminAxios } from "@/utils/axiosUtil.js";
import { useAuthStore } from "@/admin/utils/stores/authStore.js";

export default {
    beforeRouteEnter(to, from, next) {
        const authStore = useAuthStore();

        if (!authStore.api_access_token) {
            next({ name: "Admin.Login" });
        }

        authStore
            .getAdmin()
            .then((response) => {
                if (!authStore.admin) {
                    next({ name: "Admin.Login" });
                }
                // console.log(authStore.admin)
                next();
            });
    },
    setup() {
        const router = useRouter();
        const route = useRoute();
        const authStore = useAuthStore();

        return {
            router,
            route,
            authStore,
        };
    },
    data() {
        return {
            err: null,
            admin: null,
        };
    },
    components: {
        AdminNavbar,
        Sidebar,
        HeaderStats,
        FooterAdmin,
    },
    methods: {
    },
};
</script>

<style>
@import "@fortawesome/fontawesome-free/css/all.min.css";
@import "@/admin/assets/styles/tailwind.css";
</style>
