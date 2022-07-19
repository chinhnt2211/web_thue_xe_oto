<template >
    <div class="default">
        <Navbar />
        <router-view />
        <Footer />
    </div>
</template>

<script>
import Navbar from '@/components/Navbar.vue';
import Footer from '@/components/Footer.vue';
export default {
    components: {
        Navbar,  
        Footer
    }
}
</script>

<style>
.default {
    font-family: Georama;
}
</style>