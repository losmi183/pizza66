/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { default: Echo } = require('laravel-echo');

require('./bootstrap');

// Slick components
require('./slick/slick');
require('./slick/slick-drinks');
require('./slick/slick-actions');
require('./slick/slick-customers');

// Jquery Components
require('./jquery/inputQty');
require('./jquery/admin');
require('./jquery/message');



window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('pizza-ordered', require('./components/PizzaOrdered.vue').default);

Vue.component('time-response', require('./components/TimeResponse.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app', 
    // mounted() {
    //     window.Echo.channel('order-tracker')
    //     .listen('PizzaOrdered', (e) => {
    //         console.log('Pizza je narucena');
    //     });
    //     // console.log('OMG Realtime bro');
    // }
    // mounted() {
    //     // Ime kanala na kome event emituje
    //     window.Echo.channel('time-response')
    //     // Ime samog eventa
    //     .listen('TimeResponse', (e) => {
    //         console.log('Vreme Potrebno za dostavu:' + e.time + ' minuta');
    //     });
    //     // console.log('OMG Realtime bro');
    // }
});
