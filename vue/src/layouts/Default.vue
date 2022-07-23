<template >
    <Suspense>
        <div id="default">
            <navbar />
            <router-view></router-view>
            <Footer />
        </div>
    </Suspense>

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
#default {
    font-family: Georama;
}
</style>
