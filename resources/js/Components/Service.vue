<script setup>
    //Icons
    import SaleIcon from '../Components/Icons/SaleIcon.vue';
    import UsersIcon from '../Components/Icons/UsersIcon.vue';
    import InboxIcon from '../Components/Icons/InboxIcon.vue';
    import ProfileIcon from '../Components/Icons/ProfileIcon.vue';
    import SettingIcon from '../Components/Icons/SettingIcon.vue';

</script>

<template>

    <div class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-600 dark:text-gray-300">
        Serviços
    </div>

    <!-- TODO: Fazer componente dos links -->
    <div class="grid grid-cols-3 gap-4 p-4">

        <!-- Sales -->
        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-900 group">

            <SaleIcon/>

            <div class="text-sm text-gray-900 dark:text-white">Vendas</div>

        </a>
        <!-- End Sales -->

        <!-- Users -->
        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">

            <UsersIcon/>

            <div class="text-sm text-gray-900 dark:text-white">Usuários</div>

        </a>
        <!-- End Users -->

        <!-- Inbox -->
        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">

            <InboxIcon/>

            <div class="text-sm text-gray-900 dark:text-white">Inbox</div>

        </a>
        <!-- End Inbox -->

        <!-- Profile -->
        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">

            <ProfileIcon/>

            <div class="text-sm text-gray-900 dark:text-white">Perfil</div>

        </a>
        <!-- End Profile -->

        <!-- Setting -->
        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">

            <SettingIcon/>

            <div class="text-sm text-gray-900 dark:text-white">Config</div>

        </a>
        <!-- End Setting -->

    </div>

</template>