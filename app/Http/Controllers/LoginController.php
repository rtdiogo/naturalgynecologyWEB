<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Usuario::where('email', $request->email)->exists() && Usuario::where('senha', md5($request->senha))->exists()){
            $usuario = Usuario::firstWhere('email', $request->email);
            session(['usuario' => $usuario]);

            return redirect()->route('home');
        }else{
            return redirect()->back()->with('error', 'E-mail ou senha incorreto.');
        }
    }
    public function sair(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('inicio');
    }
}
