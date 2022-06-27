import {createRouter, createWebHistory} from "vue-router";
import Dashboard from "../view/Dashboard.vue";

import stations from '../view/stations.vue';
import station from '../view/station.vue';

const routes = [
    {
        path: '/',
        name: 'Dashboard',
        component: Dashboard
    },
    {
        path: '/stations',
        name: 'stations',
        component: stations
    },
    {
        path: '/station/:id',
        name: 'station',
        component: station,
        children: [
            // {
            //     path: '',
            //     name: 'info',
            //     component: StationInfo
            // },
        ]
    },
]

const router  = createRouter({
    history:createWebHistory(),
    routes
})

export default router;
