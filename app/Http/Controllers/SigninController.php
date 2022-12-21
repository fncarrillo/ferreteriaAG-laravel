<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SigninController extends Controller
{
    public function index(){
        return view('signin');
    }

    public function store(Request $request){

        $validador = Validator::make($request->post(), [
            'nombre'    =>  ['required', 'alpha'],
            'email'     =>  ['required', 'email'],
            'password'  =>  ['required', 'alpha_dash'],
        ] );

        if($validador->fails()){
            return redirect()->back()->withErrors($validador)->withInput();
        }

        $email = $request->post('email');
        $registro = DB::select("SELECT COUNT(`id_usuario`) AS cantidad FROM `usuarios` WHERE `email`='.$email.'");
        $cantidad_correos_iguales = $registro[0];
        if($cantidad_correos_iguales->{'cantidad'} <= 0){
            DB::transaction( function () use ( $request ){
                DB::insert( 'INSERT INTO `usuarios` (`email`, `nombre`, `apellido`, `password`) VALUES (?, ?, ?, ?)',
                    [
                        $request->post('email'),
                        $request->post('nombre'),
                        $request->post('apellido'),
                        Hash::make($request->post('password'))
                    ]);
            });
        }else{
            return redirect()->back()->withErrors("Ya existe un usuario con el email proporcionado.")->withInput();
        }

        return redirect('inicio');
    }
}
