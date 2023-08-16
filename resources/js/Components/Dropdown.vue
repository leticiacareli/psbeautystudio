<script setup>

    import ArrowDownIcon from './Icons/ArrowDownIcon.vue';

</script>

<template>

    <button
        type="button"
        class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">

        <slot name="icon"/>

        <span class="flex-1 ml-3 text-left whitespace-nowrap">
            <slot name="description"/>

        </span>

        <ArrowDownIcon/>

    </button>
</template>