import { createApp } from 'vue';
import router from "./routes";
import App from './App.vue';
import { createPinia } from 'pinia';
import VCalendar from 'v-calendar';
import './index.css';
import 'v-calendar/dist/style.css';



const pinia = createPinia()
const app = createApp(App)

app.use(router)
app.use(pinia)
app.use(VCalendar, {})

app.mount('#app');

