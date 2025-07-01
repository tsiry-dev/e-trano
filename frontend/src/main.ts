import './assets/main.css'

import { initFlowbite } from 'flowbite'
import { createApp } from 'vue'
import { createPinia } from 'pinia'
import 'primeicons/primeicons.css'

import 'leaflet/dist/leaflet.css';
// import 'vue-map-ui/dist/normalize.css';
// import 'vue-map-ui/dist/style.css';
// import 'vue-map-ui/dist/theme-all.css';

import App from './App.vue'
import router from './router'

const app = createApp(App)

app.use(createPinia())
app.use(router)

app.mount('#app')


router.afterEach(() => {
  setTimeout(() => {
    initFlowbite();
  }, 0);
});
