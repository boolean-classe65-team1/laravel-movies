import Vue from "vue"
import VueRouter from "vue-router"

import Home from "./pages/Home.vue";
import Movies from "./pages/Movies.vue";
import TvSeries from "./pages/TvSeries.vue";

Vue.use(VueRouter)

const routes = [
  
  {
    path: "/", component: Home, name: "home.index",
    meta: {
      title: "Laravel movies",
      subtitle: "La web app per film e serie tv"
    }
  },
   /* {
    path: "/posts/:post_slug", component: PostShow, name: "posts.show",
    meta: {
      title: "Dettagli post",
      subtitle: "Dettagli del post #",
    }
  }, */
  /* {
    path: "/:user_id/posts", component: UserPosts, name: "user.posts",
    meta: {
      title: "Post utente",
      subtitle: "Lista dei posti scritti da questo utente",
      bgImage: "home-bg.jpeg"
    }
  }, */
  /* {
    path: "/chi-siamo", component: About, name: "about.index",
    meta: {
      title: "Su di noi",
      subtitle: "nemmeno una nuvola",
      bgImage: "about-bg.jpeg"
    }
  }, */
  /* {
    path: "/contatti", component: Contact, name: "contact.index",
    meta: {
      title: "Contattaci",
      subtitle: "Scrivici un messaggio per dirci che hai pensato",
      bgImage: "contact-bg.jpeg"
    }
  }, */
  {
    path: "/movies", component: Movies, name: "movies"
    
  },
  {
    path: "/tv_series", component: TvSeries, name: "tv_series"
  },
]

// dobbiamo esportare un istanza di VueRouter() con le eventuali configurazioni
const router = new VueRouter({
  // deve contenere un array di rotte
  routes,
  mode: "history"
})

router.beforeEach((to, from, next) => {
  document.title = to.meta.title ?? "Laravel Movies"

  next()
})


export default router