

require('./bootstrap');

window.Vue = require('vue');
window.swal = require('sweetalert');
window.$ = require('jquery');

import Vuetify from 'vuetify'
Vue.use(Vuetify)
import 'vuetify/dist/vuetify.min.css'

import StarRating from 'vue-star-rating'

const VueUploadComponent = require('vue-upload-component')
Vue.component('file-upload', VueUploadComponent)


import ExampleComponent from './components/ExampleComponent.vue';
import ProductComponent from './components/ProductComponent.vue';
import CheckoutComponent from './components/CheckoutComponent.vue';
import Message from './components/Message.vue';
import PrivateChat from './components/PrivateChat.vue';
import Chat from './components/Chat.vue';



Vue.component('example-component', ExampleComponent);
Vue.component('product-component', ProductComponent);
Vue.component('checkout-component', CheckoutComponent);
Vue.component('message-list', Message);
Vue.component('private-chat', PrivateChat);
Vue.component('chat', Chat);


 // Vue.component('message-list', require('./components/Message.vue'));
 // Vue.component('private-chat', require('./components/PrivateChat.vue'));
 // Vue.component('chat', require('./components/Chat.vue'));
Vue.component('star-rating', StarRating);

const app = new Vue({
    el: '#app'
});

new Vue(app).$mount('#app');
