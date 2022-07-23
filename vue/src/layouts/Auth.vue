<template>
    <router-view />
    <Footer/>
</template>
<script>
import Footer from '@/components/Footer.vue';
export default {
    components: {
        Footer
    }
}
</script>
<style>
/* @import url("@/assets/User/css/nucleo-icons.css");
@import url("@/assets/User/css/nucleo-svg.css"); */
@import url("@/assets/styles/styles.css");
</style>
