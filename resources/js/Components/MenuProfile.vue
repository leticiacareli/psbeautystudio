<script setup>
</script>

<template>

    <div class="py-3 px-4">

        <span class="block text-sm font-semibold text-gray-900 dark:text-white">
            {{ $page.props.auth.user.name }}
        </span>

        <span class="block text-sm text-gray-900 truncate dark:text-gray-400">
            {{ $page.props.auth.user.email }}
        </span>

    </div>

    <ul aria-labelledby="dropdown" class="py-1 text-gray-700 dark:text-gray-300">

        <li>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">
                Meu perfil
            </a>
        </li>

        <li>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">
                Configurações da conta
            </a>
        </li>

    </ul>

    <ul aria-labelledby="dropdown" class="py-1 text-gray-700 dark:text-gray-300">
        
        <li>

            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                Sair
            </a>
            
        </li>
    </ul>

</template>