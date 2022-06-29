<template>
    <div>
        <nav>
            <router-link to="/admin/stations">Stations</router-link>
            <router-link to="/admin/admins">Admins</router-link>
            <router-link to="/admin/vehicles">Vehicles</router-link>
        </nav>
        <h1>Admin</h1>
        <router-view></router-view>
    </div>
</template>
