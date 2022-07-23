import { defineStore } from 'pinia'
import { userAxios } from '@/utils/axiosUtil';
import router from '@/routes'
export const vehicleStore = defineStore('vehicle', {
    state: () => {
        return {
            vehicle: null,
            brand: "",
            isLoggedIn: false,
            returnUrl: null,
        }
    },
    // userAxios : /api/user
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
        },
        async getInfo(accessToken) {
            let response = await userAxios.get('/me', { headers: {"Authorization" : `Bearer ${accessToken}`}});
            this.user = response.data;
            console.log(response);
            this.isLoggedIn = true;
        }
    }

})