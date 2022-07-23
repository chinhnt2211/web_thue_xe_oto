import { defineStore } from 'pinia'
import { baseAxios } from '@/utils/axiosUtil';
export const brandStore = defineStore('brand', {
    state: () => {
        return {
            brand: [
                { id: 1, name: 'Wade Cooper' },
                { id: 2, name: 'Arlene Mccoy' },
                { id: 3, name: 'Devon Webb' },
                { id: 4, name: 'Tom Cook' },
                { id: 5, name: 'Tanya Fox' },
                { id: 6, name: 'Hellen Schmidt' },
            ],
        }
    },
    getters: {
        async getAllBrands() {
            if (this.brand == null) {
                let response = await baseAxios.post('/brand');
                this.brand = response.data;
                return this.brand;
            }
            return this.brand

        },
    }

})