import ('./bootstrap');

import { createApp } from 'vue'

import App from './App.vue'
import router from './router';
import VueYandexMetrika from 'vue3-yandex-metrika';
import axios from 'axios'
import VueAxios from 'vue-axios'


createApp(App)
    .use(router)
    .use(VueYandexMetrika, {
        id: 95774156,
        router: router,
        env: process.env.NODE_ENV
    })
    .use(VueAxios, axios)
    .mount("#app")