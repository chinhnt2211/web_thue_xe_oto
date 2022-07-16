<template>
    <div>
        <a
            class="text-blueGray-500 block"
            href="#pablo"
            ref="btnDropdownRef"
            v-on:click="toggleDropdown($event)"
        >
            <div class="items-center flex">
                <span class="text-white pr-3">{{ this.auth.admin.last_name }} {{ this.auth.admin.first_name }}</span>
                <span
                    class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full overflow-hidden"
                >
                    <img
                        alt="..."
                        class="w-full align-middle border-none shadow-lg"
                        :src="auth.admin.avatarURL"
                    />
                </span>
            </div>
        </a>
        <div
            ref="popoverDropdownRef"
            class="bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
            v-bind:class="{
                hidden: !dropdownPopoverShow,
                block: dropdownPopoverShow,
            }"
        >
            <a
                href="javascript:void(0);"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
            >
                Account
            </a>
            <div class="h-0 my-2 border border-solid border-blueGray-100" />
            <a
                href="javascript:void(0);"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                @click="logoutHandler"
            >
                Logout
            </a>
            <!-- <a
                href="javascript:void(0);"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
            >
                Another action
            </a>
            <a
                href="javascript:void(0);"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
            >
                Something else here
            </a>
            <div class="h-0 my-2 border border-solid border-blueGray-100" />
            <a
                href="javascript:void(0);"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
            >
                Seprated link
            </a> -->
        </div>
    </div>
</template>

<script>
import { createPopper } from "@popperjs/core";

import image from "@/admin/assets/img/team-1-800x800.jpg";
import { useAuthStore } from "@/admin/services/stores/authStore";

export default {
    setup() {
        const auth = useAuthStore();

        return {
            auth
        }
    },
    data() {
        return {
            dropdownPopoverShow: false,
            image: image,
        };
    },
    methods: {
        toggleDropdown: function (event) {
            event.preventDefault();
            if (this.dropdownPopoverShow) {
                this.dropdownPopoverShow = false;
            } else {
                this.dropdownPopoverShow = true;
                createPopper(
                    this.$refs.btnDropdownRef,
                    this.$refs.popoverDropdownRef,
                    {
                        placement: "bottom-start",
                    }
                );
            }
        },
        logoutHandler() {
            this.auth.logout();
            this.$router.push({ name: 'Admin.Login'});
        }
    },
};
</script>
