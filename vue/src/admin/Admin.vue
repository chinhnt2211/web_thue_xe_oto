<template>
  <div id="admin">
    <sidebar />
    <div class="relative md:ml-64 bg-blueGray-100">
      <admin-navbar />
      <!-- <header-stats /> -->
      <div class="px-4 md:px-10 mx-auto w-full pt-24">
        <router-view />
        <footer-admin />
      </div>
    </div>
  </div>
</template>

<script>
import AdminNavbar from "@/admin/components/Navbars/AdminNavbar.vue";
import Sidebar from "@/admin/components/Sidebar/Sidebar.vue";
import HeaderStats from "@/admin/components/Headers/HeaderStats.vue";
import FooterAdmin from "@/admin/components/Footers/FooterAdmin.vue";
export default {
  name: "admin-layout",
  components: {
    AdminNavbar,
    Sidebar,
    HeaderStats,
    FooterAdmin,
  },
};
</script>

<style>
@import "@fortawesome/fontawesome-free/css/all.min.css";
@import "@/admin/assets/styles/tailwind.css";
</style>