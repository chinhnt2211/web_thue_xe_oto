<template>
    <div id="admin">
        <h1>Admin</h1>
        
        <AppHeader/>
        <!-- {{> ThemeOptions/theme-options }} -->
        <router-view></router-view>
    </div>
</template>

<script>
import AppHeader from './layout/AppHeader/header.vue';

export default {    
    components: {
        AppHeader
    } 
}
</script>

<style lang="scss">
@import './assets/base.scss';
</style>