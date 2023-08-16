<script setup>

    import { Head } from '@inertiajs/vue3';
    import BaseDashboard from '../Layout/BaseDashboard.vue';
    import DefaultDashboard from '../Components/DefaultDashboard.vue';
    import CustomerIndex from '../Pages/Customer/Index.vue';

</script>

<template>

    <Head title="Dashboard"/>

    <BaseDashboard>
        <DefaultDashboard/>
    </BaseDashboard>

</template>