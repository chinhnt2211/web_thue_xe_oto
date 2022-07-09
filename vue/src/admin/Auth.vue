<template>
    <div>
        <navbar />
        <main>
            <section class="relative w-full h-full min-h-screen flex">
                <div
                    class="absolute top-0 w-full h-full bg-blueGray-800 bg-no-repeat bg-full"
                    :style="`background-image: url('${registerBg2}');`"
                ></div>
                <div class="container mx-auto px-4 m-auto">
                    <div
                        class="flex content-center items-center justify-center h-full"
                    >
                        <div class="w-full lg:w-4/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0"
                            >
                                <!-- <div class="rounded-t mb-0 px-6 py-6">
                                    <div class="text-center mb-3">
                                        <h6
                                            class="text-blueGray-500 text-sm font-bold"
                                        >
                                            Sign in with
                                        </h6>
                                    </div>
                                    <div class="btn-wrapper text-center">
                                        <button
                                            class="bg-white active:bg-blueGray-50 text-blueGray-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                                            type="button"
                                        >
                                            <img
                                                alt="..."
                                                class="w-5 mr-1"
                                                :src="github"
                                            />
                                            Github
                                        </button>
                                        <button
                                            class="bg-white active:bg-blueGray-50 text-blueGray-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                                            type="button"
                                        >
                                            <img
                                                alt="..."
                                                class="w-5 mr-1"
                                                :src="google"
                                            />
                                            Google
                                        </button>
                                    </div>
                                    <hr
                                        class="mt-6 border-b-1 border-blueGray-300"
                                    />
                                </div> -->
                                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                    <!-- <div
                                        class="text-blueGray-400 text-center mb-3 font-bold"
                                    >
                                        <small
                                            >Or sign in with credentials</small
                                        >
                                    </div> -->
                                    <div
                                        class="text-blueGray-800 text-center m-3 font-bold text-5xl"
                                    >
                                        <small>Sign in</small>
                                    </div>
                                    <form @submit.prevent="login">
                                        <div class="relative w-full mb-3">
                                            <label
                                                class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password"
                                            >
                                                Email
                                            </label>
                                            <input
                                                type="email"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                placeholder="Email"
                                                name="email"
                                                v-model="admin.email"
                                            />
                                        </div>

                                        <div class="relative w-full mb-3">
                                            <label
                                                class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password"
                                            >
                                                Password
                                            </label>
                                            <input
                                                type="password"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                placeholder="Password"
                                                name="password"
                                                v-model="admin.password"
                                            />
                                        </div>
                                        <div>
                                            <label
                                                class="inline-flex items-center cursor-pointer"
                                            >
                                                <input
                                                    id="customCheckLogin"
                                                    type="checkbox"
                                                    class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150"
                                                    name="remember"
                                                />
                                                <span
                                                    class="ml-2 text-sm font-semibold text-blueGray-600"
                                                >
                                                    Remember me
                                                </span>
                                            </label>
                                        </div>

                                        <div class="text-center mt-6">
                                            <button
                                                class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                                type="submit"
                                            >
                                                Sign In
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- <div class="flex flex-wrap mt-6 relative">
                                <div class="w-1/2">
                                    <a
                                        href="javascript:void(0)"
                                        class="text-blueGray-200"
                                    >
                                        <small>Forgot password?</small>
                                    </a>
                                </div>
                                <div class="w-1/2 text-right">
                                    <router-link
                                        to="/auth/register"
                                        class="text-blueGray-200"
                                    >
                                        <small>Create new account</small>
                                    </router-link>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- <footer-small absolute /> -->
            </section>
        </main>
    </div>
</template>
<script>

// UI/UX
import Navbar from "@/admin/components/Navbars/AuthNavbar.vue";
import FooterSmall from "@/admin/components/Footers/FooterSmall.vue";

import registerBg2 from "@/admin/assets/img/register_bg_2.png";

import github from "@/assets/img/github.svg";
import google from "@/assets/img/google.svg";

// services
import login from '@/admin/services/auth.js'

// utils
import { userAuthStore } from '@/admin/utils/store/auth'

export default {
    setup() {

    },
    data() {
        return {
            app_name: "Thue Xe - Admin",
            registerBg2,
            github,
            google,
            admin: {
                email: null,
                password: null,
            },
        };
    },
    components: {
        Navbar,
        FooterSmall,
    },
    methods: {
        login() {
            login(this.admin);
        }
    },
};
</script>

<style>
@import "@/admin/assets/styles/tailwind.css";
</style>
