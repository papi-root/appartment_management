/*import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import {createApp} from 'vue'



createApp(App).mount("#app")
*/

// Import the Theme 
/*
import "primevue/resources/themes/lara-light-indigo/theme.css";
import PrimeVue from 'primevue/config';
import 'primeicons/primeicons.css';
import { createApp } from 'vue';

import { createRouter, createWebHistory } from 'vue-router';

//Import Component
import Button from "primevue/button"
import Calendar from 'primevue/calendar';
import UserList from './components/UserList.vue'
import UserView from './components/UserView.vue'; 

import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import ColumnGroup from 'primevue/columngroup';   // optional
import Row from 'primevue/row'; 
import App from './App.vue'


const router = createRouter({
    history: createWebHistory(), 
    routes: [
        { path: '/dashboard', component: UserList }
    ]
}); 

const app = createApp(App);
app.use(PrimeVue);
app.component('Button', Button);
app.component('Calendar', Calendar);
app.component('DataTable', DataTable);
app.component('Column', Column)
app.use(router); 
app.mount("#app")
*/ 

//import './bootstrap';
import 'laravel-datatables-vite';

