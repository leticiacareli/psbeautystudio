<script setup>

    import Menu from '../Components/Menu.vue';
    import Notification from '../Components/Notification.vue';
    import Service from '../Components/Service.vue';
    import MenuProfile from '../Components/MenuProfile.vue';
    import Sidebar from '../Components/Sidebar.vue';
    import MainDashboard from '../Components/MainDashboard.vue';
    
</script>

<template>

    <Menu>
        <template #notification>
            <Notification></Notification>
        </template>

        <template #service>
            <Service></Service>
        </template>

        <template #profile>
            <MenuProfile></MenuProfile>
        </template>

        <template #sidebar>
            <Sidebar></Sidebar>
        </template>

        <template #main>
            <MainDashboard></MainDashboard>
        </template>
    </Menu>
</template>