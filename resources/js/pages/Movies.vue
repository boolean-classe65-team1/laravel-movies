<template>
    <div class="container">
        <div class="row row-cols-3">
            <div class="col" v-for="movie in movies" :key="movie.id">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ movie.title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ movie.original_title }}</h6>
                        <p class="card-text"><i class="fa fa-solid fa-globe text-success"></i> {{ movie.nationality }} - <i class="fa-solid fa-calendar-check text-primary"></i> {{ movie.date }} - <i class="fa-solid fa-star text-warning"></i> {{ movie.vote }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from "axios"
    export default {
        data() {
            return {
                movies: {}
            }
        },

        methods: {
            fetchMovies() {
                axios.get("/api/movies")
                    .then((resp) => {
                        this.movies = resp.data
                    })
            }
        },

        mounted() {
            this.fetchMovies();
        }
    }
</script>