import Vue from "vue"
import VueRouter from "vue-router"
import Home from "./views/Home.vue"
// import Articles from "./views/Articles.vue"
// import News from "./views/News.vue"
// import About from "./views/About.vue"

Vue.use(VueRouter)

export default new VueRouter({
  routes: [
    {
      path: "/",
      name: "home",
      component: Home
    },
    // please create Articles, News, and About Components
    // in ./views
    // {
    //   path: "/articles",
    //   name: "articles",
    //   component: Articles
    // },
    // {
    //   path: "/news",
    //   name: "news",
    //   component: News
    // },
    // {
    //   path: "/about",
    //   name: "about",
    //   component: About
    // },
  ]
})
