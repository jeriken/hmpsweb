import Vue from 'vue'
import App from './index'
require('typeface-roboto')

const vm = new Vue({
  el: '#app',
  render: (h) => h(App),
})
