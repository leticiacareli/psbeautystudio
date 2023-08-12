<script setup>

    import MenuIcon from '../Components/Icons/MenuIcon.vue';
    import SearchIcon from '../Components/Icons/SearchIcon.vue';
    import BellIcon from '../Components/Icons/BellIcon.vue';
    import AppIcon from '../Components/Icons/AppIcon.vue';

    import { onMounted } from 'vue';
    import { initDrawers } from 'flowbite';

    onMounted(() => {
        initDrawers();
    });

</script>

<template>

    <div class="antialiased bg-gray-50 dark:bg-gray-900">

        <nav class="bg-white border-b border-gray-200 lg:px-24 px-4 py-3 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">

            <div class="flex flex-wrap justify-between items-center">

                <div class="flex justify-start items-center">

                    <!-- Toggle -->
                    <button 
                        data-drawer-target="drawer-navigation"
                        data-drawer-toggle="drawer-navigation"
                        aria-controls="drawer-navigation"
                        class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">

                        <MenuIcon/>

                        <span class="sr-only">Toggle Sidebar</span>

                    </button>

                    <!-- Logo -->
                    <div class="flex items-center justify-between mr-4">

                        <!-- TODO:Arrumar o escrito -->
                        <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PS Beauty Studio</span> -->

                    </div>
                    <!-- End Logo -->

                    <!-- Input Search -->
                    <!-- <form class="hidden md:block md:pl-2">

                        <label for="topbar-search" class="sr-only">Search</label>

                        <div class="relative md:w-96">

                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">

                                <SearchIcon/>

                            </div>

                            <input
                                type="text"
                                name="email"
                                id="topbar-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Pesquisar"/>

                        </div>

                    </form> -->
                    <!-- End Input Search -->

                </div>

                <div class="flex items-center space-x-6 lg:order-2">

                    <button
                        type="button"
                        data-drawer-toggle="drawer-navigation"
                        aria-controls="drawer-navigation"
                        class="p-2 mr-1 text-gray-500 rounded-lg md:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">

                            <span class="sr-only">Toggle search</span>

                            <SearchIcon/>

                    </button>

                    <button
                        type="button"
                        data-dropdown-toggle="notification-dropdown"
                        class="p-2 mr-1 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
            
                        <span class="sr-only">View notifications</span>

                        <BellIcon/>
                    
                    </button>

                    <!-- Notifications -->
                    <div id="notification-dropdown" class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white divide-y divide-gray-100 shadow-lg dark:divide-gray-600 dark:bg-gray-700 rounded-xl">

                        <slot name="notification"></slot>

                    </div>
                    <!-- End Notifications -->

                    <!-- Services -->
                    <button
                        type="button"
                        data-dropdown-toggle="apps-dropdown"
                        class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">

                        <span class="sr-only">View Notifications</span>

                        <AppIcon/>

                    </button>

                    <div id="apps-dropdown" class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white divide-y divide-gray-100 shadow-lg dark:bg-gray-700 dark:divide-gray-600 rounded-xl">

                        <slot name="service"></slot>

                    </div>
                    <!-- End Services -->

                    <!-- Profile -->
                    <button
                        type="button"
                        id="profile-dropdown"
                        aria-expanded="false"
                        data-dropdown-toggle="user-dropdown"
                        class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">

                        <span class="sr-only">Open user menu</span>

                        <img 
                            src="../../image/profile-pic.png" 
                            alt="Foto de Perfil"
                            class="w-8 h-8 rounded-full">

                    </button>
                    <!-- End Profile -->

                    <div id="user-dropdown" class="hidden z-50 my-4 w-52 text-base list-none bg-white divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded">

                        <slot name="profile"></slot>

                    </div>

                </div>

            </div>

        </nav>

        <aside 
            id="drawer-navigation"
            aria-label="Sidenan"
            class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700">

            <slot name="sidebar"></slot>

        </aside>

        <main class="p-4 md:ml-64 h-auto pt-20">

            <slot name="main"></slot>

        </main>

    </div>

</template>