import { createRouter, createWebHistory } from "vue-router";
import { userAuthStore } from "@/stores/userAuthStore.js";

const routes = [
    {
        path: "/admin/login",
        name: "Admin.Login",
        component: () => import("@/admin/Auth.vue"),
    },
    {
        path: "/admin",
        name: "Admin",
        redirect: "/admin/dashboard",
        component: () => import("@/admin/Admin.vue"),
        children: [
            {
                path: "/admin/dashboard",
                name: "Admin.Dashboard",
                component: () => import("@/admin/views/Dashboard.vue"),
            },
            {
                path: "/admin/stations",
                name: "Admin.Stations",
                redirect: "/admin/stations/index",
                component: () => import("@/admin/views/station/Stations.vue"),
                children: [
                    {
                        path: "/admin/stations/index",
                        name: "Admin.Stations.Index",
                        component: () => import("@/admin/components/Stations/Index.vue"),
                    },
                    {
                        path: "/admin/stations/:id",
                        name: "Admin.Stations.Update",
                        component: () => import("@/admin/components/Stations/Update.vue"),
                    },
                    {
                        path: "/admin/stations/create",
                        name: "Admin.Stations.Create",
                        component: () => import("@/admin/components/Stations/Create.vue"),
                    },
                ]
            },
            {
                path: "/admin/staffs",
                name: "StaffsAdmin.",
                component: () => import("@/admin/views/staff/Staffs.vue"),
            },
            {
                path: "/admin/users",
                name: "UsersAdmin.",
                component: () => import("@/admin/views/user/Users.vue"),
            },
            {
                path: "vehicles",
                name: "Vehicles",
                component: () => import("@/admin/views/vehicle/Vehicles.vue"),
            },
        ],
    },

    // -------------------------- User Routes --------------------------------
    {
        path: "/",
        // component: () => import('@/layouts/Default.vue'),
        meta: {
            requiresAuth: true
        },
    },
    {
        path: "/auth",
        name: "Auth",
        redirect: "/auth/login",
        component: () => import("@/layouts/user/Auth.vue"),
        children: [
            {
                path: "/auth/login",
                name: "SignIn",
                component: () => import("@/views/user/SignIn.vue"),
            },
            {
                path: "/auth/register",
                name: "SignUp",
                component: () => import("@/views/user/SignUp.vue"),
            },
        ],
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

// Kiem tra user 
router.beforeEach((to, from) => {
    const userStore = userAuthStore();
    // instead of having to check every route record with
    // to.matched.some(record => record.meta.requiresAuth)
    if (to.meta.requiresAuth && !userStore.isLoggedIn) {
        // this route requires auth, check if logged in
        // if not, redirect to login page.
        userStore.returnUrl = to.fullPath;
        return {
            name: 'SignIn',
            // save the location we were at to come back later
        }
    }
})

export default router;
