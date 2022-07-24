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
                                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                    <div
                                        class="text-blueGray-800 text-center m-3 font-bold text-5xl"
                                    >
                                        <small>Sign in</small>
                                    </div>
                                    <form @submit.prevent="loginHandler">
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
                                                v-model="model.email"
                                            />
                                            <div
                                                v-if="v$.model.email.$error"
                                                class="text-sm text-red-500"
                                            >
                                                {{ v$.model.email.$errors[0].$message }}
                                            </div>
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
                                                v-model="model.password"
                                            />
                                            <div
                                                v-if="v$.model.password.$error"
                                                class="text-sm text-red-500"
                                            >
                                                {{ v$.model.password.$errors[0].$message }}
                                            </div>
                                        </div>
                                        <!-- <div>
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
                                        </div> -->

                                        <div class="text-center mt-6">
                                            <button
                                                class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                                type="submit"
                                            >
                                                <svg
                                                    v-if="loading"
                                                    role="status"
                                                    class="mr-2 w-5 h-5 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600 inline"
                                                    viewBox="0 0 100 101"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                        fill="currentColor"
                                                    />
                                                    <path
                                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                        fill="currentFill"
                                                    />
                                                </svg>
                                                <span>Sign In</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <toast />
    </div>
</template>
<script>
import Navbar from "@/admin/components/Navbars/AuthNavbar.vue";
import FooterSmall from "@/admin/components/Footers/FooterSmall.vue";

import registerBg2 from "@/admin/assets/img/register_bg_2.png";

import { useRouter, useRoute } from "vue-router";
import { useToast } from "vue-toastification";
import useVuelidate from "@vuelidate/core";
import { required, email, minLength, maxLength } from "@vuelidate/validators";

// import { adminAxios } from "@/utils/axiosUtil.js";
import { useAuthStore } from "@/admin/services/stores/authStore.js";

export default {
    setup() {
        return {
            router: useRouter(),
            route: useRoute(),
            auth: useAuthStore(),
            toast: useToast(),
            v$: useVuelidate(),
        };
    },
    data() {
        return {
            app_name: "Thue Xe - Admin",
            registerBg2,
            errors: [],
            loading: false,
            model: {
                email: null,
                password: null,
            },
        };
    },
    validations() {
        return {
            model: {
                email: {
                    required,
                    email,
                },
                password: {
                    required,
                    minLength: minLength(8),
                },
            },
        };
    },
    components: {
        Navbar,
        FooterSmall,
    },
    methods: {
        async loginHandler() {
            this.loading = true;

            await this.v$.$validate();

            if(this.v$.$error) {
                this.loading = false;
                return;
            }

            await this.auth
                .login(this.model)
                .then((response) => {
                    console.log(response);
                    this.router.push({ name: "Admin" });
                })
                .catch((error) => {
                    console.log(error);
                    this.toast.error(
                        error.response?.data?.message ||
                            error.response?.data ||
                            "Something wrong happend"
                    );
                });

            // console.log(this.auth.token)
            this.loading = false;
        },
    },
    created() {
        // this.toast.warning("I'm a test toast!");
        // console.log(this.v$.model)
    },
};
</script>

<style>
@import "@/admin/assets/styles/tailwind.css";

.loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>
