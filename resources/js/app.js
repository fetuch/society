import './bootstrap';

import Vue from 'vue';

import VModal from 'vue-js-modal'

Vue.use(VModal)

const files = require.context('./', true, /\.vue$/i);

files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

const app = new Vue({
  el: '#app',
});
