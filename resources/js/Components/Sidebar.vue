<script setup>

    //Icons
    import OverviewIcon from '../Components/Icons/OverviewIcon.vue';
    import PageIcon from '../Components/Icons/PageIcon.vue';
    import ArrowDownIcon from '../Components/Icons/ArrowDownIcon.vue';
    import SaleIcon from './Icons/SaleIcon.vue';
    import MessageIcon from '../Components/Icons/MessageIcon.vue';

</script>

<template>

    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">

        <ul class="space-y-2">

            <li>

                <a 
                    href="#" 
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <OverviewIcon/>

                    <span class="ml-3">Geral</span>

                </a>

            </li>

            <li>

                <button
                    type="button"
                    aria-controls="dropdown-register"
                    data-collapse-toggle="dropdown-register"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">

                    <PageIcon/>

                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Cadastros</span>

                    <ArrowDownIcon/>

                </button>
                
                <ul id="dropdown-register" class="hidden py-2 space-y-2">

                    <li>

                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">

                            Cliente

                        </a>

                    </li>

                    
                    <li>
                        
                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            
                            Procedimento
                            
                        </a>
                        
                    </li>

                    
                    <li>
                        
                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            
                            Produto
                            
                        </a>
                        
                    </li>

                    <li>

                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">

                            Usuário

                        </a>

                    </li>

                </ul>

            </li>

            <button
                type="button"
                aria-controls="dropdown-sale"
                data-collapse-toggle="dropdown-sale"
                class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">

                <SaleIcon/>

                <span class="flex-1 ml-3 text-left whitespace-nowrap">Vendas</span>

                <ArrowDownIcon/>

            </button>

            <ul id="dropdown-sale" class="hidden py-2 space-y-2">

                <li>

                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">

                        Venda (PDV)

                    </a>

                </li>

                <li>

                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">

                        Pagamentos

                    </a>

                </li>

            </ul>

            <li>

                <a href="#" class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <MessageIcon/>

                    <span class="flex-1 ml-3 whitespace-nowrap">Mensagens</span>

                    <span class="inline-flex justify-center items-center w-5 h-5 text-xs font-semibold rounded-full text-primary-800 bg-primary-100 dark:bg-primary-200 dark:text-primary-800">4</span>

                </a>

            </li>

        </ul>

        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
            
        </ul>

    </div>

</template>