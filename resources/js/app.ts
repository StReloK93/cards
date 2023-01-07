import { createApp } from "vue"

import App from './App.vue'
import store from "./store/"
import router from "./router/"
import 'devextreme/dist/css/dx.material.teal.light.compact.css'

store.dispatch('getUser').then(() =>{
    createApp(App)
    .use(store)
    .use(router)
    .mount('#app')
})