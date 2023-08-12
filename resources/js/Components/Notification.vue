<script setup>

    import CloseEyeIcon from './Icons/CloseEyeIcon.vue';

    import { onMounted } from 'vue';
    import { initDropdowns } from 'flowbite';

    onMounted(() => {
        initDropdowns();
    });

</script>

<template>

    <div class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-600 dark:text-gray-300">

        Notificações

    </div>

    <div>

        <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-900 dark:border-gray-600">

            <div class="flex-shrink-0">

                <img 
                    src="../../image/profile-pic.png" 
                    alt="Foto Perfil"
                    class="w-11 h-11 rounded-full"/>

            </div>

            <div class="pl-3 w-full">

                <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">

                    Agendado hoje

                    <span class="font-semibold text-gray-900 dark:text-white">
                        Letícia Careli
                    </span>

                </div>

                <div class="text-xs font-medium text-primary-600 dark:text-primary-500">

                    alguns momentos atrás

                </div>

            </div>

        </a>

    </div>

</template>