<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class AuthController extends Controller
{   
    /**
     * Método para exibir o formulário de login
    */
    public function showLoginForm():Response
    {
        return Inertia::render('Auth/Login');
    }

    /**
     * A função 'login' recebe um objeto 'Request' como parâmetro, que contém os dados da requisição HTTP,
     * incluindo os campos enviados através do formulário de login.
    */
    public function login(Request $request)
    {
        /**
         * Validação do campos enviados no formulário de login, utilizando o método 'validate()' do objeto
         * '$request' para garantir que os campos "email" e "password" estejam presentes e atendam aos critérios
         * de validação especificados. O campo "email" deve ser obrigatório e válido como endereço de e-mail e o
         * campo "password" também deve ser obrigatório.
        */
        $credentials = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required',
        ]);

        /**
         * Verificando se o campo "remember" está presente na requisição. 
        */
        $rememberMe = $request->has('remember');

        /**
         * Tentiva de autenticar o usuário usando as credenciais fornecidas (email e senha). O método 'attempt()' é 
         * fornecido pelo Facade 'Auth', que é responsável pela autenticação no Laravel. 
         * Se a autenticação for bem sucedida o código prossegue com a criação de um token de acesso. 
        */
        if(Auth::attempt($credentials, $rememberMe))
        {   
            /**
             * Se o usuário estiver autenticado, esse trecho de código exclui todos os tokens de acesso existentes do usuário.
             * Isso é feito para garantir que apenas um token seja válido para o usuário em um determinado momento.
            */
            $request->user()->tokens()->delete();

            /**
             * É criado um novo token de acesso para o usuário. 
             * Esse token é usado para autorizar futuras solicitações do usuário no sistema.
             * O token é associado a um nome, neste caso "newToken"
            */
            $token = $request->user()->createToken('createToken')->plainTextToken;

            /**
             * Redireciona o usuário para rota "dashboard", o método 'intended()' redireciona o usuário para a URL
             * originalmente solicitada antes de ser redirecionado para redirecionado para o formulário de login.
            */
            $response = redirect()->intended(route('dashboard'));

            /**
             * Se o usuário tiver selecionado a opção "Mantenha-me conectado", no formulário de login, esse trecho de código
             * adiciona um cookie ao redirecionamento. O cookie contém o token de acesso gerado e tem uma duração de 30 dias.
            */
            if($rememberMe)
            {
                $response->withCookie(cookie('rememberMe', $token, 60*24*30));
            }

            /**
             * Retorna a resposta para a rota "dashboard" ou para a rota originalmente solitada pelo usuário.
            */
            return $response;
        }
        else
        {
            /**
             * Se a autenticação falhar (ou seja, as credenciais do usuário não correspondem aos registros do banco de dados), 
             * este bloco de código é executado. Ele redireciona o usuário de volta ao formulário de login com uma mensagem de erro.
             * A função 'withErrors' adiciona o erro à sessão para que possam ser exibidas no formulário, e 'withInput() mantém
             * os dados do formulário preenchidos pelo usuário (como o endereço de e-mail) para que ele não precise digitar novamente.
            */
            return redirect()->back()->withErrors(['email' => 'As credenciais informadas são inválidas'])->withInput();
        }
    }

    /**
     * Método para efetuar o logout
    */
    public function logout(Request $request)
    {
        /**
         * Excluindo todos os tokens de autenticação associados os usuário que está realizando o logout.
         * Isso é feito usando o método 'tokens()' do modelo de usuário atenticado '$request->user()',
         * que retorna uma relação dps tokens associados ao usuário, e em seguida, o método 'delete()' é chamado para excluir esses tokens.
        */
        $request->user()->tokens()->delete();

        /**
         * Executa o logout do usuário autenticado. Isso invalida a sessão de autenticação do usuário, efetivamente deslogando-o do aplicativo.
        */
        Auth::logout();

        /**
         * Redirecionando o usuário para o formulário de login após o logout ser realizado com sucesso.
         * Além disso, o código também está removendo o cookie, que foi utilizado para lembrar do usuário
         * em visitas subsequentes ao aplicativo.
        */
        return redirect()->route('login')->withCookie(cookie()->forget('rememberMe'));
    }

    public function getUser(){
        return Auth::user();
    }
}
