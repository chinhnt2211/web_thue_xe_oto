import { createApp } from 'vue';
import router from "./routes";
import App from './App.vue';
import { createPinia } from 'pinia';
import VCalendar from 'v-calendar';
import Toast, { POSITION } from "vue-toastification";
import vSelect from 'vue-select'

import './index.css';
import 'v-calendar/dist/style.css';
import "vue-toastification/dist/index.css";
import 'vue-select/dist/vue-select.css';

const pinia = createPinia()
const app = createApp(App)
    .use(router)
    .use(pinia)
    .use(VCalendar, {})
    .use(Toast, {
        timeout: 3000,
        position: POSITION.BOTTOM_RIGHT,
    })
    .component('v-select', vSelect)
    .mount('#app');


