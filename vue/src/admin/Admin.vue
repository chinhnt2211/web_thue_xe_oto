<template>
    <div id="admin" v-on:click="test">
        <sidebar />
        <div class="relative md:ml-64 bg-blueGray-100">
            <admin-navbar />
            <div class="px-4 md:px-10 mx-auto w-full pt-24">
                <router-view />
                <footer-admin />
            </div>
        </div>
        <toast/>
    </div>
</template>

<script>
import AdminNavbar from "@/admin/components/Navbars/AdminNavbar.vue";
import Sidebar from "@/admin/components/Sidebar/Sidebar.vue";
import FooterAdmin from "@/admin/components/Footers/FooterAdmin.vue";

import { useRouter, useRoute } from "vue-router";
import { useToast } from "vue-toastification";

import { useAuthStore } from "@/admin/services/stores/authStore.js";

export default {
    beforeRouteEnter(to, from, next) {
        const auth = useAuthStore();

        if (!auth.token) {
            next({ name: "Admin.Login" });
        }

        auth.getMe()
            .then((response) => {
                if (!auth.admin) {
                    next({ name: "Admin.Login" });
                }
                // console.log(auth.admin)
                next();
            })
            .catch((error) => {
                console.log(error);
                next({ name: "Admin.Login" })
            });
    },
    setup() {
        const router = useRouter();
        const route = useRoute();
        const auth = useAuthStore();
        const toast = useToast();

        return {
            router,
            route,
            auth,
            toast,
        };
    },
    data() {
        return {
            errors: [],
        };
    },
    components: {
        AdminNavbar,
        Sidebar,
        FooterAdmin,
    },
    methods: {},
};
</script>

<style>
@import "@fortawesome/fontawesome-free/css/all.min.css";
@import "@/admin/assets/styles/tailwind.css";
</style>
