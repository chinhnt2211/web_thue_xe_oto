<template>
    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
        <section>
            <div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-75-screen">
                <div class="container z-10">
                    <div class="flex flex-wrap mt-0 -mx-3">
                        <div
                            class="flex flex-col w-full max-w-full px-3 mx-auto md:flex-0 shrink-0 md:w-6/12 lg:w-5/12 xl:w-4/12">
                            <div
                                class="relative flex flex-col min-w-0 mt-32 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                                <div class="p-6 pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl">
                                    <h3 class="relative z-10 font-bold text-transparent bg-gradient-cyan bg-clip-text">
                                        Welcome back</h3>
                                    <p class="mb-0">Nhập email và mật khẩu của bạn để đăng nhập</p>
                                </div>
                                <div class="flex-auto p-6">
                                    <form role="form">
                                        <div class="mb-4">
                                            <label class="mb-2 ml-1 font-bold text-size-xs text-slate-700">Email</label>
                                            <input type="email"
                                                class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                placeholder="Email" v-model="state.email" />
                                            <span v-if="v$.email.$error" class="text-size-sm text-[#fa4343] italic">*{{
                                                    v$.email.$errors[0].$message
                                            }}</span>
                                        </div>
                                        <div class="mb-4">
                                            <label class="mb-2 ml-1 font-bold text-size-xs text-slate-700">Mật
                                                khẩu</label>
                                            <input type="password"
                                                class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                placeholder="Mật khẩu" v-model="state.password" />
                                            <span v-if="v$.password.$error"
                                                class="text-size-sm text-[#fa4343] italic">*{{
                                                        v$.password.$errors[0].$message
                                                }}</span>
                                        </div>
                                        <!-- <div class="min-h-6 mb-0.5 block pl-12">
                                            <input id="rememberMe"
                                                class="mt-0.54 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5-em relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                                                type="checkbox" />
                                            <label
                                                class="mb-2 ml-1 font-normal cursor-pointer select-none text-size-sm text-slate-700"
                                                for="rememberMe">Nhớ mật khẩu</label>
                                        </div> -->
                                        <div class="text-center">
                                            <button type="button" @click="submitForm"
                                                class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-gradient-cyan hover:scale-102 hover:shadow-soft-xs active:opacity-85">
                                                Đăng nhập
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div
                                    class="p-6 px-1 pt-0 text-center bg-transparent border-t-0 border-t-solid rounded-b-2xl lg:px-2">
                                    <p class="mx-auto mb-6 leading-normal text-size-sm">
                                        Bạn chưa có mật khẩu?
                                        <router-link :to="{ name: 'SignUp' }"
                                            class="relative z-10 font-semibold text-transparent bg-gradient-cyan bg-clip-text">
                                            Đăng ký
                                        </router-link>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 md:w-6/12">
                            <div
                                class="absolute top-0 hidden w-3/5 h-full -mr-32 overflow-hidden -skew-x-10 -right-40 rounded-bl-xl md:block">
                                <div class="absolute inset-x-0 top-0 z-0 h-full -ml-16 bg-cover skew-x-10"
                                    style="background-image: url('https://64.media.tumblr.com/e91c7ecf62e1618556190ddeb2adb80f/50ef04c65e7f087f-af/s640x960/e94444678bfa25dc05fec18c48da2a4aaf28e33e.jpg')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>
<script>
import useValidate from "@vuelidate/core";
import { required, email, sameAs, helpers } from "@vuelidate/validators";
import { reactive, computed } from "vue";
import { userAuthStore } from "@/stores/userAuthStore";
import { useRouter } from "vue-router";
export default {
    setup() {
        const router = useRouter();
        const userStore = userAuthStore();
        if (userStore.isLoggedIn) {
            router.push('/');
        }

        const regexPasswords = helpers.regex(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/);

        const state = reactive({
            email: '',
            password: '',
        });

        const rules = computed(() => {
            return {
                email: {
                    required: helpers.withMessage('Không được để trống ô này', required),
                    email: helpers.withMessage('Giá trị không hợp lệ', email),
                },
                password: {
                    required: helpers.withMessage('Không được để trống ô này', required),
                    regexPasswords: helpers.withMessage('Mật khẩu chứa phải 6 đến 20 ký tự, ít nhất một kí tự in hoa, một kí tự thường, một kí tự là số ', regexPasswords),
                }
            }
        });

        const v$ = useValidate(rules, state);
        return {
            state,
            v$,
            userStore
        }

    },
    data() {
        return {
            errors: {},
            isError: false,
        }
    },
    methods: {
        submitForm: function () {
            this.v$.$validate();
            if (!this.v$.$error) {
                let params = {
                    'email': this.state.email,
                    'password': this.state.password,
                };
                this.userStore.loginUser(params).catch(error => {
                    console.log(error);
                    this.errors = error.response.data;
                    this.isError = true;
                });
            }
        }
    }
}
</script>