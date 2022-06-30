import {createRouter, createWebHistory} from "vue-router";

const routes = [
    {
        path: '/',
        name: 'dashboard',
        component: () => import('../view/Dashboard.vue')
    },
    {
        path: '/admin',
        name: 'admin',
        component: () => import('../admin/admin.vue'),
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
    
]

const router  = createRouter({
    history:createWebHistory(),
    routes
})

export default router;
