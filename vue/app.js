import Vue from 'vue';
import VueRouter from 'vue-router';
 
import App from './components/App.vue';
import vacationsList from './components/vacations/vacationsList.vue';
import vacationsDetails from './components/vacations/vacationsDetails.vue';
// import usersList from './components/users/usersList.vue';
// import usersDetails from './components/users/usersDetails.vue';
 
Vue.component('vacationsList', vacationsList);
Vue.component('vacationsDetails',vacationsDetails);
// Vue.component('usersList',usersList);
// Vue.component('usersDetails',usersDetails);
Vue.use(VueRouter);
 
const routes = [
    // {
    //     path : '/',
    //     component : ProductsList
    // },
    {
        path : '/vacations',
        component : vacationsList,
    },
    {
        path : '/vacations/:id',
        component : vacationsDetails,
    },
    // {
    //     path : '/users',
    //     component : usersList,
    // },
    // {
    //     path : '/users/:id',
    //     component : usersDetails,
    // },
    // {
    //     path : '*',
    //     component : ProductsList
    // }
];
 
const router = new VueRouter ({
    mode: 'history',
    routes
});
 
import axios from 'axios';
axios.defaults.headers.common['Authorization'] = 'Bearer 100-token';
 
new Vue({
    router,
    el: '#app',
    render: h => h(App)
})