import ('./bootstrap');

import { createApp } from 'vue'

import App from './App.vue'
import router from './router';
import VueYandexMetrika from 'vue3-yandex-metrika';


createApp(App)
    .use(router)
    .use(VueYandexMetrika, {
        id: 94711045,
        router: router,
        env: process.env.NODE_ENV
    })
    .mount("#app")