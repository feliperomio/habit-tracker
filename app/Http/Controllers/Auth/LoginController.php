<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6', 
             ]);
        if(Auth::attempt($credentials)){
            $request -> session()->regenerate(); //se o usuário informar as credenciais corretas, a sessão é regenerada para evitar ataques de fixação de sessão.

            return redirect()->intended('/'); //redireciona o usuário para a página de destino pretendida ou para a página inicial.
        }else{
            return back()->withErrors([
                'email' => 'As credenciais são inválidas.',
            ])->onlyInput('email');
        }




    }


}
