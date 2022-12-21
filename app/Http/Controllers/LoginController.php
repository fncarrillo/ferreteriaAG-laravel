<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function index(){
        $url = url()->previous();
        if(!str_contains($url,'login')) {
            session(['previous-url' => $url]);
        }
        return view('login');
    }

    public function store(Request $request)
    {
        if(Auth::attempt([
            'email' => $request->post('email'),
            'password' => $request->post('password'),
        ])){
            $request->session()->regenerate();
            return redirect(session('previous-url'));
        }
        else {
            return back()->withErrors([
                'email' => 'El email no es valido.',
                'contraseña' => 'La contraseña no coincide con el email proporcionado.'
            ]);
        }
    }

    public function destroy(Request $request)
    {
        $request->session()->invalidate();
        return redirect('inicio');
    }

}

