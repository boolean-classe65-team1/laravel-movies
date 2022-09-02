<template>
  <div>
    <!-- navbar -->
    <NavBar></NavBar>

    <main class="pb-5">
      
      <!-- contenuto di ogni pagina -->
      <!-- simile allo @yield di balde -->
      <router-view></router-view>
    </main>

    <!-- footer -->
    <TheFooter></TheFooter>
  </div>
</template>

<script>
import NavBar from '../components/NavBar.vue';
import TheFooter from '../components/TheFooter.vue';
import Home from '../pages/Home.vue';
import Movies from '../pages/Movies.vue';
import TvSeries from '../pages/TvSeries.vue';
export default {
  components: { NavBar, TheFooter, Home, Movies, TvSeries },
  data() {
    return {
      page: "home"
    }
  }
}
</script>

<style>
main{
    flex-grow:1;
    margin-top: 50px;
}
</style>