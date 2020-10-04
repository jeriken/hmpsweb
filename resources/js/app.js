import Vue from 'vue'
import App from './Index.vue'
import router from './router.js'
require('typeface-roboto')

const vm = new Vue({
  el: '#app',
  router,
  render: (h) => h(App),
})
