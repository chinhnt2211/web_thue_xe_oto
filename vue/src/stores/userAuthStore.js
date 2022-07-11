import { defineStore } from 'pinia'
import { userAxios } from '@/utils/axiosUtil';
import router from '@/routes'
export const userAuthStore = defineStore('users', {
    state: () => {
        return {
            user : null,
            accessToken: "",
            isLoggedIn: false,
            returnUrl: null,
        }
    },

    actions: {
        async registerUser(params) {
            let response = await userAxios.post('/register', params);
            this.user = response.data.user;
            this.accessToken = response.data.access_token;
            this.isLoggedIn = true;
            localStorage['access_token'] = this.accessToken;
            console.log(response);


            router.push(this.returnUrl || '/');
        },

        async loginUser(params) {
            let response = await userAxios.post('/login', params);
            this.user = response.data.user;
            this.accessToken = response.data.access_token;
            this.isLoggedIn = true;
            localStorage['access_token'] = this.accessToken;
            console.log(response);


            router.push(this.returnUrl || '/');
        }
        // checkAccessToken() {

        // }
    }

})