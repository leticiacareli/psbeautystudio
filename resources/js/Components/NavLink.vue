<script setup>
    
    import { Link } from '@inertiajs/vue3';

    defineProps({
        href: {
            type: String,
            required: true,
        }
    });

</script>

<template>

    <Link 
        :href="href"
        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

        <slot name="nav-icon"/>

        <span class="flex-1 ml-3 text-left whitespace-nowrap">
            <slot name="nav-description"/>
        </span>
    

    </Link>

</template>