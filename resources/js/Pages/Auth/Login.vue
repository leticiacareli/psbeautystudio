<script setup>

    import Checkbox from '../../Components/Checkbox.vue';
    import InputError from '../../Components/InputError.vue';
    import InputLabel from '../../Components/InputLabel.vue';
    import InputText from '../../Components/InputText.vue';
    import PrimaryButton from '../../Components/PrimaryButton.vue';

    import CloseEyeIcon from '../../Components/Icons/CloseEyeIcon.vue';
    import EyeIcon from '../../Components/Icons/EyeIcon.vue';

    import { useForm, Head, Link } from '@inertiajs/vue3';
    import { ref } from 'vue';
    
    /**
     * Função do Vue.js usado para definir as propriedades que um componente pai pode passar para um componente filho.
     * 'canResetPassword': É uma propriedade booleana que indica se é possível redefinir a senha.
     * Isso permite que o componente pai passe essa informalçao para o componente filho.
     * 'status': 
    */
    defineProps({
        canResetPassword: {
            type: Boolean,
        },

        status: {
            type: String,
        }
    });

    /**
     * Inicializando um objeto chamado 'form' usando a função 'useForm'. Usado para lidar com formulários reativos.
     * O objeto 'form' contém os campos do formulário login.
    */
    const form = useForm({
        email: '',
        password: '',
        remember: false,
    });

    /**
     * Definindo uma função chamada 'submit', será chamada quando o formulário for enviado.
     * Dentro da função, você está usando o método 'form.post' para enviar uma solicitação POST para rota 'login'
     * usando o Inertia.js. A opção 'onFinish' é fornecida, sendo uma função que será chamada quando a solicitação POST for concluída.
     * Neste caso, a função 'form.reset' é chamada com o argumento 'password', redefinindo a campo senha após o envio bem-sucedido do formulário
    */
    const submit = () => {
        form.post(route('login'), {
            onFinish: () => form.reset('password'),
        });
    }

    /**
     * Criando uma variável reativa chamada 'showPassword' usando a função 'ref'. 
     * A variável é inicializada com o valor 'false', pois o estado atual da exibição da senha está definido como oculto.
    */
    const showPassword = ref(false);

    /**
     * Esta função será chamada quando o 'button' ativar a alternância para exibir ou ocultar a senha.
    */
    function toggleShowPassword()
    {
        /**
         * Alterna o valor da variável reativa 'showPassword'. Se o valor for 'false', 
         * ao clicar no 'button' o estado da variável altera para 'true'.
        */
        showPassword.value = !showPassword.value;
    }

</script>

<template>
    <Head title="Login"/>

    <section class="bg-gray-50 dark:bg-gray-900">

        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">

                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Painel de Gerenciamento
                    </h1>

                    <form 
                        @submit.prevent="submit"
                        class="space-y-4 md:space-y-6">

                        <div>

                            <InputLabel
                                for="email"
                                value="E-mail"/>
                            
                            <InputText
                                id="email"
                                type="email"
                                placeholder="exemplo@exemplo.com"
                                class="mt-1 block w-full"
                                v-model="form.email"
                                required
                                autofocus/>

                            <InputError
                                class="mt-2"
                                :message="form.errors.email"/>
                                
                        </div>

                        <div class="relative mt-4">

                            <InputLabel
                                for="password"
                                value="Senha"/>
                            
                            <InputText
                                id="password"
                                :type="showPassword ? 'text' : 'password'"
                                placeholder="••••••••"
                                class="mt-1 block w-full"
                                v-model="form.password"
                                required/>

                            <button type="button" class="absolute right-4 bottom-2.5" @click="toggleShowPassword">

                                <EyeIcon :class="{'hidden' : showPassword}"/>

                                <CloseEyeIcon :class="{'hidden' : !showPassword}"/>

                            </button>

                            <InputError
                                class="mt-2"
                                :message="form.errors.password"/>    

                        </div>

                        <div class="flex items-center justify-between">

                            <div class="flex items-start">

                                <div class="flex items-center h-5">

                                    <Checkbox
                                        id="remember"
                                        name="remember"
                                        v-model:checked="form.remember"/>

                                </div>

                                <div class="ml-3 text-sm">

                                    <label for="remember" class="text-gray-500 dark:text-gray-300">
                                        Mantenha-me conectado
                                    </label>

                                </div>

                            </div>

                            <!-- v-if="canResetPassword"
                                :href="route('password.request')" -->
                                <!-- TODO: Funcionalidade de resetar a senha -->

                            <Link
                                class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">

                                Esqueceu a senha?

                            </Link>

                        </div>

                        <PrimaryButton 
                            class="mt-4"
                            :class="{'opacity-25': form.processing}" 
                            :disabled="form.processing">
                            Entrar
                        </PrimaryButton>

                    </form>

                </div>

            </div>  

        </div>

    </section>

</template>