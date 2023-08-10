<script setup>

    import { computed } from 'vue';

    /**
     * Definindo um evento chamada 'update:checked', que poderá emitir um evento, quando ocorrerem alterações relevantes.
    */
    const emit = defineEmits([
        'update:checked'
    ]);

    /**
     * Função usada para definir as propriedades que o componente pai poderá passar para o componente filho.
     * 'checked': uma propriedade obrigatória que pode ser do tipo 'Array' ou 'Boolean', ela representa o estado de seleção a caixa de seleção.
     * 'value': uma propriedade opcional que possui um valor adicional, se necessário.
    */
    const props = defineProps({
        checked: {
            type: [Array, Boolean],
            required: true,
        },

        value: {
            default: null,
        }
    });

    /**
     * Criando uma propriedade computada chamada 'proxyChecked'. Propriedades computadas no Vue.js são derivadas de outras propriedades
     * e podem ser usadas como propriedades reativas.
     * 'get()': A função de obtenção retorna o valor da propriedade 'checked' recebida através das propriedades ('props.checked').
     * 'set(val)': a função de definição é chamada quando a propriedade 'proxyChecked' é modificada. Quando isso acontece, o evento 'update:checked'
     * é emitido como o novo valor 'val' como argumento. Isso permite que o componente pai detecte as mudança de estado da caixa de seleção. 
    */
    const proxyChecked = computed({
        get() {
            return props.checked;
        },

        set(val) {
            emit('update:checked', val);
        },
    });

</script>

<template>

    <input 
        type="checkbox"
        :value="value"
        v-model="proxyChecked"
        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"/>

</template>