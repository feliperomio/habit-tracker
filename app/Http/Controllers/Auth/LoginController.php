<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest; 
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password'); //obtém apenas os campos de email e senha do request.
        if(Auth::attempt($credentials)){
            $request -> session()->regenerate(); //se o usuário informar as credenciais corretas, a sessão é regenerada para evitar ataques de fixação de sessão.

            return redirect()->intended('/dashboard'); //redireciona o usuário para a página de destino pretendida ou para a página inicial.
        }

            return back()->withErrors([
                'email' => 'Credenciais Inválidas',
            ]);
        
    }

    public function logout(Request $request):RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate(); //invalida a sessão atual do usuário.
        $request->session()->regenerateToken(); //gera um novo token CSRF para a próxima solicitação.

        return redirect('/'); //redireciona o usuário para a página de login após o logout.
    }

}
