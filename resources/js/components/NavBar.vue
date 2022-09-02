<template>
    <header class="pt-3 bg-light border-bottom">
        <div class="container d-flex justify-content-between">
            <div class="logo">
                <h1>TEAM 1</h1>
            </div>
            <ul class="menu list-unstyled d-flex gap-3">
                <li><router-link to="/" class="btn btn-light pe-3">Home</router-link></li>
                <li><router-link :to="{ name:'movies' }" class="btn btn-light pe-3">Movies</router-link></li>
                <li><router-link :to="{ name:'tv_series' }" class="btn btn-light pe-3">Tv Series</router-link></li>
            </ul>
        </div>
    </header>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
    header{
        z-index: 10;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;

    }
</style>