<template>
    <div class="app-header header-shadow">
    <Logo/>
    <div class="app-header__content">
        <div class="app-header-left">
            <HeaderLeft/>
        </div>
        <div class="app-header-right">
            <HeaderRight/>
        </div>
    </div>
</div>
</template>

<script>

import Logo from './Components/logo.vue';
import HeaderLeft from './Components/header-left.vue';
import HeaderRight from './Components/header-right.vue';

export default {
    components: {
        Logo,
        HeaderLeft,
        HeaderRight
    }
}
</script>