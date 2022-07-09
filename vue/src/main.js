import { createApp } from 'vue';
import router from "./router";
import App from './App.vue';
import { createPinia } from 'pinia'

const pinia = createPinia()

import './index.css';

createApp(App)
    .use(router)
    .use(pinia)
    .mount('#app');

