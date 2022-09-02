<template>
<div>
    <div class="container">

        <div class="row">
            <div class="col" v-for="Tv_series in tv_series" :key="Tv_series.id">
                <div class="card-body">
                    <router-link to="{ title: TvSeries.index }">
                        <h2 class="card-title">{{Tv_series.title}}</h2>
                        <h3 class="card-subtitle">{{Tv_series.original_title}}</h3>
                        <p class="card-text">{{Tv_series.nationality}}</p>
                     </router-link>
                </div>
                
 
            </div>
        </div>
        <ul>
        
            
       
    </ul>
    </div>
    
</div>
</template>

<script>
    import axios from "axios";

    export default{
        data(){
            return{
                tv_series:{}
            }
        },
        methods:{
            fetchData () {
                axios.get('/api/tv_series')
                .then ((resp) => {
                    this.tv_series = resp.data
                })
            }
        },
        mounted(){
            this.fetchData();
        }
    }
</script>

<style lang="scss">

</style>