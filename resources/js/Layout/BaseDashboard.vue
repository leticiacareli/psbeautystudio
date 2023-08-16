<script setup>

    import Navbar from '../Components/Navbar.vue';
    import Sidebar from '../Components/Sidebar.vue';
    import DefaultDashboard from '../Components/DefaultDashboard.vue';

    import { onMounted } from 'vue';
    import { initDrawers } from 'flowbite';
    import { Link } from '@inertiajs/vue3';

    onMounted(() => {
        initDrawers();
    });
    
</script>

<template>

    <div class="antialiased bg-gray-50 dark:bg-gray-900">

        <Navbar/>

        <aside 
            id="drawer-navigation"
            aria-label="Sidenav"
            class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700">

            <Sidebar/>

        </aside>

        <main class="p-4 md:ml-64 h-auto pt-20">

            <slot></slot>

        </main>

    </div>
</template>