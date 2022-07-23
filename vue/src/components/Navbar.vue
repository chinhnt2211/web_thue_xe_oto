<template>
    <!-- Navbar -->
    <section class="w-full psx-8 text-gray-700 bg-white">
        <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
            <div class="relative flex flex-col md:flex-row">
                <router-link :to="{ name: 'Home' }"
                    class="flex items-center mb-5 font-medium text-gray-900 lg:w-auto lg:items-center lg:justify-center md:mb-0">
                    <span class="mx-auto text-xl font-black leading-none text-gray-900 select-none">
                        Thue Oto<span class="text-indigo-600">.</span>
                    </span>
                </router-link>
                <nav
                    class="flex flex-wrap items-center mb-5 text-base md:mb-0 md:pl-8 md:ml-8 md:border-l md:border-gray-200">
                    <router-link :to="{ name: 'Home' }"
                        class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Trang chủ</router-link>
                    <router-link :to="{ name: 'Search' }"
                        class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Tìm kiếm</router-link>
                    <router-link :to="{ name: 'Search' }"
                        class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Trạm xe</router-link>
                </nav>
            </div>

            <div class="inline-flex items-center ml-5 space-x-3 lg:justify-end relative">
                <!-- <router-link :to="{name : 'Home'}"
                    class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
                    Sign in
                </router-link> -->
                <router-link :to="{ name: 'SignIn' }" v-if="!userStore.isLoggedIn"
                    class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-indigo-600 border border-transparent shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 rounded-xl">
                    Sign up
                </router-link>
                <!-- Avatar -->
                <button class="w-10 h-10 p-1 rounded-full bg-cover focus:ring-4 focus:ring-gray-300"
                    v-if="userStore.isLoggedIn" @click="changeDropdownUserState"
                    style=" background-image: url('https://www.creative-tim.com/learning-lab/assets/soft-ui-flowbite/images/people/profile-picture-5.jpg')">
                </button>
                <!-- Dropdown menu -->
                <div class="absolute z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 top-12 "
                    :class="isDropdownUserEnabled ? '' : 'hidden'" v-if="userStore.isLoggedIn">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
                <!-- Name -->
                <p v-if="userStore.isLoggedIn" class="font-semibold my-auto truncate max-w-[140px]">
                    {{ userStore.user.hasOwnProperty('last_name') ? userStore.user.last_name : '' }}
                    {{ userStore.user.hasOwnProperty('first_name') ? userStore.user.first_name : '' }}
                </p>
            </div>
        </div>
    </section>
</template>
<script>
import { userAuthStore } from "@/stores/userAuthStore"
export default {
    setup() {
        const userStore = userAuthStore();
        return {
            userStore
        }
    },
    data() {
        return {
            isMenuEnabled: false,
            isDropdownUserEnabled: false
        }
    },
    methods: {
        changeMenuState() {
            this.isMenuEnabled = !this.isMenuEnabled;
        },
        changeDropdownUserState() {
            this.isDropdownUserEnabled = !this.isDropdownUserEnabled;
        }
    }
}
</script>
