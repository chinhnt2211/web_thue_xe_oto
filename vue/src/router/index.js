import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/admin",
        name: "Admin.Auth",
        component: () => import("@/admin/Auth.vue"),
    },
    {
        path: "/admin",
        name: "Admin",
        component: () => import("@/admin/Admin.vue"),
        children: [
            {
                path: "dashboard",
                component: () => import("@/admin/views/Dashboard.vue"),
            },
            {
                path: "stations",
                component: () => import("@/admin/views/station/Stations.vue"),
            },
            {
                path: "staffs",
                component: () => import("@/admin/views/staff/Staffs.vue"),
            },
            {
                path: "users",
                component: () => import("@/admin/views/user/Users.vue"),
            },
            {
                path: "vehicles",
                component: () => import("@/admin/views/vehicle/Vehicles.vue"),
            },
        ],
    },

    // -------------------------- User Routes --------------------------------
    {
        path: "/",
        name: "Home",
        component: () => import("@/layouts/user/Home.vue"),
        children: [],
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

export default router;
