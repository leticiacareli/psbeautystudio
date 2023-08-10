<script setup>

    import { onMounted, ref } from 'vue';

    /**
     * Usando a função 'defineProps' para definir as propriedades que este componente pode receber.
     * Há uma propriedade chamada 'modelValue', do tipo 'String' e é obrigatória (definida como 'required: true').
     * 
     * OBS: No Vue, a propriedade 'modelValue' é uma convenção usada para passar dados de entrada para componentes personalizados
     */
    defineProps({
        modelValue: {
            type:String,
            required: true,
        }
    });

    /**
     * Usando a função 'defineEmits' para definir os eventos que este componente pode emitir. 
     * Definindo um evento chamado 'update:modelValue', que é também uma convenção do Vue para emitir eventos quando um valor é atualizado.
     * Isso permite que o componente pai atualize a propriedade 'modelValue' quando necessário.
    */
    defineEmits(['update:modelValue']);

    /**
     * Criando uma referência reativa chamada 'input' usando a função 'ref'.
     * Esta referência será usada para acessar um elemento de entrada (input) no DOM.
    */
    const input = ref(null);

    /**
     * Usando o gancho 'onMounted' para executar uma função quando o componente é montado no DOM.
     * Dentro dessa função, verifica se o elemento referenciado por 'imput' tem o atributo 'autofocus', se ele tiver,
     * o foco é definido nesse elemento usando método 'focus()'.
    */
    onMounted(() => {
        if(input.value.hasAttribute('autofocus')){
            input.value.focus();
        }
    });

    /**
     * Utilizando a função 'defineExpose' para tornar o método 'focus()' acessível ao componente pai.
     * Esse método permite que o componente pai chame 'focus()' para definir o foco no elemento referenciado por 'input'.
    */
    defineExpose({focus: () => input.value.focus});

</script>

<template>

    <input
        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"/>

</template>