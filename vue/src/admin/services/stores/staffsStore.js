import { baseAxios } from "@/utils/axiosUtil.js";
import { defineStore } from "pinia";
import { useAuthStore } from "@/admin/services/stores/authStore.js";

const auth = useAuthStore();

export const useStaffsStore = defineStore("StaffsStore", {
    state: () => {
        return {
            staffs: [],
            currentStaff: null,
            links: null,
            currentPage: 1,
            lastPage: 1,
            prevPage: false,
            nextPage: false,
        };
    },
    getters: {
        staff(state) {
            return state.currentStaff;
        },
    },
    actions: {
        async fetchStaffs(page = this.currentPage) {
            // console.log(page);
            const response = await baseAxios.get(`/admins/get`, {
                params: {
                    page,
                },
                headers: {
                    Authorization: `Bearer ${auth.token}`,
                },
            });
            console.log(response);
            const data = response.data;
            this.staffs = data.data;
            this.lastPage = data.last_page;
            this.links = data.links;
            this.prevPage = !!data.prev_page_url;
            this.nextPage = !!data.next_page_url;
        },
        async fetchStaff(id = null) {
            // console.log(id)
            const response = await baseAxios.get(`/admins/get`, {
                params: {
                    id,
                },
                headers: {
                    Authorization: `Bearer ${auth.token}`,
                },
            });
            const data = response.data;
            // console.log(data);
            this.currentStaff = data;
        },
        async store(staff) {
            const data = Object.assign(staff, staff.location);
            // console.log(staff);
            const response = await baseAxios.post(`/admins/store`, 
            data, {
                headers: {
                    Authorization: `Bearer ${auth.token}`,
                    'Content-Type': 'multipart/form-data'
                },
            });
            // console.log(response);
            return response;
        },
        async update(staff) {
            const id = staff.id;
            const data = Object.assign(staff, staff.location);
            // console.log(staff);
            const response = await baseAxios.put(`/admins/update/${staff.id}`, 
            data, {
                headers: {
                    Authorization: `Bearer ${auth.token}`,
                },
            });
            console.log(response);
            return response;
        },
        async destroy(id) {
            console.log(id);
            const response = await baseAxios.delete(`/admins/destroy/${id}`, 
            {
                headers: {
                    Authorization: `Bearer ${auth.token}`,
                },
            });
            // console.log(response);
            return response;
        },
        async changePage(page) {
            if(page < 1 || page > this.lastPage) {
                return;
            }
            await this.fetchStaffs(page);
            this.currentPage = page;
        },
        toNextPage() {
            if(this.currentPage < this.lastPage) {
                this.changePage(this.currentPage+1);
            }
        },
        toPrevPage() {
            if(this.currentPage > 1) {
                this.changePage(this.currentPage-1);
            }
        },
    },
});
