import Vue from "vue"
import VueRouter from "vue-router"

const Home = () => import('./views/Home.vue')
// const Articles = () => import('./views/Articles.vue')
// const News = () => import('./views/News.vue')
// const About = () => import('./views/About.vue')

Vue.use(VueRouter)

export default new VueRouter({
  routes: [
    {
      path: "/",
      name: "home",
      component: Home
    },
    // please create Articles, News, and About components
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
