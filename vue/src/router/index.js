import {createRouter, createWebHistory} from "vue-router";

const routes = [
    {
        path: '/',
        name: 'dashboard',
        component: () => import('../views/Dashboard.vue')
    },
    {
        path: '/admin',
        name: 'admin',
        component: () => import('../admin/Admin.vue'),
        children: [
            {
                path: '',
                name: 'dashboard',
                component: () => import('../admin/components/dashboard.vue'),
            },
            // {
            //     path: 'Stations',
            //     name: 'Stations',
            //     component: () => import('../components/admin/Stations.vue'),
            // },
            // {
            //     path: 'Station/:id',
            //     name: 'Station',
            //     component: () => import('../components/admin/Station.vue'),
            //     children: [
            //         // {
            //         //     path: '',
            //         //     name: 'info',
            //         //     component: StationInfo
            //         // },
            //     ]
            // },
            // {
            //     path: 'Admins',
            //     name: 'Admins',
            //     component: () => import('../components/admin/Admins.vue'),
            // },
            // {
            //     path: 'Vehicles',
            //     name: 'Vehicles',
            //     component: () => import('../components/admin/Vehicles.vue'),
            // },
        ]
    },


    {
        path : "/" ,
        name : "Home", 
        component : () => import('@/layouts/user/Home.vue'),
        children : [
            {
                path: "",

            }
        ]
    },
    ,
    {
        path : "/auth",
        name: "Auth",
        redirect: "/auth/login",
        component: ()=>import('@/layouts/user/Auth.vue'),
        children: [
            {
                path : "/auth/login",
                name: "SignIn",
                component: ()=>import('@/views/user/SignIn.vue')
            },
            {
                path : "/auth/register",
                name: "SignUp",
                component: ()=>import('@/views/user/SignUp.vue')
            }
        ]
    }
    
]

const router  = createRouter({
    history:createWebHistory(),
    routes
})

export default router;
