<template>
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark flex-grow-1">
            <a class="navbar-brand" href="/">TMM INTERNATIONAL INC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item" v-for="(route, i) in routes" :key="i">
                        <a class="nav-link" :href="route.link">{{ route.name }}</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        name: "AdminMenuComponent",
        props:{
            routes: {
                type: Object
            }
        }
    }
</script>

<style scoped>

</style>