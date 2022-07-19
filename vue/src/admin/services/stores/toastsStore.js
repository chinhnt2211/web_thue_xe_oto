import { defineStore } from "pinia";

export const useToastsStore = defineStore("toasts", {
    state: () => {
        return {
            expired: false,
            toasts: [],
        };
    },
    getters: {},
    actions: {
        notify(message = '', type = 'success') {
            this.toasts.push({
                message,
                type
            });
            setTimeout(() => {
                this.toasts.shift();
            }, 5000);
        },
    },
});
