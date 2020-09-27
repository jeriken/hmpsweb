import Vue from 'vue'
import App from './index'
import router from './router'
require('typeface-roboto')

const vm = new Vue({
  el: '#app',
  router,
  render: (h) => h(App),
})
