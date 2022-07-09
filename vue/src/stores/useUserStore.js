import { defineStore } from 'pinia'
import axios from 'axios';

export const useUserStore = defineStore('users', {
    state: () => {
        return {
            uid: "",
            firstName: "",
            lastName: "",
            accessToken: "",
            isLoggedIn: false,
            errors: {
                message: {},
                isError: false
            }
        }
    },

    actions: {
        registerUser(params) {
            axios.post('http://127.0.0.1:8000/api/auth/register', params)
                .then(response => {
                    this.uid = response.data.user.id;
                    this.firstName = response.data.user.first_name;
                    this.lastName = response.data.user.last_name;
                    this.isLoggedIn = true;
                    this.accessToken = response.data.access_token;
                    localStorage.setItem('access_token', this.access_token);
                    this.errors.isError = false;
                })
                .catch(error => {
                    this.errors.message = error.response.data;
                    this.errors.isError = true;
                    console.log(this.errors);
                });
        },
        // checkAccessToken() {

        // }
    }

})