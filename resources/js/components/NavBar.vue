<template>
    <header class="py-4 bg-light">
        <div class="container d-flex justify-content-between">
            <div class="logo">
                <h1>TEAM 1</h1>
            </div>
            <ul class="menu list-unstyled d-flex gap-3">
                <li><router-link to="/">Home</router-link></li>
                <li><router-link to="{ name:'movies' }">Movies</router-link></li>
                <li><router-link to="{ name:'tv_series' }">Tv Series</router-link></li>
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